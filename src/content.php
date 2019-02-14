<?php
/**
 * @package bulmawp
 * @since 0.1
 * @version 0.3
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("row-start align-start"); ?>>
  <?php if ( has_post_thumbnail() ) : ?>
    <div class="post-list-img ">
      <img src=<?php the_post_thumbnail_url('full'); ?>>
    </div>
  <?php endif; ?>

  <div class="post-list-body">
    <div class="content">
        <h3 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <div class="content">
          <div class="entry-meta is-size-7 row-start has-text-grey mb0">
            <div class="mr"><?php the_author(); ?></div>
            <div class="mr"><?php echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' );?></div>
            <div class="mr"><a href="<?php the_permalink(); ?>#comments"><?php comments_number(); ?></a></div>
          </div>
          <?php the_excerpt(); ?>
          <?php the_category( ', ' ); ?>
        </div>
    </div>
    <!-- <nav class="level is-mobile">
      <div class="level-left">
        <a class="level-item">
          <span class="icon is-small"><i class="fas fa-reply"></i></span>
        </a>
        <a class="level-item">
          <span class="icon is-small"><i class="fas fa-retweet"></i></span>
        </a>
        <a class="level-item">
          <span class="icon is-small"><i class="fas fa-heart"></i></span>
        </a>
      </div>
    </nav> -->
  </div>
</article>

<!--
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <?php if ( has_post_thumbnail() ) : ?>
<div class="featured-img-box">
  <a href="<?php the_permalink() ?>" class="featured-thumbnail" rel="bookmark">
    <div class="featured-thumbnail-inner" style="background-image:url(<?php the_post_thumbnail_url('full'); ?>);">
    </div>
  </a>
<?php else : ?>
<div class="no-featured-img-box">
<?php endif; ?>

  <h2 class="title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
  <div class="content">
    <p class="is-size-7 <?php if( has_tag() ) : echo 'is-marginless'; endif; ?>">
      <?php
      echo __( 'In ' );
      the_category( ', ' );
      echo __( ' by ' );
      the_author();
      echo ' / ';
      echo apply_filters( 'the_date', get_the_date(), get_option( 'date_format' ), '', '' );
      ?> / <a href="<?php the_permalink(); ?>#comments"><?php comments_number( '0 comments', '1 comment', '% comments' ); ?></a>
    </p>
    <?php the_excerpt(); ?>
  </div>
</div>
-->
<hr>
