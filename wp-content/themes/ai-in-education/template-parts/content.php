<?php /**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_in_Education
 */ ?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php
    if (is_singular()) :
      the_title('<h1 class="search-title">', '</h1>');
    else :
      the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
    endif;

    if ('post' === get_post_type()) :
      ?>
      <div class="entry-meta">
        <?php
        ai_in_education_posted_on();
        // ai_in_education_posted_by();
        ?>
      </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php ai_in_education_post_thumbnail(); ?>

  <div class="entry-summary pb-10 text-justify">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->

  <footer class="entry-footer">
    <a class="entry-footer-link" href="<?php the_permalink(); ?> '" rel="bookmark">Читать полностью</a>
  </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
