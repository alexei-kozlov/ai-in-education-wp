<?php /**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package AI_in_Education
 */ ?>
<?php get_header(); ?>

  <main id="primary" class="site-main">
    <section class="search-results-list blog-standard-area section-padding bg-white-100">
      <div class="container">
        <?php if (have_posts()) : ?>
          <h1 class="search-title">
            <?php
            printf(esc_html__('Вы искали: %s', 'ai-in-education'), '<span>' . get_search_query() . '</span>');
            ?>
          </h1>
          <div class="row">
            <div class="col-lg-8">
              <?php while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'search');

              endwhile; ?>
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