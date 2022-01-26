<?php
/**
 *
 * Template Name: Страница анонсов
 *
 */
?>
<?php get_header(); ?>

  <!-- Main Area Start -->
  <main>
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <section class="all-announcements blog-standard-area section-padding bg-white-100">
      <div class="container">
        <div class="row">
          <!--With sidebar need to be change col-12 on col-lg-8-->
          <div class="announcements col-12">
            <!-- Block Widget Start -->
            <div class="block-widget">
              <div class="block-widget-title">
                <h2 class="black-color">
                    <?php the_title(); ?>
                </h2>
              </div>
                <?php
                $args = array(
                    'numberposts' => 0,
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
              <ul class="block-widget-list">
                  <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <li class="block-widget-module">
                      <a class="announcement-link d-flex flex-column flex-sm-row"
                         href="<?php the_permalink(); ?>">
                        <div class="block-img">
                            <?php the_post_thumbnail('sidebar-announcement'); ?>
                        </div>
                        <div class="block-widget-content ml-15 mr-15 mt-15 mb-15">
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
            </div>
            <!-- Block Widget End -->
          </div>
        </div>
      </div>
    </section>
  </main>
  <!-- Main Area End -->

<?php get_footer(); ?>