<?php
/**
 *
 * Template Name: Страница записи (анонс, новость, мероприятие)
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
                <a href="../novosti.html">Новости</a>
              </li>
              <li class="crumb-active">Текущая страница</li>
            </ul>
            <div class="blog-details mt-0">
              <h2 class="blog-title">Более трети российских учителей оценили свои знания цифровых технологий на
                тройку</h2>
              <div class="block-meta-info mb-30">
                <ul>
                  <li class="d-inline-block">
                  <span><i class="far fa-clock"></i>
                    18 января 2022
                  </span>
                  </li>
                </ul>
              </div>
              <div class="block-img" style="border: 1px solid #E4E4E4;">
                <img src="../uploads/actual/actual-2.jpg" alt="Изображение в блоге">
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