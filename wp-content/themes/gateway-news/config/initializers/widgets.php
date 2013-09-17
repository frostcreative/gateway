<?php
// Declare sidebar widget zone
    if (function_exists('register_sidebar')) {	
		register_sidebar(array(
    		'name' => 'Widget',
    		'id'   => 'widget',
    		'before_widget' => '<div id="%1$s" class="widget">',
    		'after_widget'  => '</div>',
    		'before_title'  => '<h1>',
    		'after_title'   => '</h1>'
    	));

    }

?>