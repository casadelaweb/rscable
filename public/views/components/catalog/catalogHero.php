<?php namespace App;
/** @var string $title */
/** @var array $subcategories */
/** @var array $suggestions */
?>

<section class="catalogHero">
  <div class="catalogHeroContainer">
    <div class="catalogHeroHeader">
      <h1 class="catalogHeroTitle"><?= $title ?></h1>
      <span class="catalogHeroQuantity">Всего: 4 567 товаров</span>
    </div>
    <div class="catalogHeroCategories swiper">
      <div class="swiper-wrapper">
        <?php foreach ($subcategories as $category):
          $title = $category['title'];
          $url = $category['url'];
          $imgUrl = $category['imgUrl'];
          ?>
          <article class="catalogHeroCategory swiper-slide">
            <a href="<?= $url ?>" class="catalogHeroCategoryImg">
              <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy">
            </a>
            <h3 class="catalogHeroCategoryTitle">
              <a href="<?= $url ?>"><?= $title ?></a>
            </h3>
          </article>
        <?php endforeach; ?>
      </div>
      <button type="button" class="swiper-button-prev">
        <span class="iconfont icon-arrow-left"></span>
      </button>
      <button type="button" class="swiper-button-next">
        <span class="iconfont icon-arrow-right"></span>
      </button>
    </div>
    <div class="catalogHeroSuggestions">
      <?php foreach ($suggestions as $suggestion):
        $title = $suggestion['title'];
        $url = $suggestion['url']; ?>
        <a href="<?= $url ?>" class="catalogHeroSuggestion">
          <?= $title ?>
        </a>
      <?php endforeach; ?>
    </div>
  </div>
</section>
