<?php namespace App;
/** @var string $productTitle */
/** @var string|number $productCode */

$productTitle = 'Название продукта';
$productCode = 1234567890;
$slidesMain = [
  ['url' => 'https://cdn.vseinstrumenti.ru/images/goods/elektrika-i-svet/kabel-i-provod/893119/1200x800/72879266.jpg',],
  ['url' => 'https://cdn.vseinstrumenti.ru/images/goods/elektrika-i-svet/kabel-i-provod/893119/1200x800/72879272.jpg',],
  ['url' => 'https://cdn.vseinstrumenti.ru/images/goods/elektrika-i-svet/kabel-i-provod/893119/1200x800/138587264.jpg',],
];
$slidesThumbs = [
  ['url' => 'https://cdn.vseinstrumenti.ru/images/goods/elektrika-i-svet/kabel-i-provod/893119/68x60/72879266.jpg',],
  ['url' => 'https://cdn.vseinstrumenti.ru/images/goods/elektrika-i-svet/kabel-i-provod/893119/68x60/72879272.jpg',],
  ['url' => 'https://cdn.vseinstrumenti.ru/images/goods/elektrika-i-svet/kabel-i-provod/893119/68x60/138587264.jpg',],
]
?>

<?php Render::component('sections/breadcrumbs') ?>

<section class="product">
  <div class="productContainer">

    <div class="productHero">
      <h1 class="productTitle">
        <?= $productTitle ?>
      </h1>
      <div class="productHeader">
        <div class="productCode">Код товара: <?= $productCode ?></div>
        <div class="productHeaderReviews">
          <div>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
          </div>
          <div>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
            <span class="iconfont icon-star-full"></span>
          </div>
          <a href="#reviews"></a>
        </div>
        <div class="productHeaderButtons">
          <button type="button" class="productButtonFav">
            <span class="iconfont icon-heart"></span>
            <span>В избранное</span>
          </button>
          <button class="productButtonCompare" type="button">
            <span class="iconfont icon-stats-bars"></span>
            <span>Сравнить</span>
          </button>
        </div>
      </div>
      <div class="productSliders">
        <div class="productSliderThumbs swiper">
          <div class="swiper-wrapper">
            <?php foreach ($slidesThumbs as $slide):
              $imgUrl = $slide['url']; ?>
              <div class="swiper-slide">
                <picture>
                  <img src="<?= $imgUrl ?>" alt="img" loading="lazy">
                </picture>
                <div class="swiper-lazy-preloader"></div>
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="productSliderMain swiper">
          <div class="swiper-wrapper">
            <?php foreach ($slidesMain as $slide):
              $imgUrl = $slide['url']; ?>
              <div class="swiper-slide">
                <picture>
                  <img src="<?= $imgUrl ?>" alt="img" loading="lazy">
                </picture>
                <div class="swiper-lazy-preloader"></div>
              </div>
            <?php endforeach; ?>
          </div>
          <div class="swiper-nav">
            <button class="swiper-button-prev" type="button">
              <span class="iconfont icon-arrow-left"></span>
            </button>
            <div class="swiper-pagination"></div>
            <button class="swiper-button-next" type="button">
              <span class="iconfont icon-arrow-right"></span>
            </button>
          </div>
        </div>
      </div>
      <div class="productInfo">
        <a href="#technical" class="productInfoButton">
          <span>Все характеристики</span>
          <span class="iconfont icon-arrow-right"></span>
        </a>
      </div>
    </div>

    <div class="productBody">
      <h2 class="productSubtitle">Описание</h2>
      <div class="productDescription">
        <p>Кабель марки ВВГ-Пнг(А)-LS используется для монтажа электропроводки в жилых, общественных
          и
          производственных помещениях.</p>
        <p>Монтаж кабеля возможен поверх штукатурки, под штукатуркой, в кирпичной кладке и в бетоне.
          Хранение кабельной продукции при пониженных температурах воздуха не рекомендуется. Срок
          службы
          кабеля составляет не менее 30 лет.</p>
        <p>Кабель марки ВВГ-Пнг(А)-LS выполнен из медной, однопроволочной токопроводящей жилы.
          Изоляция
          состоит из ПВХ пониженной горючести и дымовыделения. Не распространяет горение при
          групповой
          прокладке.</p>
        <p>Расшифровка марки:</p>
        <ul>
          <li>В - Изоляция кабеля изготовлена из ПВХ пластиката</li>
          <li>В - Оболочка кабеля изготовлена из ПВХ пластиката</li>
          <li>Г- Без защитного покрова</li>
          <li>П - Жилы расположены в одной плоскости (Плоский)</li>
          <li>нг(А) - не распространяют горение при групповой прокладке по категории A</li>
          <li>LS - Пониженный уровень выделения дыма и вредного газа</li>
        </ul>
        <p>Высокое качество продукции обусловливается тщательной проверкой на каждом из этапов
          производства и использованием исключительно высококлассных материалов. Продукция
          изготавливается строго по ГОСТ.</p>
      </div>
      <h2 class="productSubtitle" id="technical">
        Технические характеристики
      </h2>
      <div class="productTechnical">
        <?php foreach ([1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15] as $item): ?>
          <div class="productTechnicalRow">
            <div class="productTechnicalKey">
              Тип:
            </div>
            <div class="productTechnicalDivider"></div>
            <div class="productTechnicalValue">
              ВВГ-Пнг(A)-LS
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="productReviews" id="reviews">
      <article class="productReview">
        <h3 class="productReviewAuthor">
          author
        </h3>
        <div class="productReviewPositives">
          positives
        </div>
        <div class="productReviewNegatives">
          negatives
        </div>
      </article>
    </div>
  </div>
</section>

<?php Render::component('sections/sectionAdvisable'); ?>

