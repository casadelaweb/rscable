<?php namespace App;
/** @var string $title Название продукта */
/** @var string $url Ссылка на продукт */
/** @var string|int $price Текущая цена. Если цена равна 0, будет отображаться надпись Цена по запросу. */
/** @var string|int $priceOld Старая цена (если есть). Если старая цена равна 0, будет отображаться только текущая цена. Если старая цена больше 0, будет отображаться красным цветом в зачеркнутом виде (как обычно в интернет магазинах отображается скидка).
 */
/** @var array $images Изображения продукта */
/** @var bool $isInStock Продукт в наличии? */
/** @var bool $isRecommended Продукт рекомендуемый? */
/** @var bool $isOrderAble Продукт доступен под заказ? */
/** @var bool $isHit Продукт является хитом продаж? */
/** @var string|number $code Артикул продукта */
/** @var array $parameters Дополнительные параметры продукта. Отображаются когда карточка в формате ряда. В формате плитки скрыты. */
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
            aria-label="Купить в один клик" data-modal-open="buy-quick">
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
    <div class="productCardSlider">
      <a href="<?= $url ?>" title="<?= $title ?>">
        <img src="<?= $imgUrl ?>" alt="<?= $imgAlt ?>" class="productCardImg" loading="lazy">
      </a>
    </div>
  <?php endif; ?>

  <div class="productCardBody">
    <div class="productCardMain">
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
        <div class="productCardParameter _code">
          <div class="productCardParameterKey">Артикул:</div>
          <div class="productCardParameterValue"><?= $code ?></div>
        </div>
        <?php // Расширенные параметры продукта. Не отображаются когда карточка в виде плитки.
        foreach ($parameters as $parameter):
          $parameterKey = $parameter['key'];
          $parameterValue = $parameter['value'];
          ?>
          <div class="productCardParameter _extra">
            <div class="productCardParameterKey"><?= $parameterKey ?></div>
            <div class="productCardParameterValue"><?= $parameterValue ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="productCardBottom">
      <div class="productCardDelivery">
        <span class="iconfont icon-truck"></span>
        Доставка от 2 дней
      </div>
      <div class="productCardPrices">
        <?php /** Значение цены 0 трактуется как Цена не указана. Можете изменить проверку на свое усмотрение, например обозначить отсутствие указанной цены как null. */

        /** Если цена не равна 0 и старая цена равна 0 выводим обычное отображение */
        if ($priceOld === 0 && $price !== 0) : ?>
          <div class="productCardPrice"> <?= $price ?> ₽</div>
          <div class="productCardPricesTax"> c НДС</div>
        <?php /** Если цена 0, выводим кнопку для открытия модального окна обратной связи */
        elseif ($price === 0): ?>
          <button data-modal-open="feedback" class="productCardPrice _request" type="button">
            Цена по запросу
          </button>
        <?php /** Если цена больше 0 и есть старая цена, стилизуем как скидку */
        else: ?>
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
            <span class="iconfont icon-cart"></span>
            <span>В корзину</span>
          </button>
        <?php else: ?>
          <button class="productCardCart" type="button" title="Запросить под заказ"
                  data-modal-open="feedback" aria-label="Запросить под заказ">
            <span>Заказать</span>
          </button>
        <?php endif; ?>
      </div>
    </div>
  </div>
</article>
