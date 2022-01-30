<?php /**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_in_Education
 */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>

  <?php if ('post' === get_post_type()) : ?>
    <div class="entry-meta">
      <?php
      ai_in_education_posted_on();
      // ai_in_education_posted_by();
      ?>
    </div><!-- .entry-meta -->
  <?php endif; ?>

  <?php ai_in_education_post_thumbnail(); ?>

  <div class="entry-summary pb-10 text-justify">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->

  <footer class="entry-footer">
    <?php ai_in_education_entry_footer(); ?>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->