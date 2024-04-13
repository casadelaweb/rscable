<?php namespace App; ?>

<?php Render::component('breadcrumbs') ?>

<div class="product-top" data-catalog="header-desktop">
  <div class="container">
    <a class="product-back" href="/catalog">
      Назад
    </a>
  </div>
</div>

<div class="modal" data-modal="product-gallery-modal">
  <div class="product-gallery-modal">
    <button class="modal-close" data-modal-close title="Закрыть окно" type="button">
      <span class="iconfont icon-close"></span>
    </button>
    <div class="swiper product-gallery-modal-slider">
      <div class="swiper-wrapper">

        <div class="swiper-slide">
          <div class="product-gallery-modal-item">
            <picture>
              <source srcset="/assets/img/placeholder-product.webp" type="image/webp">
              <img alt="img" loading="lazy" src="/assets/img/placeholder-product.jpeg">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-gallery-modal-item">
            <picture>
              <source srcset="/assets/img/placeholder-product-2.webp" type="image/webp">
              <img alt="img" loading="lazy" src="/assets/img/placeholder-product-2.jpeg">
            </picture>
          </div>
        </div>
        <div class="swiper-slide">
          <div class="product-gallery-modal-item">
            <picture>
              <source srcset="/assets/img/placeholder-product-3.webp" type="image/webp">
              <img alt="img" loading="lazy" src="/assets/img/placeholder-product-3.jpeg">
            </picture>
          </div>
        </div>

      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-scrollbar"></div>

      <div class="gallery-swiper-buttons">
        <div class="gallery-swiper-button-prev"></div>
        <div class="gallery-swiper-button-next"></div>
      </div>

    </div>
  </div>
</div>

