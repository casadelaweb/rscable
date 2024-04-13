<?php namespace App; ?>
<section class="order">
  <div class="order-container">
    <?php Render::component('breadcrumbs') ?>
    <h2 class="order-title">Оформление заказа</h2>
    <form class="order-layout">
      <div class="order-steps">
        <div class="order-step">
          <div class="order-step-header">
            <div class="order-step-number"> 1</div>
            <h2 class="order-step-title"> Регион доставки </h2>
          </div>
          <div class="order-step-body">
            <div class="order-note">
              <div> Бесплатная доставка по Санкт-Петербургу и Москве.</div>
              <div class="order-warning">
                Важно! Ознакомьтесь с информацией! <br>
                <span class="text-underline">Доставка</span>
                осуществляется не во все города.
              </div>
            </div>
            <div class="order-label">
              <label class="order-label-title" for="input-location">Местоположение *</label>
              <div class="order-location">
                <label class="order-location-search" for="input-location" type="button">
                  <span class="iconfont icon-search"></span>
                </label>
                <input id="input-location"
                       autocomplete="off"
                       class="order-location-input"
                       name="location"
                       placeholder="Санкт Петербург, Россия" required
                       type="text">
                <button class="order-location-reset" type="button">
                  <span class="iconfont icon-close"></span>
                </button>
              </div>
            </div>
            <div class="order-note">
              Выберите свой город в списке. Если вы
              не нашли свой город, выберите «другое местоположение», а город впишите
              в поле «Город».
            </div>
          </div>
        </div>
        <div class="order-step">
          <div class="order-step-header">
            <div class="order-step-number"> 2</div>
            <h2 class="order-step-title"> Доставка </h2>
          </div>
          <div class="order-body">
            <label class="order-label _radio">
              <input autocomplete="off" name="delivery" required type="radio">
              <span class="order-label-title"> Бесплатная доставка курьером 0 ₽</span>
            </label>

            <label class="order-label _radio">
              <input autocomplete="off" name="delivery" required type="radio">
              <span class="order-label-title"> Забрать из магазина 0 ₽</span>
            </label>
            <div class="order-label">

              <div class="select" data-select>
                <div class="select-current">
                  <button class="select-current-button" type="button">
                    <span class="iconfont icon-arrow-down"></span>
                  </button>
                  <span class="select-current-text"> </span>
                  <div class="select-current-value"> Выбрать магазин</div>
                </div>
                <div class="select-options">
                  <label class="select-option">
                    <input class="select-checkbox" name="sizes" type="radio">
                    <span> Магазин c коротким названием </span>
                  </label>
                  <label class="select-option">
                    <input class="select-checkbox" name="sizes" type="radio">
                    <span> Другой магазин с выразительно длинным названием </span>
                  </label>
                </div>
              </div>

            </div>

            <label class="order-label _radio">
              <input autocomplete="off" name="delivery" required type="radio">
              <span class="order-label-title"> Л-Пост (Лабиринт). <br> Доставка до пункта выдачи 0 ₽</span>
            </label>
            <label class="order-label _radio">
              <input autocomplete="off" name="delivery" required type="radio">
              <span
                class="order-label-title"> СДЭК. <br> Платная доставка до пункта выдачи </span>
            </label>
            <button class="order-button" type="button">
              <span>Выбрать пункт выдачи</span>
            </button>
            <div class="order-note"> Стоимость: 150 ₽ <br> Срок доставки: 1-2 дня</div>
            <label class="order-label _radio">
              <input autocomplete="off" name="delivery" required type="radio">
              <span
                class="order-label-title"> СДЭК. <br> Курьерская доставка с оплатой на сайте </span>
            </label>
          </div>
        </div>
        <div class="order-step">
          <div class="order-step-header">
            <div class="order-step-number"> 3</div>
            <h2 class="order-step-title"> Оплата </h2>
          </div>
          <div class="order-body">
            <label class="order-label _radio">
              <input autocomplete="off" name="payment" required type="radio">
              <span class="order-label-title">Оплата при получении (наличными или картой)</span>
            </label>
            <label class="order-label _radio">
              <input autocomplete="off" name="payment" required type="radio">
              <span
                class="order-label-title">Оплата на сайте (VISA, Maestro, MasterCard, МИР)</span>
            </label>
            <label class="order-label _radio">
              <input autocomplete="off" name="payment" required type="radio">
              <span class="order-label-title">
                    4 платежа по <span>2 040</span> ₽
                    <img alt="img" loading="lazy" src="/assets/img/dolyami.png">
                  </span>
            </label>
          </div>
        </div>
        <div class="order-step">
          <div class="order-step-header">
            <div class="order-step-number">4</div>
            <h2 class="order-step-title"> Покупатель </h2>
          </div>
          <div class="order-body">
            <label class="order-label">
              <span class="order-label-title">Имя *</span>
              <input autocomplete="off"
                     class="order-input"
                     name="firstname"
                     placeholder="Имя"
                     required
                     type="text">
            </label>
            <label class="order-label">
              <span class="order-label-title">Фамилия *</span>
              <input autocomplete="off"
                     class="order-input"
                     name="lastname"
                     placeholder="Фамилия"
                     required
                     type="text">
            </label>
            <label class="order-label">
              <span class="order-label-title">Почта *</span>
              <input autocomplete="off"
                     class="order-input"
                     data-mask="email"
                     name="email"
                     placeholder="Почта"
                     required
                     type="text">
            </label>
            <label class="order-label">
              <span class="order-label-title">Телефон *</span>
              <input autocomplete="off"
                     class="order-input"
                     data-mask="tel"
                     name="tel"
                     placeholder="Телефон"
                     required
                     type="text">
            </label>
          </div>
        </div>
      </div>
      <div class="order-summary">
        <div class="order-summary-header">
          <div class="order-summary-row">
            <div class="order-summary-name">СУММА ЗАКАЗА</div>
            <div class="order-summary-value">18 999 ₽</div>
          </div>
        </div>

        <div class="order-summary-body">
          <div class="order-summary-row">
            <div class="order-summary-name">Промокод</div>
            <div class="order-summary-value">SPRING</div>
          </div>
          <div class="order-summary-row">
            <button class="order-summary-name" type="button">
              Баллы <span class="iconfont icon-close"></span>
            </button>
            <div class="order-summary-value">- 1 250</div>
          </div>
          <div class="order-summary-row">
            <div class="order-summary-name">Доставка</div>
            <div class="order-summary-value">150 ₽</div>
          </div>
          <div class="order-summary-row">
            <div class="order-summary-name">Оплата</div>
            <div class="order-summary-value">онлайн</div>
          </div>
        </div>

        <div class="order-summary-footer">
          <div class="order-summary-row">
            <h2 class="order-summary-name">ИТОГО</h2>
            <div class="order-summary-value">18 999 ₽</div>
          </div>
        </div>

        <div class="order-summary-row">
          Будет начислено баллов:
          <div class="order-summary-points">1250</div>
        </div>
        <button class="order-summary-submit" type="submit">
          <span>Оплатить</span>
        </button>
        <div class="order-summary-policy">
          Нажимая на кнопку «Оплатить»,
          вы принимаете условия
          <a href="#">публичной оферты</a>
        </div>

      </div>
    </form>
  </div>
</section>
