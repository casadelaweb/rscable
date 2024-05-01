<?php namespace App;
/** @var string $title */
/** @var string $url */
/** @var string|int $price */
/** @var string|int $priceOld */
/** @var array $images */
/** @var bool $isInStock */
/** @var bool $isRecommended */
/** @var bool $isOrderAble */
/** @var bool $isHit */
/** @var array $parameters */
?>

<article class="productCard">
  <div class="productCardTags">
    <?php if ($isRecommended) : ?>
      <div class="productCardTag _recommended">
        <span class="icon-dot"></span>
        <span>Советуем</span>
      </div>
    <?php endif; ?>
    <?php if ($isHit) : ?>
      <div class="productCardTag _hit">
        <span class="icon-dot"></span>
        <span>Хит</span>
      </div>
    <?php endif; ?>
  </div>
  <div class="productCardButtons">
    <button class="productCardFav" type="button" title="Добавить в избранное"
            aria-label="Добавить в избранное">
      <span class="iconfont icon-heart"></span>
    </button>
    <button class="productCardCompare" type="button" title="Сравнить"
            aria-label="Сравнить">
      <span class="iconfont icon-stats-bars"></span>
    </button>
    <button class="productCardView" type="button" title="Быстрый просмотр"
            aria-label="Быстрый просмотр">
      <span class="iconfont icon-eye"></span>
    </button>
    <button class="productCardBuy" type="button" title="Купить в один клик"
            aria-label="Купить в один клик">
      <span class="iconfont icon-credit-card"></span>
    </button>
  </div>

  <?php // если картинок несколько рендерим слайдер
  if (count($images) > 1) : ?>
    <div class="productCardSlider swiper" data-product-card="slider">
      <div class="swiper-wrapper">
        <?php foreach ($images as $img):
          $imgUrl = $img['url'];
          $imgAlt = $img['alt']; ?>
          <div class="swiper-slide">
            <a href="<?= $url ?>" title="<?= $title ?>">
              <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
            </a>
            <div class="swiper-lazy-preloader"></div>
          </div>
        <?php endforeach; ?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  <?php else:
    // если изображение одно рендерим простую ссылку и картинку
    $imgUrl = $images[0]['url'];
    $imgAlt = $images[0]['alt']; ?>
    <a href="<?= $url ?>" title="<?= $title ?>">
      <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
    </a>
  <?php endif; ?>

  <div class="productCardBody">
    <h3 class="productCardTitle">
      <a href="<?= $url ?>" title="<?= $title ?>">
        <?= $title ?>
      </a>
    </h3>
    <div class="productCardParameters">
      <?php if ($isInStock) : ?>
        <div class="productCardStatus _stock">
          <span class="iconfont icon-dot"></span>
          <span class="productCardStatusText">В наличии: 3 450 шт.</span>
        </div>
      <?php else : ?>
        <div class="productCardStatus _order">
          <span class="iconfont icon-dot"></span>
          <span class="productCardStatusText">Нет в наличии</span>
        </div>
      <?php endif; ?>
      <div class="productCardParameter">
        <div class="productCardParameter-key">Артикул:</div>
        <div class="productCardParameter-value">1234124</div>
      </div>
    </div>
    <div class="productCardDelivery">
      <span class="iconfont icon-truck"></span>
      Доставка от 2 дней
    </div>
    <div class="productCardPrices">
      <?php if ($priceOld === 0 && $price !== 0) : ?>
        <div class="productCardPrice"> <?= $price ?> ₽</div>
        <div class="productCardPricesTax"> c НДС</div>
      <?php elseif ($price === 0): ?>
        Цена по запросу
      <?php else: ?>
        <div class="productCardPrice _prev"><?= $priceOld ?> ₽</div>
        <div class="productCardPrice _current"><?= $price ?> ₽</div>
        <div class="productCardPricesTax"> c НДС</div>
      <?php endif; ?>
    </div>
    <div class="productCardFooter">
      <?php if ($isInStock) : ?>
        <div class="productCardQuantity">
          <button class="productCardQuantityButton" title="Убрать" type="button">
            <span>-</span>
          </button>
          <input class="productCardQuantityInput" type="text" value="1">
          <button class="productCardQuantityButton" title="Добавить" type="button">
            <span>+</span>
          </button>
        </div>
        <button class="productCardCart" type="button" title="Добавить в корзину"
                aria-label="Добавить в корзину">
          <span class="iconfont icon-suitcase"></span>
          <span>В корзину</span>
        </button>
      <?php else: ?>
        <button class="productCardCart" type="button" title="Запросить под заказ"
                aria-label="Запросить под заказ">
          <span>Заказать</span>
        </button>
      <?php endif; ?>
    </div>
  </div>
</article>
