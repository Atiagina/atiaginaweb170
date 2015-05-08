<aside id="primary">


    <?php if(is_page()) : ?>          
<?php wp_nav_menu(array('theme_location' => 'main-menu', 'container' => 'nav', 'container_class' => '', 'container_id' => 'nav-sub', 'menu_class' => false, 'menu_id' => 'nav-sub')); ?>
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
        </aside><!-- /primary -->
       