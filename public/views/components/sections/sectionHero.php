<?php namespace App;
$images = [
  [
    'url' => 'https://cdn.vseinstrumenti.ru/res/content/banners/home_page_top_placeholder_2.jpg',
    'alt' => 'image description',
  ],
  [
    'url' => 'https://cable.ru/images/slider/new_slide_registry.png',
    'alt' => 'image description',
  ],
  [
    'url' => 'https://nsk.cable.ru/images/slider/new_slide_creditb2b.png',
    'alt' => 'image description',
  ],
];
?>

<section class="sectionHero">
  <div class="sectionHeroContainer">
    <div class="swiper sectionHeroSlider">
      <div class="swiper-wrapper">
        <?php foreach ($images as $img):
          $url = $img['url'];
          $alt = $img['alt']
          ?>
          <div class="swiper-slide sectionHeroSlide">
            <picture>
              <img alt="<?= $alt ?>" class="sectionHeroSlideImg" loading="lazy"
                   src="<?= $url ?>">
            </picture>
            <div class="swiper-lazy-preloader"></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
    <div class="sectionHeroForm">
      <?php Render::component('forms/formFeedback') ?>
    </div>
  </div>
</section>
