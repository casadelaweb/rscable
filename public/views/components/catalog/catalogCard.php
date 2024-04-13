<!-- первый пример карточки товара -->
<article class="catalog-card" data-catalog="card" itemscope itemtype="https://schema.org/Product">
  <!-- Разметка schema.org для поисковых систем -->
  <!-- Официальная документация Яндекс: -->
  <!-- https://yandex.ru/support/webmaster/supported-schemas/strict-microdata-offers.html -->
  <meta content="Наименование товара" itemprop="name">
  <meta content="Краткое описание товара" itemprop="description">
  <link href="/assets/img/placeholder-product.jpeg" itemprop="image">
  <div itemprop="offers" itemscope itemtype="https://schema.org/Offer">
    <meta content="7150.00" itemprop="price">
    <meta content="RUB" itemprop="priceCurrency">
    <link href="https://schema.org/InStock" itemprop="availability">
  </div>
  <div class="catalog-card-discount"> -30%</div>
  <button class="catalog-card-favourite" title="Добавить в избранное" type="button">
    <span class="iconfont icon-heart-fill"></span>
  </button>
  <div class="catalog-card-slider swiper" data-catalog-card="slider" data-slider="catalog-card">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <a href="/catalog/product">
          <picture>
            <source srcset="/assets/img/placeholder-product.webp" type="image/webp">
            <img alt="img" class="catalog-card-img" loading="lazy"
                 src="/assets/img/placeholder-product.jpeg">
          </picture>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="/catalog/product">
          <picture>
            <source srcset="/assets/img/placeholder-product-2.webp" type="image/webp">
            <img alt="img" class="catalog-card-img" loading="lazy"
                 src="/assets/img/placeholder-product-2.jpeg">
          </picture>
        </a>
      </div>
      <div class="swiper-slide">
        <a href="/catalog/product">
          <picture>
            <source srcset="/assets/img/placeholder-product-3.webp" type="image/webp">
            <img alt="img" class="catalog-card-img" loading="lazy"
                 src="/assets/img/placeholder-product-3.jpeg">
          </picture>
        </a>
      </div>
    </div>
    <button class="catalog-card-preview" data-modal-open="preview"
            title="Выбрать размер и добавить в корзину"
            type="button">
      <span class="iconfont icon-suitcase"></span>
    </button>
    <button class="swiper-button-prev" title="Предыдущий слайд" type="button">
      <span class="iconfont icon-arrow-left"></span>
    </button>
    <button class="swiper-button-next" title="Следующий слайд" type="button">
      <span class="iconfont icon-arrow-right"></span>
    </button>
    <div class="swiper-pagination"></div>
  </div>
  <h2 class="catalog-card-title">
    <a href="/catalog/product"> Относительно длинное название товара длинной в одну, две или три
      строки </a>
  </h2>
  <div class="catalog-card-price">
    <div class="catalog-card-price-previous">
      <span>7 999</span> <span>₽</span>
    </div>
    <div class="catalog-card-price-current">
      <span>5 000</span> <span>₽</span>
    </div>
  </div>
  <div class="catalog-card-colors">
    <div class="catalog-card-color _color"></div>
    <div class="catalog-card-color _beige"></div>
    <div class="catalog-card-color _milk"></div>
    <div class="catalog-card-color _black"></div>
  </div>
</article>
