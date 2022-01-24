<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package AI_in_Education
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) {
	return;
}
?>

<aside class="announcement widget-area col-lg-4 px-8">
  <!-- Block Widget Start -->
  <div class="block-widget pt-30 mt-30">
    <div class="block-widget-title">
      <h2 class="black-color">Анонс</h2>
    </div>
    <ul class="block-widget-list p-10 bord">
      <li class="block-widget-module">
        <a class="announcement-link d-flex"
           href="anonsi/rosiyskiye-pedagogi-podelyatsya-opitom-ispolzovaniya-ii.html">
          <div class="block-img"
               style="background: url('uploads/announcement/announcement-1.jpg') no-repeat center top / cover">
          </div>
          <div class="block-widget-content ml-15">
            <div class="block-meta-date pb-15">
              <span class="date gray-color">9-10 декабря 2021</span>
            </div>
            <div class="block-content">
              <h3 class="black-color-100">
                Российские педагоги поделятся опытом использования ИИ в образовании с коллегами из зарубежных
                стран
              </h3>
            </div>
          </div>
        </a>
      </li>
      <li class="block-widget-module">
        <a class="announcement-link d-flex"
           href="anonsi/vozmozhnosti-vnedreniya-ii-v-obrazovatelniy-proces-obsudyat-na-konferencii-v-moskve.html">
          <div class="block-img"
               style="background: url('uploads/announcement/announcement-2.jpg') no-repeat center top / cover">
          </div>
          <div class="block-widget-content ml-15">
            <div class="block-meta-date pb-15">
              <span class="date gray-color">7-8 декабря 2021</span>
            </div>
            <div class="block-content">
              <h3 class="black-color-100">
                Возможности внедрения ИИ в образовательный процесс обсудят на конференции в Москве
              </h3>
            </div>
          </div>
        </a>
      </li>
      <li class="block-widget-module">
        <a class="announcement-link d-flex"
           href="anonsi/pedagogi-iz-rossii-i-stran-sng-obsudyat-vozmozhnosti-vnedreniya-ii-v-obrazovanie.html">
          <div class="block-img"
               style="background: url('uploads/announcement/announcement-3.jpg') no-repeat center top / cover">
          </div>
          <div class="block-widget-content ml-15">
            <div class="block-meta-date pb-15">
              <span class="date gray-color">3-4 декабря 2021</span>
            </div>
            <div class="block-content">
              <h3 class="black-color-100">
                Педагоги из России и стран СНГ обсудят возможности внедрения ИИ в образование
              </h3>
            </div>
          </div>
        </a>
      </li>
    </ul>
    <div class="block-widget-url text-center border-bottom">
      <a href="anonsi.html">
        <span class="link-more gray-color">Читать еще</span>
      </a>
    </div>
  </div>
  <!-- Block Widget Start -->
</aside>
