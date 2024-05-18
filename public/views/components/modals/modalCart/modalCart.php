<?php namespace App;
global $cartItemsQuantity;
global $isCartEmpty;
$products = [
  [
    'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
    'url' => '/product/',
    'quantity' => '3 шт.',
    'imgUrl' => '/assets/img/cables/cable-1.png',
    'price' => '14 320 ₽',
    'priceOld' => '15 340 ₽',
  ],
  [
    'title' => 'Еще один товар с несколько более длинным названием',
    'url' => '/product/',
    'quantity' => '254 шт.',
    'imgUrl' => '/assets/img/cables/cable-2.png',
    'price' => '1 250 ₽',
    'priceOld' => null,
  ],
  [
    'title' => 'Кабель КШВ 654ЭББШВ-6 3х95+1х10+1х16, 1 кВ',
    'url' => '/product/',
    'quantity' => '35 шт.',
    'imgUrl' => '/assets/img/cables/cable-3.png',
    'price' => '14 320 ₽',
    'priceOld' => '15 340 ₽',
  ],
  [
    'title' => 'Еще какой-то товар с удивительно длинным названием, содержащий длинные слова',
    'url' => '/product/',
    'quantity' => '1 шт.',
    'imgUrl' => '/assets/img/cables/cable-4.png',
    'price' => '630 ₽',
    'priceOld' => null,
  ],
  [
    'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
    'url' => '/product/',
    'quantity' => '3 шт.',
    'imgUrl' => '/assets/img/cables/cable-5.png',
    'price' => '14 320 ₽',
    'priceOld' => null,
  ],
  [
    'title' => 'Еще один товар с несколько более длинным названием',
    'url' => '/product/',
    'quantity' => '254 шт.',
    'imgUrl' => '/assets/img/cables/cable-6.png',
    'price' => '1 250 ₽',
    'priceOld' => null,
  ],
];
?>

<form class="modalCart" data-modal="cart">
  <div class="modalCartHeader">
    <div class="modalCartRow">
      <h2 class="modalCartTitle">
        <?php if ($isCartEmpty) : ?>
          Корзина
        <?php else: ?>
          В корзине 4 товара
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
      foreach ($products as $product):
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
