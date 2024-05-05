<?php namespace App;
global $fakeProducts;
/** @var string $sectionTitle */
/** @var string $sectionButtonTitle */
/** @var string $sectionButtonUrl */
?>

<section class="sectionAdvisable">
  <div class="sectionAdvisableContainer">
    <div class="sectionAdvisableHeader">
      <h2 class="sectionAdvisableTitle">
        <a href="<?= $sectionButtonUrl ?>">
          <?= $sectionTitle ?>
        </a>
      </h2>
      <a href="<?= $sectionButtonUrl ?>" class="sectionAdvisableButton">
        <?= $sectionButtonTitle ?>
      </a>
    </div>
    <div class="sectionAdvisableWrapper">
      <div class="sectionAdvisableSlider swiper">
        <div class="swiper-wrapper">
          <?php foreach ($fakeProducts as $product): ?>
            <div class="swiper-slide">
              <?php Render::component('catalog/productCard', $product) ?>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
      <button class="sectionAdvisableSliderPrev swiper-button-prev" type="button">
        <span class="iconfont icon-arrow-left"></span>
      </button>
      <button class="sectionAdvisableSliderNext swiper-button-next" type="button">
        <span class="iconfont icon-arrow-right"></span>
      </button>
    </div>
  </div>
</section>
