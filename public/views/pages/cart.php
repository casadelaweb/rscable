<?php namespace App;
global $isCartEmpty;
global $cartProducts;
global $cartProductsQuantity;
?>

<?php Render::component('sections/breadcrumbs') ?>

<section class="cart">
  <div class="cartContainer">
    <div class="cartHeader">
      <h1 class="cartTitle">Корзина</h1>
    </div>
    <?php if ($isCartEmpty): ?>
      <div class="cartEmpty">
        <h2 class="cartEmptyTitle">Ваша корзина пуста</h2>
        <div class="cartEmptyIcon">
          <div class="iconfont icon-cart"></div>
        </div>
        <div class="cartEmptyNote">
          Перейти в
          <a href="/catalog/">каталог</a>
          за покупками.
        </div>
      </div>
    <?php else: ?>
      <div class="cartNote">
        Внимание! Оптовая компания РОСКАБ работает только с юридическими лицами и ИП. Минимальная
        сумма заказа от 100 000 ₽.
      </div>

      <div class="cartLayout">
        <div>
          <div class="cartNav">
            <label class="cartNavSelect">
              <input type="checkbox" class="cartNavCheckbox">
              <span>Выбрать все</span>
            </label>
            <button type="button">
              <span class="iconfont icon-download"></span>
              <span>Скачать файлом</span>
            </button>
            <button type="button">
              <span class="iconfont icon-share"></span>
              <span>Поделиться ссылкой</span>
            </button>
            <button type="button">
              <span class="iconfont icon-print"></span>
              <span>Версия для печати</span>
            </button>
            <label>
              <span class="iconfont icon-close"></span>
              <span>Удалить все</span>
            </label>
          </div>
          <div class="cartCards">
            <?php foreach ($cartProducts as $card):
              $title = $card['title'];
              $imgUrl = $card['imgUrl'];
              $url = $card['url'];
              ?>
              <article class="cartCard">
                <input type="checkbox" class="cartCardCheckbox">
                <a class="cartCardPicture" href="<?= $url; ?>">
                  <img src="<?= $imgUrl; ?>" alt="<?= $title; ?>" class="cartCardImg"
                       loading="lazy">
                </a>
                <div class="cartCardBody">
                  <h3 class="cartCardTitle">
                    <a href="<?= $url; ?>">
                      <?= $title; ?>
                    </a>
                  </h3>
                  <div class="cartCardType">
                    Тип цены: оптовая цена
                  </div>
                </div>
                <div class="cartCardFooter">
                  <div class="cartCardPrices">
                    <div class="cartCardPrice _prev">
                      от 103 500 ₽
                    </div>
                    <div class="cartCardPrice _current">
                      от 100 200 ₽
                    </div>
                    <div class="cartCardNote">
                      цена за 1 м
                    </div>
                  </div>
                  <div class="cartCardCounter">
                    <div class="cartCardQuantity">
                      <button class="cartCardQuantityButton" title="Убрать" type="button">
                        <span>-</span>
                      </button>
                      <input class="cartCardQuantityInput" type="text" value="1">
                      <button class="cartCardQuantityButton" title="Добавить" type="button">
                        <span>+</span>
                      </button>
                    </div>
                    <div class="cartCardNote">
                      м
                    </div>
                  </div>
                </div>

                <!--<div class="cartCardActions">-->

                <div class="cartCardButtons">
                  <button type="button" class="cartCardFav">
                    <span class="iconfont icon-heart-fill"></span>
                  </button>
                  <button class="cartCardRemove">
                    <span class="iconfont icon-close"></span>
                  </button>
                </div>
                <!--</div>-->
              </article>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="cartCheckout">
          <div class="cartCheckoutHeader">
            <button type="button" class="cartCheckoutOrder">
              Оформить заказ
            </button>
            Доступные способы и время доставки можно выбрать при оформлении заказа
          </div>
          <button type="button" class="cartCheckoutQuick" data-modal-open="feedback">
            Быстрый заказ
          </button>

          <div class="cartCheckoutSummary">
            Всего:
            <span class="cartCheckoutTotal">1 250 000 ₽</span>
          </div>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
