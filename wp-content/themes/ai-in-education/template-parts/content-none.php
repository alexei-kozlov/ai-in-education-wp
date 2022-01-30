<?php /**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package AI_in_Education
 */ ?>

<div class="no-results not-found">
  <h1 class="page-title"><?php esc_html_e('Ничего не найдено', 'ai-in-education'); ?></h1>
  <div class="page-content">
    <?php
    if (is_home() && current_user_can('publish_posts')) :

      printf(
          '<p>' . wp_kses(
          /* translators: 1: link to WP admin new post page. */
              __('Готовы опубликовать свой первый пост? <a href="%1$s">Начните здесь</a>.', 'ai-in-education'),
              array(
                  'a' => array(
                      'href' => array(),
                  ),
              )
          ) . '</p>',
          esc_url(admin_url('post-new.php'))
      );

    elseif (is_search()) :
      ?>

      <p><?php esc_html_e('Извините, но ничего не соответствует вашим критериям поиска. Пожалуйста, попытайтесь снова с другими ключевыми словами.', 'ai-in-education'); ?></p>
      <?php
      get_search_form();

    else :
      ?>

      <p><?php esc_html_e('Кажется, мы не можем найти то, что вы ищете. Возможно, вам поможет поиск.', 'ai-in-education'); ?></p>
      <?php
      get_search_form();

    endif;
    ?>
  </div><!-- .page-content -->
</div><!-- .no-results -->