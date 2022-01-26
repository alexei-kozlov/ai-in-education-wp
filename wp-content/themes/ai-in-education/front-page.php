<?php
/**
 *
 * Template Name: Главная страница
 *
 */
?>
<?php get_header(); ?>

  <!-- Main Area Start -->
  <main>
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <div class="container">
      <!-- Block Grid Four Start -->
      <div class="actual block_grid_four mt-30">
        <h2 class="black-color font-22" id="aktualnoe">Актуальное</h2>
        <div class="row">
          <div class="col-md-8 px-md-8 py-md-8">
            <div class="slider-active">
              <div class="block-module">
                  <?php
                  $args = array(
                      'numberposts' => 1,
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
                  $posts = get_posts($args);
                  foreach ($posts as $post) : setup_postdata($post); ?>
                    <a class="actual-link"
                       href="<?php the_permalink(); ?>">
                      <div class="block-img overlay-indego-black">
                          <?php the_post_thumbnail('sidebar-announcement'); ?>
                      </div>
                      <div class="block-grid-content">
                        <h3 class="white-color font-16">
                            <?php the_title(); ?>
                        </h3>
                        <p class="white-color d-none d-lg-block"></p>
                        <div class="block-meta d-flex justify-content-between">
                          <div class="block-meta-info white-color">
                            <ul>
                              <li class="d-inline-block">
                                <span><i class="far fa-clock"></i>
                                    <?php the_field('entertainment-date'); ?>
                                </span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </a>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>
          <div class="col-md-4 px-md-8 py-md-8">
            <div class="block-module right-column">
                <?php
                $args = array(
                    'numberposts' => 1,
                    'category_name' => 'novosti',
                    'orderby' => 'date',
                    'order' => 'DESC',
                    'include' => array(),
                    'exclude' => array(),
                    'meta_key' => '',
                    'meta_value' => '',
                    'post_type' => 'post',
                    'suppress_filters' => true,
                );
                $posts = get_posts($args);
                foreach ($posts as $post) : setup_postdata($post); ?>
                  <a class="actual-link"
                     href="<?php the_permalink(); ?>">
                    <div class="block-img overlay-indego-black">
                        <?php the_post_thumbnail('sidebar-announcement'); ?>
                    </div>
                    <div class="block-grid-content">
                      <h3 class="white-color font-16">
                          <?php the_title(); ?>
                      </h3>
                      <div class="block-meta">
                        <div class="block-meta-info white-color">
                          <ul>
                            <li>
                              <span><i class="far fa-clock"></i>
                                  <?php the_time('j F Y'); ?>
                              </span>
                            </li>
                          </ul>
                        </div>
                      </div>
                    </div>
                  </a>
                <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <!-- Block Grid Four End -->

      <div class="row">
        <div class="news col-lg-8 px-md-8">
          <!-- Block Grid Five Start -->
          <div class="block-grid-five pt-30 mt-30">
            <div class="d-flex align-items-center justify-content-between">
              <h2 class="black-color" id="novosti">
                  <?php echo get_cat_name(4); ?>
              </h2>
              <div>
                <a href="<?php the_permalink(41); ?>"
                   class="all-news-btn btn btn-blue-light extend uppercase">
                  Все новости
                </a>
              </div>
            </div>
            <div class="tabcontent active">
              <div class="row no-gutters">
                <div class="col-md-6 pr-md-8">
                    <?php
                    $args = array(
                        'numberposts' => 1,
                        'offset' => 1,
                        'category_name' => 'novosti',
                        'orderby' => 'date',
                        'order' => 'DESC',
                        'include' => array(),
                        'exclude' => array(),
                        'meta_key' => '',
                        'meta_value' => '',
                        'post_type' => 'post',
                        'suppress_filters' => true,
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) : setup_postdata($post); ?>
                      <div class="block-module">
                        <a class="news-link"
                           href="<?php the_permalink(); ?>">
                          <div class="block-img overlay-indego-black">
                              <?php the_post_thumbnail('sidebar-announcement'); ?>
                          </div>
                          <div class="block-grid-content-2">
                            <h3 class="white-color font-16">
                                <?php the_title(); ?>
                            </h3>
                            <div class="block-meta d-flex justify-content-between">
                              <div class="block-meta-info white-color">
                                <ul>
                                  <li>
                                <span><i class="far fa-clock"></i>
                                    <?php the_field('news-date'); ?>
                                </span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php endforeach; ?>
                </div>
                <div class="col-md-6">
                  <div class="news-wrapper h-100">
                      <?php
                      $args = array(
                          'numberposts' => 2,
                          'offset' => 2,
                          'category_name' => 'novosti',
                          'orderby' => 'date',
                          'order' => 'DESC',
                          'include' => array(),
                          'exclude' => array(),
                          'meta_key' => '',
                          'meta_value' => '',
                          'post_type' => 'post',
                          'suppress_filters' => true,
                      );
                      $posts = get_posts($args);
                      foreach ($posts as $post) : setup_postdata($post); ?>
                        <div class="row mx-0 h-md-50">
                          <div class="block-module">
                            <a class="news-link"
                               href="<?php the_permalink(); ?>">
                              <div class="block-img overlay-indego-black">
                                  <?php the_post_thumbnail('sidebar-announcement'); ?>
                              </div>
                              <div class="block-grid-content-2">
                                <h3 class="white-color font-16">
                                    <?php the_title(); ?>
                                </h3>
                                <div class="block-meta d-flex justify-content-between">
                                  <div class="block-meta-info white-color">
                                    <ul>
                                      <li>
                                <span><i class="far fa-clock"></i>
                                    <?php the_field('news-date'); ?>
                                </span>
                                      </li>
                                    </ul>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div>
                      <?php endforeach; ?>

                    <!--<div class="row mx-0 pt-10 pt-md-0 h-100 h-md-50">
                      <div class="block-module">
                        <a class="news-link"
                           href="novosti/nikitin-nizhegorodskaya-oblast-priznanniy-centr-innovacionnogo-i-tehnologicheskogo-razvitiya.html">
                          <div class="block-img overlay-indego-black">
                            <img src="uploads/news/news-2.jpg" alt="Фото новости">
                          </div>
                          <div class="block-grid-content-2">
                            <h3 class="white-color font-16">
                              Никитин: «Нижегородская область — признанный центр инновационного и технологического
                              развития»
                            </h3>
                            <div class="block-meta d-flex justify-content-between">
                              <div class="block-meta-info white-color">
                                <ul>
                                  <li>
                                <span><i class="far fa-clock"></i>
                                  20 декабря 2021
                                </span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>
                    <div class="row mx-0 pt-10 pt-md-8 h-100 h-md-50">
                      <div class="block-module">
                        <a class="news-link"
                           href="novosti/minprosvescheniya-i-mincifri-opredelili-kak-sleduet-osnaschat-shkoli-uchastvuyuschie-v-eksperimentalnom-vnedrenii-cos.html">
                          <div class="block-img overlay-indego-black">
                            <img src="uploads/news/news-3.jpg" alt="Фото новости">
                          </div>
                          <div class="block-grid-content-2">
                            <h3 class="white-color font-16">
                              Минпросвещения и Минцифры определили, как следует оснащать школы, участвующие в
                              экспериментальном внедрении ЦОС
                            </h3>
                            <div class="block-meta d-flex justify-content-between">
                              <div class="block-meta-info white-color">
                                <ul>
                                  <li>
                                <span><i class="far fa-clock"></i>
                                  17 декабря 2021
                                </span>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    </div>-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Block Grid Five End -->
        </div>
          <?php get_sidebar(); ?>
      </div>

      <!-- Block Five Start -->
      <div class="entertainment block_five block_six pt-30 mt-30 mb-30">
        <div class="d-flex align-items-center justify-content-between">
          <h2 class="black-color" id="meropriyatiya">
              <?php echo get_cat_name(5); ?>
          </h2>
          <div>
            <a href="<?php the_permalink(42); ?>"
               class="all-entertainments-btn btn btn-blue-light extend uppercase">
              Все мероприятия
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class=""><?php
                $args = array(
                    'numberposts' => 0,
                    'category_name' => 'meropriyatiya',
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
              <div class="block-six-active">
                  <?php foreach ($posts as $post) : setup_postdata($post); ?>
                    <div class="single-block">
                      <a class="entertainment-link"
                         href="<?php the_permalink(); ?>">
                        <div class="block-img overlay-transparent">
                            <?php the_post_thumbnail('sidebar-announcement'); ?>
                        </div>
                        <div class="block-content d-flex flex-column justify-content-between">
                          <h3 class="black-color font-16">
                              <?php the_title(); ?>
                          </h3>
                          <div>
                            <ul class="block-meta-info mb-10">
                              <li class="d-inline-block">
                                <span><i class="far fa-clock"></i>
                                    <?php the_field('entertainment-date'); ?>
                                </span>
                              </li>
                              <li class="d-inline-block">
                                <span><i class="far fa-map"></i>
                                    <?php the_field('entertainment-place'); ?>
                                </span>
                              </li>
                            </ul>
                            <p class="black-color">
                                <?php the_excerpt(); ?>
                            </p>
                          </div>
                        </div>
                      </a>
                    </div>
                  <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Block Five End -->
    </div>
  </main>
  <!-- Main Area End -->

<?php get_footer(); ?>