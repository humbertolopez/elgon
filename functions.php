<?php
	//crear nuestro menu
	function register_elgon_menu(){
		register_nav_menu('header-menu',__('Menú principal Elgon'));
	}
	//action crear menu
	add_action('init','register_elgon_menu');
	//menu inferior
	function register_elgon_footer_menu(){
		register_nav_menu('footer-menu',__('Menú footer Elgon'));
	}
	add_action('init','register_elgon_footer_menu');
	//widget de información contacto
	function elgon_top_bar(){
		register_sidebar(array(
			'name' => 'Elgon topbar',
			'id' => 'topbar',
			'before_widget' => '<div>',
			'after_widget' => '</div>',
		));
	}
	//action para crear widget
	add_action('widgets_init','elgon_top_bar');
	//agregar lean slider a los scripts
	function lean_slider(){
		if(is_front_page()){
			wp_register_script('lean-slider',get_template_directory_uri() .'/js/lean-slider.js',array('jquery'),1.0,true);
			wp_register_style('lean-slider-style',get_template_directory_uri() .'/styles/lean-slider.css',array(),1.0,'all');
			wp_register_script('start-slider',get_template_directory_uri() .'/js/start-slider.js',array('lean-slider'),1.0,true);
			wp_enqueue_style('lean-slider-style');
			wp_enqueue_script('lean-slider');
			wp_enqueue_script('start-slider');
		}		
	}
	add_action('wp_enqueue_scripts','lean_slider');
	
	function caroufredsel(){
		if(is_front_page()){
			wp_register_script('caroufredsel',get_template_directory_uri() .'/js/jquery.carouFredSel-6.2.1-packed.js',array('jquery'),6.2,true);
			wp_register_script('start-carousel',get_template_directory_uri() .'/js/start-carousel.js',array('caroufredsel'),1.0,true);
			wp_enqueue_script('caroufredsel');
			wp_enqueue_script('start-carousel');
		}
	}
	add_action('wp_enqueue_scripts','caroufredsel');
	
	class extra_elgon_fields {
		function __construct(){
			add_action('edit_page_form',array($this,'elgon_ventajas_editor'));
			add_action('edit_form_advanced',array($this,'elgon_ventajas_editor'));
			add_action('save_post',array($this,'guardar_ventajas'));			
		}
		//mostrar el editor
		function elgon_ventajas_editor($post){
			wp_nonce_field('elgon_ventajas_editor','elgon_ventajas_editor_nonce');
			$content = get_post_meta($post->ID,'_ventajas',true);
			wp_editor($content,'ventajas',array(
				'textarea_name' => 'ventajas',
				'media_buttons' => false,
			));
		}
		//guardar el contenido del editor
		function guardar_ventajas($post_id){
			//revisa si el nonce se ha enviado
			if(!isset($_POST['elgon_ventajas_editor_nonce'])) {
				return $post_id;
			}
			//checa si el nonce es válido
			if(!wp_verify_nonce($_POST['elgon_ventajas_editor_nonce'],'elgon_ventajas_editor')) {
				return $post_id;
			}
			//no guarde en autosave
			if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
				return $post_id;
			}
			//checar permisos
			if('page' === get_post_type($post_id)) {
				if(!current_user_can('edit_page',$post_id)){
					return $post_id;
				}
			} else {
				if(!current_user_can('edit_post',$post_id)) {
					return $post_id;
				}
			}
			//limpiar contenido
			$sane_content = wp_kses_post($_POST['ventajas']);
			//guardar contenido 
			update_post_meta($post_id,'_ventajas',$sane_content);
		}		
	}
	$inicia_elgon = new extra_elgon_fields();

	function presentaciones_elgon(){
		add_meta_box('presentaciones_elgon','Presentaciones del producto','presentaciones_callback','post');		
	}
	add_action('add_meta_boxes','presentaciones_elgon');

	function presentaciones_callback($post){
		wp_nonce_field(plugin_basename(__FILE__),'presentaciones_nonce');		
		?>
			<label for="presentaciones">Presentaciones</label>
			<input name="presentaciones" value="<?php echo get_post_meta($post->ID,'_presentaciones',true); ?>">
		<?php
	}
	function presentaciones_save($post_id){
		$presentaciones_data = sanitize_text_field($_POST['presentaciones']);
		update_post_meta($post_id,'_presentaciones',$presentaciones_data);
	}
	add_action('save_post','presentaciones_save');
	//agrega soporte para imagenes destacadas
	add_theme_support('post-thumbnails');
	//nuevo tamaño de thumb
	add_image_size('carrusel',9999,165);
	//thumb para blog
	add_image_size('blog',9999,220);
	//migajas de pan
	function write_breadcrumb() {
		$pid = $post->ID;
		$trail = '<a href="'.get_bloginfo('url').'">'. __('Inicio', 'textdomain') .'</a>';

		if (is_front_page()) {
	        // do nothing
		}
		elseif (is_page()) {
			$bcarray = array();
			$pdata = get_post($pid);
			$bcarray[] = ' &raquo; '.$pdata->post_title."\n";
		while ($pdata->post_parent) {
			$pdata = get_post($pdata->post_parent);
			$bcarray[] = ' &raquo; <a href="'.get_permalink($pdata->ID).'">'.$pdata->post_title.'</a>';
		}
		$bcarray = array_reverse($bcarray);
			foreach ($bcarray AS $listitem) {
				$trail .= $listitem;
			}
		}
		elseif (is_single()) {
			$pdata = get_the_category('');
			$adata = get_post($pid);
			if(!empty($pdata)){
				$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
				$trail .= " &raquo; ".substr($data,0,-8);
			}
			$trail.= ' &raquo; '.$adata->post_title."\n";
		}
	   	elseif (is_category()) {
			$pdata = get_the_category($pid);
			$data = get_category_parents($pdata[0]->cat_ID, TRUE, ' &raquo; ');
			if(!empty($pdata)){
				$trail .= " &raquo; ".substr($data,0,-8);
			}
	   }
		$trail.="";
		return $trail;
	}
	//reduce el numero de palabras en el excerpt
	function wpdocs_custom_excerpt_length( $length ) {
	    return 20;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>