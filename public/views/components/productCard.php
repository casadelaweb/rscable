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
  <div class="productCard-tags">
    <?php if ($isRecommended) : ?>
      <div class="productCard-tag _recommended">
        <div class="icon-dot"></div>
        Советуем
      </div>
    <?php endif; ?>
    <?php if ($isHit) : ?>
      <div class="productCard-tag _hit">
        <div class="icon-dot"></div>
        Хит
      </div>
    <?php endif; ?>
  </div>
  <div class="productCard-buttons">
    <button class="productCard-fav" type="button" title="Добавить в избранное"
            aria-label="Добавить в избранное">
      <span class="iconfont icon-heart"></span>
    </button>
    <button class="productCard-compare" type="button" title="Сравнить"
            aria-label="Сравнить">
      <span class="iconfont icon-stats-bars"></span>
    </button>
    <button class="productCard-view" type="button" title="Быстрый просмотр"
            aria-label="Быстрый просмотр">
      <span class="iconfont icon-eye"></span>
    </button>
    <button class="productCard-buy" type="button" title="Купить в один клик"
            aria-label="Купить в один клик">
      <span class="iconfont icon-credit-card"></span>
    </button>
  </div>

  <?php // если картинок несколько рендерим слайдер
  if (count($images) > 1) : ?>
    <div class="productCard-slider swiper" data-product-card="slider">
      <div class="swiper-wrapper">
        <?php foreach ($images as $img):
          $imgUrl = $img['url'];
          $imgAlt = $img['alt']; ?>
          <div class="swiper-slide">
            <a href="<?= $url ?>" title="<?= $title ?>">
              <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg"
                   loading="lazy">
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

  <div class="productCard-body">
    <h3 class="productCard-title">
      <a href="<?= $url ?>" title="<?= $title ?>">
        <?= $title ?>
      </a>
    </h3>
    <div class="productCardParameters">
      <?php if ($isInStock) : ?>
        <div class="productCardTag _stock">
          <span class="iconfont icon-dot"></span>
          <span class="productCardTagText">В наличии: 3 450 шт.</span>
        </div>
      <?php else : ?>
        <div class="productCardTag _order">
          <span class="iconfont icon-dot"></span>
          <span class="productCardTagText">Нет в наличии</span>
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
    <div class="productCard-prices">
      <?php if ($priceOld === 0 && $price !== 0) : ?>
        <div class="productCard-price"> <?= $price ?> ₽</div>
        <div class="productCard-prices-tax"> c НДС</div>
      <?php elseif ($price === 0): ?>
        Цена по запросу
      <?php else: ?>
        <div class="productCard-price _prev"><?= $priceOld ?> ₽</div>
        <div class="productCard-price _current"><?= $price ?> ₽</div>
        <div class="productCard-prices-tax"> c НДС</div>
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
