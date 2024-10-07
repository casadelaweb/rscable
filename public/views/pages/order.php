<?php namespace App;
global $isCartEmpty;
global $cartProducts;
?>

<?php Render::component('sections/breadcrumbs') ?>

<!-- Оформление заказа -->
<section class="order">
  <div class="orderContainer">
    <div class="orderHeader">
      <h1 class="orderTitle">
        Оформление заказа
      </h1>
    </div>
    <div class="orderNote">
      Внимание! Мы работаем только с юридическими лицами и ИП.
    </div>
    <div class="orderLayout">
      <div class="orderBody">
        <div class="orderCards">
          <div class="orderCard">
            <div class="orderCardTitle">
              <span class="iconfont icon-truck"></span>
              Способ доставки
            </div>
            <label class="orderCardLabel">
              <input type="radio" class="orderCardInput" name="shipping_type" checked required>
              <span class="orderCardLegend">
                Доставка
              </span>
              <span class="orderCardDescription">
                Стоимость доставки рассчитывается индивидуально при подтверждении вашего заказа
                менеджером компании
              </span>
            </label>
            <label class="orderCardLabel">
              <input type="radio" class="orderCardInput" name="shipping_type" required>
              <span class="orderCardLegend">
                Самовывоз
              </span>
              <span class="orderCardDescription">
                Вы можете самостоятельно забрать заказ с нашего склада
              </span>
            </label>
          </div>
          <div class="orderCard">
            <div class="orderCardTitle">
              <span class="iconfont icon-credit-card"></span>
              Способ оплаты:
            </div>
            <label class="orderCardLabel">
              <input type="radio" class="orderCardInput" name="payment_type" checked required>
              <span class="orderCardLegend">
                Расчётный счёт
              </span>
              <span class="orderCardDescription">
                Оплата заказа возможна только в безналичной форме. Минимальная сумма отгрузки в
                нашей компании
                <strong>100 000 рублей</strong>
                .
              </span>
            </label>

          </div>
        </div>
        <div class="orderClient">
          <div class="orderClientHeader">
            <div class="orderClientTitle">
              <span class="iconfont icon-person"></span>
              Покупатель
            </div>
          </div>
          <div class="orderClientFields">
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Название компании
                <span class="_required">*</span>
              </span>
              <input type="text" name="company_name" autocomplete="off" required
                     placeholder="Название компании" class="orderClientFieldInput">
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                ИНН
                <span class="_required">*</span>
              </span>
              <input type="text" name="inn" autocomplete="off" required
                     placeholder="ИНН" class="orderClientFieldInput">
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Контактное лицо
                <span class="_required">*</span>
              </span>
              <input type="text" name="contact_name" autocomplete="off" required
                     placeholder="Контактное лицо" class="orderClientFieldInput">
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Номер телефона
                <span class="_required">*</span>
              </span>
              <input type="text" name="tel" autocomplete="off" required data-mask="tel"
                     data-validate="tel"
                     placeholder="Номер телефона" class="orderClientFieldInput">
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Электронная почта
                <span class="_required">*</span>
              </span>
              <input type="text" name="email_name" autocomplete="off" required data-validate="email"
                     placeholder="Электронная почта" class="orderClientFieldInput">
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Город
                <span class="_required">*</span>
              </span>
              <input type="text" name="city_name" autocomplete="off" required
                     placeholder="Город" class="orderClientFieldInput">
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Адрес доставки
              </span>
              <textarea type="text" name="address" autocomplete="off"
                        placeholder="Адрес доставки" class="orderClientFieldInput"></textarea>
            </label>
            <label class="orderClientField">
              <span class="orderClientFieldLabel">
                Комментарии к заказу:
              </span>
              <textarea type="text" name="comment" autocomplete="off"
                        placeholder="Комментарии к заказу:"
                        class="orderClientFieldInput"></textarea>
            </label>
            <div class="orderClientFieldsNote">
              <span class="_required">*</span>
              – обязательные поля
            </div>
          </div>
        </div>
        <div class="orderProducts">
          <div class="orderProductsHeader">
            <div class="orderProductsTitle">
              <span class="iconfont icon-cart"></span>
              Товары в заказе
            </div>
          </div>
          <div class="orderProductsCaption">
            <span>Наименование</span>
            <span>Цена</span>
            <span>Количество</span>
            <span>Сумма</span>
          </div>
          <div class="orderProductsList">
            <?php foreach ($cartProducts as $product):
              $title = $product['title'];
              $url = $product['url'];
              $imgUrl = $product['imgUrl'];
              $price = $product['price'];
              ?>
              <article class="orderProduct">
                <div class="orderProductBody">
                  <a href="<?= $url; ?>">
                    <img src="<?= $imgUrl; ?>" alt="<?= $title; ?>" loading="lazy"
                         class="orderProductImg">
                  </a>
                  <h3 class="orderProductTitle">
                    <a href="<?= $url; ?>">
                      <?= $title ?>
                    </a>
                  </h3>
                </div>
                <div class="orderProductPrice">
                  <span class="orderProductLabel">Цена:</span>
                  <?= $price; ?>
                </div>
                <div class="orderProductQuantity">
                  <span class="orderProductLabel">Количество:</span>
                  10 м
                </div>
                <div class="orderProductSum">
                  <span class="orderProductLabel">Сумма:</span>
                  <?= $price ?>
                </div>
              </article>
            <?php endforeach; ?>
          </div>
        </div>
        <label class="orderAccept">
          <input type="checkbox" required class="orderAcceptInput">
          Я согласен(а) на
          <a href="/policy/">обработку персональных данных</a>
        </label>
        <button type="button" class="orderSubmit">
          оформить заказ
        </button>
      </div>
      <div class="orderAside">
        <div class="orderAsideHeader">
          <div class="orderAsideTitle">
            Ваш заказ
          </div>
          <a href="/cart/" class="orderAsideChange">
            Изменить
          </a>
        </div>
        <div class="orderAsideBody">
          <div class="orderAsideRow">
            <span class="orderAsideKey">Всего позиций:</span>
            <span class="orderAsideValue">6</span>
          </div>
          <div class="orderAsideRow">
            <span class="orderAsideKey">Товаров на:</span>
            <span class="orderAsideValue">340 000 ₽</span>
          </div>
          <div class="orderAsideRow">
            <span class="orderAsideKey">Доставка:</span>
            <span class="orderAsideValue">1400 ₽</span>
          </div>
          <div class="orderAsideTotal">
            <span class="orderAsideKey">Итого:</span>
            <span class="orderAsideValue">341 400 ₽</span>
          </div>
        </div>
        <button type="button" class="orderAsideSubmit">
          оформить заказ
        </button>
      </div>
    </div>
  </div>
</section>