<section class="product">
  <div class="product-container" data-product="container">
    <div class="product-left">
      <div class="product-gallery">
        <div class="swiper product-gallery-slider">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="product-gallery-item">
                <picture>
                  <source srcset="/assets/img/placeholder-product.webp" type="image/webp">
                  <img alt="img" loading="lazy" src="/assets/img/placeholder-product.jpeg">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-gallery-item">
                <picture>
                  <source srcset="/assets/img/placeholder-product-2.webp" type="image/webp">
                  <img alt="img" loading="lazy" src="/assets/img/placeholder-product-2.jpeg">
                </picture>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="product-gallery-item">
                <picture>
                  <source srcset="/assets/img/placeholder-product-3.webp" type="image/webp">
                  <img alt="img" loading="lazy" src="/assets/img/placeholder-product-3.jpeg">
                </picture>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
    <div class="product-right">
      <div class="product-right-sticky" data-product="sticky">
        <div class="product-price">
          <div class="product-price-percent">SALE -30%</div>
          <h1 class="product-price-title">
            Очень длинное название платья
          </h1>
          <div class="product-prices">
            <span class="product-price-sale">7 799 ₽</span>
            <span class="product-price-regular">5 000 ₽</span>
          </div>
        </div>
        <a class="product-instalment" href="#" target="_blank">

          <img alt="img"
               class="product-instalment-logo"
               loading="lazy"
               src="/assets/img/product/instalment-logo.png">
          <span>4 платежа по 1 000 ₽ </span>
          <span class="iconfont icon-arrow-right"></span>
        </a>
        <div class="product-colors">
          <div class="product-title">
            Цвет
          </div>
          <div class="product-colors-items">
            <a class="product-colors-item-active _orange" href="/catalog/product"></a>
            <a class="product-colors-item _brown" href="/catalog/product"></a>
          </div>
          Сиреневый жемчуг
        </div>
        <div class="product-buttons">
          <div class="product-buttons-price"></div>
          <div class="product-buttons-cont">
            <button class="product-btn product-btn-size"
                    data-toggle-href="/product-sizes-cont">
              <span>Размеры</span>
              <span class="iconfont icon-arrow-down"></span>
            </button>
            <button class="product-btn product-btn-buy" data-product="add-to-cart"
                    title="Добавить в корзину" type="button">
              <!-- todo: добавить индикатор ожидания ответа от сервера -->
              <!-- todo: добавить анимацию при добавлении товара -->
              <span class="active">Товар успешно добавлен</span>
              <span class="default">Добавить в корзину</span>
            </button>
            <button class="product-btn-wishlist" data-product="toggle-favourite"
                    title="Добавить в избранное" type="button">
              <span class="iconfont icon-heart-fill"></span>
            </button>
          </div>
          <div id="product-sizes-cont" class="product-sizes-cont">
            <div class="product-title">
              Размеры
            </div>
            <div class="product-sizes">
              <div class="product-sizes-notification" data-product="no-size-selected">
                Пожалуйста, выберите желаемый размер
              </div>

              <div class="product-size _active" data-product="size">
                S <span>36</span>
              </div>
              <div class="product-size" data-product="size">
                M <span>36</span>
              </div>
              <div class="product-size" data-product="size">
                L <span>36</span>
              </div>
              <div class="product-size" data-product="size">
                XL <span>36</span>
              </div>
              <div class="product-size" data-product="size">
                XXL <span>36</span>
              </div>
              <div class="product-size" data-product="size">
                XXXL <span>36</span>
              </div>
            </div>
            <div class="product-sizes-info">
              <span>Параметры модели: 170/87/64/88</span>
              <span> Размер на модели: XS</span>
              <div class="product-sizes-table-url" data-modal-open="sizeguide">
                Таблица размеров
              </div>
            </div>
          </div>
        </div>
        <div class="product-info">
          <details class="details" data-details="details">
            <summary class="details-summary" data-details="summary">
              <button class="details-button" type="button">
                <span class="iconfont icon-arrow-down"></span>
              </button>
              <span>Информация о товаре</span>
            </summary>
            <div class="details-body" data-details="body">

              <div class="product-info-text product-info-text-border">
                <p>
                  Артикул: <span>156653</span> <br>
                  Состав: <span>60% вискоза, 20% модал, 20% п/э</span>
                </p>

                <p>
                  Элегантный костюм из шелковой ткани — идеальный вечерний образ. Блузу и брюки
                  в дальнейшем можно носить раздельно, составляя более повседневные аутфиты.
                </p>

                <p>
                  Блуза асимметричного кроя, удлиненная
                  по спинке. Рукава 3/4 с оригинальным кроем манжеты.
                </p>

                <p>
                  Брюки свободного кроя на резинке
                  по спинке и со вставкой из пояса по переду, дополнены боковыми карманами.
                </p>
              </div>

            </div>
          </details>
          <details class="details" data-details="details">
            <summary class="details-summary" data-details="summary">
              <button class="details-button" type="button">
                <span class="iconfont icon-arrow-down"></span>
              </button>
              <span>Наличие в магазинах</span>
            </summary>
            <div class="details-body" data-details="body">

              <div class="product-info-text">
                Актуальность информации уточняйте
                по телефону.
              </div>
              <div class="product-info-title">
                <span class="iconfont icon-location"></span>
                <span>Санкт-Петербург</span>
              </div>

              repeat 3 times:

              <div class="product-info-item">
                ТРК «Академ-Парк» <br>
                Гражданский просп., 41, 2 этаж
                <a href="tel:+79990331844">+7 (999) 033-18-44</a>
                <div class="product-info-item-sizes">
                  <span>S</span>
                  <span>M</span>
                  <span>L</span>
                  <span>XL</span>
                </div>
              </div>

              end;

              <div class="product-info-title">
                <span class="iconfont icon-location"></span>
                <span>Хабаровск</span>
              </div>

              repeat 3 times:

              <div class="product-info-item">
                ТРК «Академ-Парк» <br>
                Гражданский просп., 41, 2 этаж
                <a href="tel:+79990331844">+7 (999) 033-18-44</a>
                <div class="product-info-item-sizes">
                  <span>S</span>
                  <span>M</span>
                  <span>L</span>
                  <span>XL</span>
                </div>
              </div>

              end;
            </div>
          </details>
          <details class="details" data-details="details">
            <summary class="details-summary" data-details="summary">
              <button class="details-button" type="button">
                <span class="iconfont icon-arrow-down"></span>
              </button>
              <span>Доставка и оплата</span>
            </summary>
            <div class="details-body" data-details="body">
              <div class="product-info-text product-info-text-border">
                <p> Варианты оплаты зависят от выбора типа доставки.</p>

                <p>
                  <span>Курьерская служба:</span> <br>
                  Оплата на сайте или наличными/банковской картой при получении. Только для
                  Санкт-Петербурга и
                  Москвы.
                </p>

                <p>
                  <span>СДЭК, BOXBERRY:</span> <br>
                  Оплата на сайте
                </p>
              </div>
              <div class="product-info-title">
                <span class="iconfont icon-location"></span>
                <span>Санкт-Петербург</span>
              </div>
              <div class="product-info-item">
                Курьерская служба <br>
                СДЭК <br>
                BOXBERRY <br>
                Бесплатная доставка только Курьерской службой!
              </div>
              <div class="product-info-title">
                <span class="iconfont icon-location"></span>
                <span>Остальные регионы</span>
              </div>
              <div class="product-info-item product-info-item-noBorder">
                СДЭК <br>
                BOXBERRY <br>
                Бесплатная доставка при заказе от 7000 ₽
              </div>
              <div class="product-info-more">
                <a href="/info/payment">Подробнее об оплате</a>
                <a href="/info/delivery">Подробнее о доставке</a>
              </div>
            </div>
          </details>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- рекомендации -->
