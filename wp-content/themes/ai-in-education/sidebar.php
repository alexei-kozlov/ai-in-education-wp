<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AI_in_Education
 */
if (!is_active_sidebar('sidebar-1')) {
    return;
} ?>

<aside class="announcement widget-area col-lg-4 px-8">
  <!-- Block Widget Start -->
  <div class="block-widget pt-30 mt-30">
      <?php
      $args = array(
          'numberposts' => 3,
          'category_name' => 'anonsi',
          'orderby' => 'date',
          'order' => 'DESC',
          'include' => array(),
          'exclude' => array(),
          'meta_key' => '',
          'meta_value' => '',
          'post_type' => 'post',
          'suppress_filters' => true,
      );
      $posts = get_posts($args); ?>
    <div class="block-widget-title">
      <h2 class="black-color text-left text-lg-center">
          <?php echo get_cat_name(3); ?>
      </h2>
    </div>
    <ul class="block-widget-list p-10">
        <?php foreach ($posts as $post) : setup_postdata($post); ?>
          <li class="block-widget-module">
            <a class="announcement-link d-flex"
               href="<?php the_permalink(); ?>">
              <div class="block-img">
                  <?php the_post_thumbnail('sidebar-announcement'); ?>
              </div>
              <div class="block-widget-content ml-15">
                <div class="block-meta-date pb-15">
                  <span class="date gray-color">
                      <?php the_field('entertainment-date'); ?>
                  </span>
                </div>
                <div class="block-content">
                  <h3 class="black-color-100">
                      <?php the_title(); ?>
                  </h3>
                </div>
              </div>
            </a>
          </li>
        <?php endforeach; ?>
    </ul>
    <div class="block-widget-url text-center border-bottom">
      <a href="<?php the_permalink(39); ?>">
        <span class="link-more gray-color">Читать еще</span>
      </a>
    </div>
  </div>
  <!-- Block Widget Start -->
</aside>
