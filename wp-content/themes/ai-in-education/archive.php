<?php /**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_in_Education
 */ ?>
<?php get_header(); ?>

  <main id="primary" class="site-main">
    <section class="archive-results-list search-results-list blog-standard-area section-padding bg-white-100">
      <div class="container">
        <?php if (have_posts()) : ?>
          <?php
          the_archive_title('<h1 class="archive-title search-title">', '</h1>');
          the_archive_description('<div class="archive-description">', '</div>');
          ?>
          <div class="row">
            <div class="col-lg-8">
              <?php while (have_posts()) :
                the_post();

                get_template_part('template-parts/content', get_post_type());

              endwhile;

              the_posts_navigation(); ?>
            </div>
            <?php get_sidebar(); ?>
          </div>
        <?php else :

          get_template_part('template-parts/content', 'none');

        endif; ?>
      </div>
    </section>
  </main><!-- #main -->

<?php get_footer(); ?>