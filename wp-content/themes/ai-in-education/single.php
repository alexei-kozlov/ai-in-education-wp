<?php
/**
 *
 * Template Name: Страница записи
 *
 */
?>
<?php get_header(); ?>

  <!-- Main Area Start -->
  <main>
    <h1 class="visually-hidden"><?php the_title(); ?></h1>
    <section class="blog-standard-area section-padding bg-white-100">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 bg-white">
            <ul class="breadcrumb mb-30">
              <li>
                <a href="/">Главная</a>
              </li>
              <li>
                <a href="/<?php
                $cats = get_the_category();
                $cat = $cats[0];
                echo $cat_slug = $cat->slug;
                ?>">
                  <?php
                  $cats = get_the_category();
                  $cat = $cats[0];
                  echo $cat_name = $cat->name;
                  ?>
                </a>
              </li>
              <li class="crumb-active"><?php the_title(); ?></li>
            </ul>
            <div class="blog-details mt-0">
              <h2 class="blog-title"><?php the_title(); ?></h2>
              <div class="block-meta-info mb-20">
                <ul>
                  <li class="d-inline-block">
                  <span><i class="far fa-clock"></i>
                    <?php the_field('entertainment-date'); ?>
                    <?php the_field('news-date'); ?>
                  </span>
                  </li>
                  <?php $place = get_field('entertainment-place');
                  if (!empty($place)) : ?>
                    <li class="d-inline-block">
                      <span>
                        <i class="far fa-map"></i>
                        <?php echo $place; ?>
                      </span>
                    </li>
                  <?php endif; ?>
                </ul>
              </div>
              <div class="block-img" style="border: 1px solid #E4E4E4;">
                <?php the_post_thumbnail('sidebar-announcement'); ?>
              </div>
              <div class="text-block blog-content text-justify">
                <?php the_content(); ?>
              </div>
            </div>
          </div>
          <?php get_sidebar(); ?>
        </div>
      </div>
    </section>
  </main>
  <!-- Main Area End -->

<?php get_footer(); ?>