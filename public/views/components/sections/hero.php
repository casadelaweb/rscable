<?php namespace App; ?>

<section class="hero">
  <div class="hero-container">
    <div class="swiper hero-slider">
      <div class="swiper-wrapper">
        <?php $i = 0;
        while ($i < 3): ?>
          <div class="swiper-slide">
            <div class="hero-slide">
              <picture>
                <source media="(min-width: 1920px)" srcset="/assets/img/hero/hero-1920.jpg">
                <source media="(min-width: 1280px)" srcset="/assets/img/hero/hero-1280.jpg">
                <source media="(min-width: 1024px)" srcset="/assets/img/hero/hero-1024.jpg">
                <source media="(min-width: 768px)" srcset="/assets/img/hero/hero-768.jpg">
                <img alt="img" class="hero-slide-img" loading="lazy"
                     src="/assets/img/hero/hero-320.jpg">
              </picture>
              <div class="swiper-lazy-preloader"></div>
            </div>
          </div>
          <?php $i++;
        endwhile; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>
