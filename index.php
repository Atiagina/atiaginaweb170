<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('description');?> | <?php bloginfo('name');?> | Seattle, WA</title>
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
<a href="home.html"><img src="<?php bloginfo('template_directory'); ?>/images/clickbutton.jpg" alt="clickbutton" id="click" /></a> 
</div>
<h4>Tattoo Artist and Painter from Seattle, WA </h4>
</header>


<nav id="nav-main">
<ul id="nav-main-ul">
<li><a href="main.html" class="about-link">About </a>
</li>
<li><a href="javascript:;" class="tattoo-link">Tattoo</a>
</li>
<li><a href="javascript:;">Painting</a>
</li>
<li><a href="javascript:;">Blog</a></li>
<li><a href="contact.php" class="contact-link">Contact</a>
</li>
</ul>
</nav>

<div id="middle">

<aside id="primary">
          
 <nav id="nav-sub">
      
        <ul>
<li><a href="javascript:;" class="about-link"><h3>About</h3> </a>
<ul><li><a href="javascript:;" class="bio-link">Biography</a></li>
<li><a href="javascript:;">How I Work</a></li>
</ul>
</li>
<li><a href="javascript:;"><h3>Tattoo</h3></a>
<ul><li><a href="javascript:;">Gallery</a></li>
<li><a href="javascript:;">Rates</a></li>
</ul>
</li>
<li><a href="javascript:;"><h3>Painting</h3></a>
<ul><li><a href="javascript:;">Gallery</a></li>
<li><a href="javascript:;">How to Buy</a></li>
</ul>
</li>
<li><a href="javascript:;"><h3>Blog</h3></a></li>
<li><a href="javascript:;" class="contact-link"><h3>Contact</h3></a>
<ul><li><a href="contact-form.php" class="contact-form">Make an Appointment</a></li>
</ul></li>
<li><a href="javascript:;"><h3>Sitemap</h3></a></li>
</ul>

</nav> <!--  end of nav-sub  -->
                  

       
        </aside><!-- /primary -->
       
<div id="main">       


<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- start the loop-->
<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php the_content(); ?>
<?php endwhile; endif; ?>   <!--end the loop -->      
  
</div> <!--  end of the content div  -->

<aside id="secondary">

 <div id="aside-nav">
 <ul>
            <li><a href="#" id="letsplan"><h3>Let's Plan Your Future Tattoo</h3></a></li>
            <li><a href="#" id="learnabout"><b>Learn About The Process</b></a></li>
            <li><a href="#" id="inspiration"><b>Look For Some Inspiration</b></a></li>
            <li><a href="contact-form.php" id="meetme"><b>Meet Me For A Consultation</b></a></li>
          </ul>
</div>        
   
<div id="gotattoo">

<h3><a href="tattoo-gallery.php">Tattoo Gallery</a></h3>
</div>

<div id="gopainting">
<h3><a href="paint-gallery.php">Paintings</a></h3>
</div>   
</aside>  <!--  end of secondary aside  -->

</div> <!--  end of main  -->
<div id="instagram">
<!-- SnapWidget -->
<script src="http://snapwidget.com/js/snapwidget.js"></script>
<iframe src="http://snapwidget.com/in/?h=YXhpdGF0dG9vfGlufDEyNXw0fDF8fG5vfDIwfG5vbmV8b25TdGFydHx5ZXN8eWVz&ve=110315" title="Instagram Widget" class="snapwidget-widget"allowTransparency="true" frameborder="0" scrolling="no"></iframe>
</div> <!-- end of instagram -->

 </div> <!--   end of middle div  -->
 <footer>

    
    
   <nav id="nav-footer">  
    <ul id="footer5">
<li><a href="javascript:;">CONTACT</a>
<ul><li><a href="javascript:;">Make an Appointment</a></li></ul>
</li>
<li><a href="javascript:;">SITEMAP</a></li>
</ul>
<ul id="footer4">
    <li><a href="javascript:;">FAQ</a></li>
    </ul>
    <ul id="footer3">
    <li><a href="javascript:;">PAINTING</a>
<ul><li><a href="javascript:;">Gallery</a></li>
<li><a href="javascript:;">How to Buy</a></li></ul>
</li>
    </ul>
     
<ul id="footer2">
    <li><a href="javascript:;">TATTOO</a>
<ul><li><a href="javascript:;">Gallery</a></li>
<li><a href="javascript:;">Rates</a></li></ul>
</li>
    </ul>
 <ul id="footer1">
    <li><a href="javascript:;">ABOUT </a>
<ul><li><a href="javascript:;">Biography</a></li>
<li><a href="javascript:;">How I Work</a></li></ul>
</li>
    </ul>
  </nav>
<small>©Atiagina 2015 for Axi Tattoo</small>


</footer>

<!-- start WP footer -->

<?php wp_footer();?>

<!-- end WP footer -->
</body>
</html> 