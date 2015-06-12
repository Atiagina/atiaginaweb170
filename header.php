<!DOCTYPE html>
<html>
<head>
<title><?php get_my_title_tag();?> </title>
    
    <!-- Begin meta -->
    
<meta name="description" content="<?php echo get_the_excerpt(); ?>" />
<meta charset="UTF-8" />
<meta name="robots" content="noindex, nofollow"/>

<!-- Remy Sharp Shim --> 
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script> 
<![endif]-->

<link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet" />  
<style type="text/css">
<!--
   /* replace this line with embedded style rules */
-->  
</style>

<script src="js/jquery-1.11.0.min.js"></script>
	<script src="js/lightbox.min.js"></script>
 
<script src="http://code.jquery.com/jquery-1.4.4.min.js" type="text/javascript"></script>

<script type="text/javascript">
$(document).ready(function() {
$("img.rollover").hover( 
function() { this.src = this.src.replace("_off", "_on"); 
}, 
function() { this.src = this.src.replace("_on", "_off"); 
});
}); 
</script>

<script> 
<!--
var originalNavClasses;

/*function toggleNav() {
    var elem = document.getElementById('nav-main-ul');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}*/

function toggleNav() {
    var $ = document.getElementById('nav-main-ul');
   document.write($);
}

</script>

<!-- start  WP Head -->

<?php wp_head(); ?>

<!-- end WP head -->

</head>
<body <?php body_class(); ?> >

<header>
<div id="nav-header">
<a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/skype.jpg" alt="skype" id="skype" /></a>
<a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/insta.jpg" alt="instagram" id="insta" /></a>
<a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/facebook.jpg" alt="facebook" id="facebook" /></a>
</div>
<div id="logo-header">
<h1><a href="index.php">
 <span>Axi Tattoo Seattle</span> <!-- for SEO -->
<img src="<?php bloginfo('template_directory'); ?>/images/logo_axi300.jpg" alt="logo" id="logo" /></a> 
</h1> 
<a href="http://atiagina.com/web170/wordpress/contact/"><img src="<?php bloginfo('template_directory'); ?>/images/clickbutton.jpg" alt="clickbutton" id="click" /></a> 
</div>
<h4>Tattoo Artist and Painter from Seattle, WA </h4>
</header>



<!-- Begin new navigation -->

<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav', 'container_id' => 'nav-main', 'menu_class' => false, 'menu_id' => 'nav-main-ul',)); ?>

<!-- End new navigation -->

<div id="middle">
    
 <!-- end of header include -->  
