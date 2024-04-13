<?php namespace App;
$products = [
  [
    'title' => 'Относительно длинное название товара',
    'article' => '1234567890',
    'colorName' => 'Синий',
    'colorCSSClass' => '_blue',
    'size' => 'XXL / 56',
    'discount' => '-30%',
    'price' => '6 600',
    'priceOld' => '7 599',
    'url' => '/catalog/product',
    'imgUrl' => '/assets/img/placeholder-product.jpeg',
  ],
  [
    'title' => 'Удивительно длинное название товара длиной в несколько строк или немного больше',
    'article' => '1234567890',
    'colorName' => 'Разноцветный',
    'colorCSSClass' => '_color',
    'size' => 'S / 42',
    'discount' => null,
    'price' => '4 400',
    'priceOld' => null,
    'url' => '/catalog/product',
    'imgUrl' => '/assets/img/placeholder-product-2.jpeg',
  ],
];
?>
<?php Render::component('breadcrumbs') ?>
<section class="cart">
  <div class="cart-container">
    <h1 class="cart-title">Корзина</h1>
    <div class="cart-layout">
      <div class="cart-cards">
        <?php foreach ($products as $product):
          Render::component('cardCart', $product);
        endforeach; ?>
      </div>
      <form class="cart-summary">
        <div class="cart-summary-header">
          <div class="cart-summary-row">
            <h2 class="cart-summary-title">СУММА ЗАКАЗА</h2>
            <div class="cart-summary-price">
              <span data-cart="price-raw">18 999</span>
              <span>₽</span>
            </div>
          </div>
        </div>
        <div class="cart-summary-body">
          <label class="cart-summary-label">
            <span class="cart-summary-label-title">Введите промокод</span>
            <input autocomplete="off" class="cart-summary-input" name="promocode">
            <button class="cart-summary-button" type="button">
              <span class="iconfont icon-arrow-right"></span>
            </button>
          </label>

          <div class="cart-summary-promocodes">
            <div class="cart-summary-promocode">
              <span class="cart-summary-promocode-name">350Z</span>
              <button class="cart-summary-promocode-remove" type="button">
                <span class="iconfont icon-close"></span>
              </button>
              <span class="cart-summary-promocode-status">Промокод не найден</span>
            </div>
            <div class="cart-summary-promocode">
              <span class="cart-summary-promocode-name">Eclipse GSX</span>
              <button class="cart-summary-promocode-remove" type="button">
                <span class="iconfont icon-close"></span>
              </button>
              <span
                class="cart-summary-promocode-status">Активен и может быть использован</span>
            </div>
            <div class="cart-summary-promocode">
              <span class="cart-summary-promocode-name">Skyline</span>
              <button class="cart-summary-promocode-remove" type="button">
                <span class="iconfont icon-close"></span>
              </button>
              <span class="cart-summary-promocode-status error">Промокод не найден</span>
            </div>
            <div class="cart-summary-promocode">
              <span class="cart-summary-promocode-name">Supra</span>
              <button class="cart-summary-promocode-remove" type="button">
                <span class="iconfont icon-close"></span>
              </button>
              <span
                class="cart-summary-promocode-status error">Время действия промокода истекло</span>
            </div>
            <div class="cart-summary-promocode">
              <span class="cart-summary-promocode-name">RX-7</span>
              <button class="cart-summary-promocode-remove" type="button">
                <span class="iconfont icon-close"></span>
              </button>
              <span
                class="cart-summary-promocode-status success">Активен и может быть использован</span>
            </div>
          </div>

          <label class="cart-summary-label">
              <span class="cart-summary-label-title">
                Баллов доступно: <span class="cart-summary-points"> 1250 </span> <br>
                Использовать
              </span>
            <input autocomplete="off" class="cart-summary-input" name="points">
            <button class="cart-summary-button" type="button">
              <span class="iconfont icon-arrow-right"></span>
            </button>
          </label>
          <div class="cart-summary-message"> Стоимость доставки будет учтена при продолжении
            оформления
          </div>
        </div>
        <div class="cart-summary-footer">
          <div class="cart-summary-row">
            <h2 class="cart-summary-title">ИТОГО</h2>
            <div class="cart-summary-price">18 999 ₽</div>
          </div>
          <a class="cart-summary-submit" href="/personal/cart/order">
            <span>Оформить заказ</span>
          </a>
        </div>
      </form>
    </div>
  </div>
</section>
