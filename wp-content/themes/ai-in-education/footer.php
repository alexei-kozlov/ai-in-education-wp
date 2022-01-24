<!-- Footer Area Start -->
<footer class="footer-area">
  <div class="container">
    <div class="footer-widget footer-middle py-20">
      <div class="row d-flex justify-content-between align-items-center flex-column flex-sm-row">
        <div class="col-md-12 col-lg-4 py-20 px-15 flex-md-grow-0 flex-grow-1">
          <div class="footer-item">
            <div class="footer-logo mx-auto text-center text-lg-left">
              <a href="/">
                <div class="logo-icon"><?php the_custom_logo(); ?></div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-10 col-sm-7 col-md-6 col-lg-4 mt-10 mb-10">
          <ul class="footer-info-list">
            <li class="footer-info-item">
              <p class="font-16 mb-10"><?php the_field('business-name'); ?></p>
            </li>
            <li class="footer-info-item">
              <p class="font-16 mb-10"><?php the_field('individual-identification-number'); ?></p>
            </li>
            <li class="footer-info-item">
              <p class="font-16"><?php the_field('state-registration-number'); ?></p>
            </li>
          </ul>
        </div>
        <div class="col-10 col-sm-5 col-md-6 col-lg-4">
          <div class="footer-item footer-contact black-color">
            <h3 class="black-color font-weight-bold font-20 pb-0 mb-5" id="contacts">Контакты</h3>
            <ul>
              <li>
                <a href="mailto:mail@quality-edu.ru">
                  <i class="fas fa-envelope"></i>
                    <?php the_field('e-mail'); ?>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-6">
          <span class="black-color"><?php the_field('copyright'); ?></span>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- Footer Area End -->

<!--Scroll to top-->
<a href="#" class="scrollToTop">
  <span class="fas fa-angle-up"></span>
</a>

<!-- Jquery File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery-3.5.0.min.js"></script>
<!-- Modernizr JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/modernizr.custom.js"></script>
<!-- meanmenu.min JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/mmenu-light.js"></script>
<!-- Popper JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/popper.min.js"></script>
<!-- Bootstrap JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/bootstrap.min.js"></script>
<!-- Magnific popup JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/jquery.magnific-popup.min.js"></script>
<!-- slick JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/slick.min.js"></script>
<!-- Main JS File -->
<script src="<?php bloginfo( 'template_directory' ) ?>/js/script.js"></script>

<?php wp_footer(); ?>

</body>
</html>
