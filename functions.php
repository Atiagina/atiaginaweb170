<?php

/*
Theme Name: Anna Atiagina's Web 170 Theme
Author: Anna Atiagina 
Author URI: http://atiagina.com/
Description: This is my demo theme for SCC Web 170 Wordpress class
Version: 1.0
*/

//Register My Menus

register_nav_menus(array('main-menu' => __( 'Main' ),
));

//End register my menus


//enable featured images and post thumbnails

add_theme_support('post-thumbnails');
?>