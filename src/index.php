<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

get_header();
?>
  <div class="column">
    <?php bulmawp_breadcrumbs(); ?>
    <div class="content">
      <?php
      if( have_posts() ) :
        while( have_posts() ) :
          the_post();
          // get_template_part( 'content' );
          get_template_part('template-parts/content', 'list');
        endwhile;
      endif;
      ?>
    </div>
    <?php bulmawp_pagination(); ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
