<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */

get_header();
?>
  <div class="column is-9">
    <?php
    bulmawp_breadcrumbs();
    if( have_posts() ) : while( have_posts() ) : the_post();
    ?>
      <div id="post-<?php the_ID(); ?>" <?php post_class("box"); ?>>
        <h1 class="title"><?php the_title(); ?></h1>
        <div class="content">
          <?php get_template_part( 'template-parts/entry', 'meta' ); ?>
          <hr>
					<?php the_content(); ?>
        </div>

	      <?php
	      $tags = get_tags();

	      if( has_tag() ) :
				?>
					<div class="level is-mobile">
						<div class="level-left">
							<div class="level-item">
								<p class="is-size-7">Tags:</p>
							</div>
							<div class="level-item">
										<div class="tags">
											<?php
											foreach ($tags as $tag) {
												echo '<a href="' . get_tag_link( $tag->term_id ) . '" class="tag">' . $tag->name . '</a>';
											}
											?>
										</div>
							</div>
						</div>
					</div>
				<?php	endif; ?>
        <?php comments_template(); ?>
      </div>
    <?php endwhile; endif; ?>
  </div>
  <?php get_sidebar(); ?>
<?php get_footer(); ?>
