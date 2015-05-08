<?php get_header(); ?>

<?php get_sidebar('left'); ?>

<div id="main">     
    
 

<div id="content">
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?><!-- start the loop-->
<h2><?php the_title(); ?></h2>
    <p>The by-line goes here</p>
<?php the_content(); ?>
<?php endwhile; endif; ?>   <!--end the loop -->  
    
    
<small>single.php</small>  
</div> <!--  end of the content div  -->

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>