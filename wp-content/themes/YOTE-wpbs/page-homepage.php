<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<div class="main-body">


<div id="content" class="clearfix row page-content">

<div class="container-fluid">

  <div id="main" class="col col-sm-12 clearfix" role="main">
  
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    <article id="post-<?php the_ID(); ?>" <?php post_class('clearfix'); ?> role="article">
      <section class="post_content">
        <div class="container-fluid">
          <?php the_content(); ?>
        </div>
        <!-- end #container --> 
      </section>
      <!-- end article section -->
      
      <footer>
        <p class="clearfix">
          <?php the_tags('<span class="tags">' . __("Tags","wpbootstrap") . ': ', ', ', '</span>'); ?>
        </p>
      </footer>
      <!-- end article footer --> 
      
    </article>
    <!-- end article -->
    
    <?php endwhile; ?>
    <?php else : ?>
    <article id="post-not-found">
      <header>
        <h1>
          <?php _e("Not Found", "wpbootstrap"); ?>
        </h1>
      </header>
      <section class="post_content">
        <p>
          <?php _e("Sorry, but the requested resource was not found on this site.", "wpbootstrap"); ?>
        </p>
      </section>
      <footer> </footer>
    </article>
    <?php endif; ?>
    </div>
    <!-- end #main -->
   
  </div>
  <!-- end #content --> 
</div>
<!-- end #container -->
<?php get_footer(); ?>