<?php
	//subs de haircolor
	$haircolor = get_categories(array(
			'child_of' => 3
		));
	foreach($haircolor as $haircolorsub){
		if(in_category($haircolorsub)) {
			include(TEMPLATEPATH.'/single-producto.php');
		}
	}
	//subs de colorcare 
	$haircare = get_categories(array(
			'child_of' => 4
		));
	foreach($haircare as $haircaresub){
		if(in_category($haircaresub)) {
			include(TEMPLATEPATH.'/single-producto.php');
		}
	}
	//subs styling finishing
	$styling = get_categories(array(
			'child_of' => 5
		));
	foreach($styling as $stylingsub){
		if(in_category($stylingsub)) {
			include(TEMPLATEPATH.'/single-producto.php');
		}
	}
	//subs decolor
	$decolor = get_categories(array(
			'child_of' => 6
		));
	foreach($decolor as $decolosub){
		if(in_category($decolosub)) {
			include(TEMPLATEPATH.'/single-producto.php');
		}
	}
	//subs man
	$man = get_categories(array(
			'child_of' => 7
		));
	foreach($man as $mansub){
		if(in_category($mansub)) {
			include(TEMPLATEPATH.'/single-producto.php');
		}
	}
?>