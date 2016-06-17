jQuery(document).ready(function(){
	jQuery('#destacados').carouFredSel({
		items: 3,
		scroll: {
			items: 3,
			duration: 1000
		},
		prev: {
			button: '#left-destacados'
		},
		next: {
			button: '#right-destacados'
		},
		pagination: '#nav-dots-destacados'
	});
});