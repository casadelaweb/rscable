<?php namespace App;
$title = 'Длинное наименование товара в некоторое количество символов';
$description = '
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi facere maiores
        necessitatibus neque quam qui repellat reprehenderit, sit voluptas. Cupiditate distinctio
        eaque magni. Debitis ea excepturi, exercitationem fuga fugiat minus molestiae necessitatibus
        neque nobis odit possimus sunt unde vitae!</p>
        <p>Architecto blanditiis culpa cumque cupiditate dolore fugiat hic iste laudantium maxime, minus, nihil nostrum numquam praesentium provident quaerat quas repellat sapiente soluta, tempore tenetur! Ab accusamus alias aperiam, architecto commodi, consequatur, cum debitis dignissimos ducimus eaque enim ex facilis id
        laboriosam maiores minima nobis obcaecati perspiciatis praesentium provident quae qui
        quisquam quos repellat similique unde vitae voluptas! Deserunt, perspiciatis, quasi!</p>
';
$images = [
  ['url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',],
  ['url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',],
  ['url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',],
  ['url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',],
];
?>

<div class="modalProduct" data-modal="product">
  <div class="modalProductHeader">
    <button class="modalProductFav" type="button">
      <span class="iconfont icon-heart"></span>
      <span>В избранное</span>
    </button>
    <button class="modalProductCompare" type="button">
      <span class="iconfont icon-stats-bars"></span>
      <span>Сравнить</span>
    </button>
    <button data-modal-close type="button" class="modalProductClose">
      <span class="iconfont icon-close"></span>
    </button>
  </div>
  <div class="modalProductBody">
    <div class="modalProductBodyRow">
      <div class="modalProductSliders">
        <div class="modalProductSlider swiper">
          <div class="swiper-wrapper">
            <?php foreach ($images as $img):
              $url = $img['url']; ?>
              <div class="swiper-slide">
                <!--<a href="/product/">-->
                <img src="<?= $url ?>" alt="img" loading="lazy">
                <span class="swiper-lazy-preloader"></span>
                <!--</a>-->
              </div>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="modalProductThumbs swiper">
          <div class="swiper-wrapper">
            <?php foreach ($images as $img):
              $url = $img['url']; ?>
              <div class="swiper-slide">
                <!--<a href="/product/">-->
                <img src="<?= $url ?>" alt="img" loading="lazy">
                <span class="swiper-lazy-preloader"></span>
                <!--</a>-->
              </div>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
      <div class="modalProductMain">
        <h2 class="modalProductTitle">
          <?= $title ?>
        </h2>
        <div class="modalProductPrices">
          <div class="modalProductPrice _prev">15 000 ₽</div>
          <div class="modalProductPrice _current">13 400 ₽</div>
        </div>
        <div class="modalProductStatus">
          <div class="modalProductAvailability _stock">
            <div class="iconfont icon-dot"></div>
            <span class="modalProductAvailabilityText">В наличии</span>
          </div>
          <div class="modalProductCode">
            <span>Артикул:</span>
            <span>753159</span>
          </div>
        </div>
        <div class="modalProductAction">
          <div class="modalProductQuantity">
            <button class="modalProductQuantityButton" title="Убрать" type="button">
              <span>-</span>
            </button>
            <input class="modalProductQuantityInput" type="text" value="1">
            <button class="modalProductQuantityButton" title="Добавить" type="button">
              <span>+</span>
            </button>
          </div>
          <button class="modalProductCart" type="button" title="Добавить в корзину"
                  aria-label="Добавить в корзину">
            <span class="iconfont icon-cart"></span>
            <span>В корзину</span>
          </button>
        </div>
        <button class="modalProductBuy" type="button" data-modal-open="feedback">
          <span class="iconfont icon-credit-card"></span>
          <span>Купить в один клик</span>
        </button>
      </div>
    </div>
    <div class="modalProductParams">
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Тип
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          ВВГ-Пнг(A)-LS
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Количество жил
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          2 шт
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Номинальное напряжение
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          660 Ватт
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Длина
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          20 м
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Материал жилы
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          Медь
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Материал изоляции
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          ПВХ пониженной пожарной опасности
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Изоляция
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          ПВХ-пластикат
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Структура жилы
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          ОП
        </span>
      </div>
      <div class="modalProductParam">
        <span class="modalProductParamKey">
          Не распространяющий горение НГ
        </span>
        <span class="modalProductParamDivider"></span>
        <span class="modalProductParamValue">
          Нет
        </span>
      </div>
    </div>
    <div class="modalProductDescription">
      <?= $description ?>
    </div>
  </div>
  <div class="modalProductFooter">
    <a href="/product/" class="modalProductButton">
      <span>Перейти на страницу товара</span>
      <span class="iconfont icon-arrow-right"></span>
    </a>
  </div>
</div>
<div class="modalProductOverlay" data-modal-overlay="product"></div>
