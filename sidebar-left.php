<aside id="primary">


    <?php if(is_page()) : ?>          
<nav id="nav-sub">
<ul>    

        
  <?php if ($post->post_parent) { //if page has a parent
wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); 
} else { //if page doesnt have a parent
wp_list_pages(array('child_of' => $post->ID, 'title_li' => __('')));
} ?>



</ul>
</nav> <!--  end of nav-sub  -->

<?php endif; ?>

      
<?php if(!(is_page())) : ?>

<h2>Blog</h2>
<?php wp_list_categories( array('title_li' => '')); ?>
       
       <?php endif; ?>
    <!-- Start Quote -->
    
<?php if(get_post_meta($post->ID, 'Quote', true)) : ?>
<blockquote><?php echo get_post_meta($post->ID, 'Quote', true); ?> </blockquote>    
<?php endif; ?>    
    
    <!-- Begin dynamic sidebar -->
    <div class="widget">
    <?php dynamic_sidebar(); ?>
    </div>
     <!-- end dynamic sidebar -->

<!-- End Quote -->
    
        </aside><!-- /primary -->
       