repeat 3 times:
<section class="product-products section">
  <div class="section-container">
    <div class="section-header">
      <h2 class="section-title">
        <a href="/catalog">Заголовок для секции товара</a>
      </h2>
      <div class="section-button">
        <a href="/catalog">
          <span>Все</span>
          <span class="iconfont icon-arrow-right"></span>
        </a>
      </div>
    </div>
    <div class="swiper slider-small">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <article class="section-product">
            <button class="section-product-favourite" title="Добавить в избранное"
                    type="button">
              <span class="iconfont icon-heart-fill"></span>
            </button>
            <a href="/catalog/product">
              <picture>
                <source srcset="/assets/img/placeholder-product.webp" type="image/webp">
                <img alt="img" class="section-product-img" loading="lazy"
                     src="/assets/img/placeholder-product.jpeg">
              </picture>
            </a>
            <div class="swiper-lazy-preloader"></div>
            <h2 class="section-product-title">Название продукта</h2>
            <div class="section-product-price">7 799 ₽</div>
            <div class="section-product-colors">
              <div class="section-product-color _gray"></div>
              <div class="section-product-color _color"></div>
            </div>
          </article>
        </div>
        <div class="swiper-slide">
          <article class="section-product">
            <button class="section-product-favourite" title="Добавить в избранное"
                    type="button">
              <span class="iconfont icon-heart-fill"></span>
            </button>
            <a href="/catalog/product">
              <picture>
                <source srcset="/assets/img/placeholder-product-2.webp" type="image/webp">
                <img alt="img" class="section-product-img" loading="lazy"
                     src="/assets/img/placeholder-product-2.jpeg">
              </picture>
            </a>
            <div class="swiper-lazy-preloader"></div>
            <h2 class="section-product-title">Название продукта</h2>
            <div class="section-product-price">7 799 ₽</div>
            <div class="section-product-colors">
              <div class="section-product-color _gray"></div>
              <div class="section-product-color _green"></div>
            </div>
          </article>
        </div>
        <div class="swiper-slide">
          <article class="section-product">
            <button class="section-product-favourite" title="Добавить в избранное"
                    type="button">
              <span class="iconfont icon-heart-fill"></span>
            </button>
            <a href="/catalog/product">
              <picture>
                <source srcset="/assets/img/placeholder-product-3.webp" type="image/webp">
                <img alt="img" class="section-product-img" loading="lazy"
                     src="/assets/img/placeholder-product-3.jpeg">
              </picture>
            </a>
            <div class="swiper-lazy-preloader"></div>
            <h2 class="section-product-title">Название продукта</h2>
            <div class="section-product-price">7 799 ₽</div>
            <div class="section-product-colors">
              <div class="section-product-color _gray"></div>
              <div class="section-product-color _yellow"></div>
            </div>
          </article>
        </div>
      </div>
      <div class="swiper-button-prev">
        <span class="iconfont icon-arrow-left"></span>
      </div>
      <div class="swiper-button-next">
        <span class="iconfont icon-arrow-right"></span>
      </div>
    </div>
  </div>
</section>
end;
