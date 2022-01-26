<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package AI_in_Education
 */
?>
<?php get_header(); ?>

<main id="primary" class="site-main">

  <section class="error-404 not-found">
    <header class="page-header">
      <h1 class="page-title title"><?php esc_html_e('404', 'https://quality-edu.ru'); ?></h1>
      <p class="page-subtitle"><?php esc_html_e('Ой! Запрашиваемая страница не найдена...', 'https://quality-edu.ru'); ?></p>
    </header><!-- .page-header -->

    <div class="page-content">
      <p><?php esc_html_e('Похоже, что ничего не удалось найти. Попробуйте вернуться на главную страницу, воспользуйтесь одним из пунктов меню или поиском по сайту!', 'https://quality-edu.ru'); ?></p>

        <?php get_search_form(); ?>

    </div><!-- .page-content -->
  </section><!-- .error-404 -->

</main><!-- #main -->

<?php get_footer(); ?>
