<?php namespace App;
/** @var string $title */
/** @var string $article */
/** @var string $colorName */
/** @var string $colorCSSClass */
/** @var string $size */
/** @var string|int|null $discount */
/** @var string|int $price */
/** @var string|int|null $priceOld */
/** @var string $url */
/** @var string $imgUrl */
?>

<article class="cart-card" data-cart-card="card">
  <a class="cart-card-img" href="<?= $url ?>" title="<?= $title ?>">
    <img alt="img" loading="lazy" src="<?= $imgUrl ?>">
  </a>
  <div class="cart-card-body">
    <div>
      <h2 class="cart-card-title">
        <a href="<?= $url ?>" title="<?= $title ?>"><?= $title ?></a>
      </h2>
      <div class="cart-card-article">
        <span>арт. </span>
        <span><?= $article ?></span>
      </div>
    </div>
    <div class="cart-card-colors">
      <div class="cart-card-color-name"><?= $colorName ?></div>
      <div class="cart-card-color-circle <?= $colorCSSClass ?>"></div>
    </div>
    <div class="cart-card-size"><?= $size ?></div>
    <div class="cart-card-prices">
      <?php if ($discount): ?>
        <div class="cart-card-discount"><?= $discount ?></div>
      <?php endif; ?>
      <div>
        <?php if ($discount): ?>
          <div class="cart-card-price-old">
            <span data-cart-card="price-old"><?= $priceOld ?></span>
            <span>₽</span>
          </div>
          <div class="cart-card-price-current">
            <span data-cart-card="price-current"><?= $price ?></span>
            <span>₽</span>
          </div>
        <?php else: ?>
          <div class="cart-card-price">
            <span data-cart-card="price-current"><?= $price ?></span>
            <span>₽</span>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
  <div class="cart-card-quantity-wrapper">
    <div class="cart-card-quantity" data-cart-card="quantity">
      <button class="cart-card-quantity-button" data-cart-card="quantity-minus"
              title="Убрать" type="button">
        <span>-</span>
      </button>
      <input class="cart-card-quantity-input" data-cart-card="quantity-input"
             type="text" value="1">
      <button class="cart-card-quantity-button" data-cart-card="quantity-plus"
              title="Добавить" type="button">
        <span>+</span>
      </button>
    </div>
  </div>
  <div class="cart-card-footer">
    <button class="cart-card-remove" type="button" title="Убрать из корзины">
      <span>Удалить</span> <span class="iconfont icon-close"></span>
    </button>
    <button class="cart-card-favourite" type="button" title="Добавить в избранное">
      <span class="iconfont icon-heart-fill"></span>
    </button>
  </div>
</article>
