<div id="post-<?php the_ID(); ?>" <?php post_class("entry "); ?>>


		<div class="row-start align-start mt1">
			<?php if ( has_post_thumbnail() ) { ?>
				<div class="entry-img ">
					<a target="_blank" href="<?php the_permalink(); ?>">
						<img src=<?php the_post_thumbnail_url('full'); ?>>
					</a>
				</div><!-- .thumbnail-wrap -->
			<?php } ?>

			<div class="entry-overview grow">
				<h3 class="entry-title"><a target="_blank" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				<?php get_template_part( 'template-parts/entry', 'meta' ); ?>

				<div class="entry-summary mt1">
					<?php the_excerpt(); ?>
				</div><!-- .entry-summary -->
			</div>

		</div>

</div><!-- #post-<?php the_ID(); ?> -->
