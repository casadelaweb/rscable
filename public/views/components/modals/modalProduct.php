<?php namespace App; ?>

<div class="modalProduct" data-modal="product">
  <div class="modalProductHeader">
    <h2 class="modalProductTitle">
      Наименование товара
    </h2>
    <button class="modalProductFav" type="button">
      <span class="iconfont icon-heart"></span>
      <span>Избранное</span>
    </button>
    <button class="modalProductCompare" type="button">
      <span class="iconfont icon-stat-bars"></span>
      <span>Сравнить</span>
    </button>

  </div>
  <div class="modalProductBody">
    <div class="modalProductSliders">
      <div class="modalProductSlider swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"></div>
        </div>
      </div>
      <div class="modalProductThumbs swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide"></div>
        </div>
      </div>
    </div>
    <div class="modalProductMain">
      <div class="modalProductPrices">
        <div class="modalProductPrice _prev">15 000₽</div>
        <div class="modalProductPrice _current">13 400₽</div>
      </div>
      <div class="modalProductStatus">
        <div class="modalProductAvailability">
          <div class="iconfont icon-dot"></div>
          <span>В наличии</span>
        </div>
        <div class="modalProductCode">
          <span>Артикул:</span>
          <span>753159</span>
        </div>
      </div>
      <div class="modalProductActions">
        <div class="productCardFooter">
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
        </div>
        <button class="modalProductBuy" type="button" data-modal-open="feedback">
          <span class="iconfont icon-credit-card"></span>
          <span>Купить в один клик</span>
        </button>
      </div>
      <div class="productParams">
        <div class="productParam">
          <span class="productParamKey">
            Тип
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            ВВГ-Пнг(A)-LS
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Количество жил
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            2 шт
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Номинальное напряжение
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            660 Ватт
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Длина
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            20 м
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Материал жилы
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            Медь
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Материал изоляции
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            ПВХ пониженной пожарной опасности
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Изоляция
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            ПВХ-пластикат
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Структура жилы
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            ОП
          </span>
        </div>
        <div class="productParam">
          <span class="productParamKey">
            Не распространяющий горение НГ
          </span>
          <span class="productParamDivider"></span>
          <span class="productParamValue">
            Нет
          </span>
        </div>
      </div>
      <div class="modalProductDescription">
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad excepturi facere maiores
        necessitatibus neque quam qui repellat reprehenderit, sit voluptas. Cupiditate distinctio
        eaque magni. Debitis ea excepturi, exercitationem fuga fugiat minus molestiae necessitatibus
        neque nobis odit possimus sunt unde vitae! Architecto blanditiis culpa cumque cupiditate
        dolore fugiat hic iste laudantium maxime, minus, nihil nostrum numquam praesentium provident
        quaerat quas repellat sapiente soluta, tempore tenetur! Ab accusamus alias aperiam,
        architecto commodi, consequatur, cum debitis dignissimos ducimus eaque enim ex facilis id
        laboriosam maiores minima nobis obcaecati perspiciatis praesentium provident quae qui
        quisquam quos repellat similique unde vitae voluptas! Deserunt, perspiciatis, quasi!
      </div>
    </div>
  </div>
  <div class="modalProductFooter">
    <a href="/product/" class="modalProductButton">
      Перейти на страницу товара
    </a>
  </div>
</div>
<div class="modalProductOverlay" data-modal-overlay="product"></div>
