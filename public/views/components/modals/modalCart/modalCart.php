<?php namespace App;
global $isCartEmpty;
global $cartProducts;
global $cartProductsQuantity;
?>

<form class="modalCart" data-modal="cart">
  <div class="modalCartHeader">
    <div class="modalCartRow">
      <h2 class="modalCartTitle">
        <?php if ($isCartEmpty) : ?>
          Корзина
        <?php else: ?>
          В корзине <?= $cartProductsQuantity ?> товаров
        <?php endif; ?>
      </h2>
    </div>
    <div class="modalCartRow <?= $isCartEmpty ? '_hidden' : '' ?>">
      <button type="button" class="modalCartClear">
        <span class="iconfont icon-bin"></span>
        <span>Очистить корзину</span>
      </button>
    </div>
    <button type="button" class="modalCartClose">
      <span class="iconfont icon-close"></span>
    </button>
  </div>
  <div class="modalCartBody">
    <?php if ($isCartEmpty) : ?>
      <div class="modalCartEmpty">
        <div class="iconfont icon-cart"></div>
        <h3>Ваша корзина пуста.</h3>
        <p> Выберите интересующие Вас товары
          <a href="/catalog/">в нашем каталоге</a>
          или воспользуйтесь
          <button data-modal-open="search">поиском на сайте</button>
        </p>
      </div>

    <?php else:
      foreach ($cartProducts as $product):
        Render::component('modals/modalCart/modalCartProduct', [
          'title' => $product['title'],
          'url' => $product['url'],
          'quantity' => $product['quantity'],
          'imgUrl' => $product['imgUrl'],
          'price' => $product['price'],
          'priceOld' => $product['priceOld'],
        ]);
      endforeach;
    endif; ?>
  </div>
  <div class="modalCartFooter">
    <?php if ($isCartEmpty) : ?>
      <a href="/catalog/" class="modalCartCatalog">
        Перейти в каталог
      </a>
    <?php else: ?>
      <div class="modalCartTotal">
        <span>Итого:</span>
        <span>120 000 ₽</span>
      </div>
      <button data-modal-open="feedback" class="modalCartOrder" type="button">
        Оформить заказ
      </button>
      <a href="/cart/" class="modalCartButton">
        В корзину
      </a>
    <?php endif; ?>
  </div>
</form>
<div class="modalCartOverlay" data-modal-overlay="cart"></div>
