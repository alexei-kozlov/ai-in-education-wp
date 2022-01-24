<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords"
        content="Искусственный интеллект, ИИ, информационные технологии, образование, роботы, конференция">
  <meta name="description"
        content="Новостной сайт об информационных технологиях в сфере образования и внедрении искусственного интеллекта в образовательный процесс">
    <?php wp_head(); ?>
  <link rel="icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico"/>
  <title>Искусственный интеллект в образовании - Новостной сайт об ИИ в сфере образования</title>

  <!-- Font Awesome CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/fontawesome.min.css">
  <!-- Magnific popup CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/magnific-popup.css">
  <!-- slick CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/slick.css">
  <!-- Menu Light -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/mmenu-light.css">
  <!-- Main CSS -->
  <link rel="stylesheet" href="<?php bloginfo('template_directory') ?>/css/style.css">
  <!-- Google Fonts -->
  <link
      href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,400;0,500;0,600;0,700;0,900;1,400;1,500;1,600;1,700;1,900&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap"
      rel="stylesheet">
  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function (m, e, t, r, i, k, a) {
      m[i] = m[i] || function () {
        (m[i].a = m[i].a || []).push(arguments)
      };
      m[i].l = 1 * new Date();
      k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
    })
    (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(87201894, "init", {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true
    });
  </script>
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/87201894" style="position:absolute; left:-9999px;" alt=""/>
    </div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
</head>

<body>
<?php wp_body_open(); ?>
<!-- Header Area Start -->
<header>
  <!-- Header Style 3 -->
  <div class="header-style-3">
    <div class="container">
      <div class="row align-items-center justify-content-between pt-20 pb-20">
        <div class="col-9 col-lg-4 px-0">
          <div class="logo"><?php the_custom_logo(); ?></div>
        </div>
        <!-- Menu Area Start -->
        <div class="navigation col-3 col-lg-8 px-0">
          <a class="mobile-menu" href="#menu">
            <span></span>
          </a>
          <nav class="menu-3 text-right black-color font-20" id="menu">
              <?php
              $args = array(
                  'menu'            => 'Main',
                  'menu_class'      => 'nav-list',
                  'container'       => 'ul',
                  'container_class' => 'nav__list',
                  'fallback_cb'     => 'wp_page_menu',
                  'echo'            => 'true',
                  'depth'           => '0',
                  'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              );
              wp_nav_menu( $args );
              ?>
          </nav>
        </div>
        <!-- Menu Area End -->
      </div>
    </div>
  </div>
  <!-- Header Style 3 -->
</header>
<!-- Header Area End -->
