<?php 
/**
 * The template for displaying all single posts.
 *
 */

get_header(); ?>

<div id="primary" class="container">
  <main id="single" class="row">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part('content', 'single'); ?>

    <?php endwhile; ?>

  </main>
</div>

<?php
/* Uncomment this if you want to use a sidebar here
 * get_sidebar();
 */
?>

<?php get_footer(); ?>