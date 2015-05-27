<?php get_header(); ?>

<div id="middle"><div id="main-gallery">
<a href="javascript:;"><img src="<?php bloginfo('template_directory'); ?>/images/7_off.jpg" class="rollover" alt="image" /> </a>
<br />

</div>

<aside id="primary">
          
<div id="latest">
<h3>Latest news </h3>
    
    <?php query_posts('showposts=5&cat=news'); ?>
    <ul>
   <?php while(have_posts()) : the_post(); ?>
    <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
    <?php endwhile; ?>
    </ul>
</div>
         
        
        </aside><!-- /primary -->
       
<div id="main">       


<div id="content">
          <h3>Welcome to my Site</h3>
    <?php rewind_posts(); ?> 
         <?php while(have_posts()) : the_post(); ?>
    <?php the_content(''); ?>
    <?php endwhile; ?>
       
    
<small>front-page.php</small>  
</div> <!--  end of the content div  -->

<?php get_sidebar('right'); ?>

<?php get_footer(); ?>