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

//Register Sidebar

register_sidebar(array(
    'before_widget' => '<div>',
    'after_widget' => '</div>',
'before_title'=> '<h3>',
'after_title' => '</h3>'   
));

//end register sidebar


//enable featured images and post thumbnails

add_theme_support('post-thumbnails');

//add post type support

add_post_type_support('page', 'excerpt');

//title function

function get_my_title_tag(){

    global $post; //DO NOT forget it
    
    if (is_front_page()){ //the front page 
        bloginfo('description');
    
    }elseif (is_page() || is_single()) { //pages and postings
    
    the_title(); //title of the page or posting
        
    }else {
    
      bloginfo('description');  
    
    }
    
    if($post->post_parent){ //if there is a parent page
    
        echo ' | '; //separator with spaces
        echo get_the_title($post->post_parent); //title of a parent page
    }
    
    echo ' | '; //separator with spaces
    bloginfo('name'); //site name
    echo ' | '; //separator with spaces
    echo 'Seattle, WA'; //city and state

};