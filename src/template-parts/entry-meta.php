<div class="entry-meta is-size-7 row-start has-text-grey" >

		<div class="entry-author mr"><?php the_author(); ?></div>
		<div class="entry-date mr"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' );?></div>
		<div class="entry-comment-number mr"><?php comments_popup_link( '0评论', '1评论', '%评论', 'comments-link', ''); ?></div>


		<div class="entry-category"> <?php the_category( ', ' ); ?></div>
</div><!-- .entry-meta -->
