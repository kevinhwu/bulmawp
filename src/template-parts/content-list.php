<div id="post-<?php the_ID(); ?>" <?php post_class("entry box "); ?>>

	<h2 class="entry-title"><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

	<?php get_template_part( 'template-parts/entry', 'meta' ); ?>

			<?php if ( has_post_thumbnail() ) { ?>
				<div class="entry-img mt1">
					<a target="_blank" href="<?php the_permalink(); ?>" style="text-align:center;">
						<img src=<?php the_post_thumbnail_url('full'); ?>>
					</a>
				</div><!-- .thumbnail-wrap -->
			<?php } ?>




				<div class="entry-summary mt1">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->


</div><!-- #post-<?php the_ID(); ?> -->
