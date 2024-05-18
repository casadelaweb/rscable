<?php namespace App;
/** @var string $title */
/** @var string $url */
/** @var string $imgUrl */
/** @var string|number $quantity */
/** @var string|number $price */
/** @var string|number|null $priceOld */
?>

<article class="modalCartProduct">
  <a href="<?= $url ?>" class="modalCartProductImg">
    <img src="<?= $imgUrl ?>" alt="img" loading="lazy">
  </a>

  <div class="modalCartProductInfo">
    <h3 class="modalCartProductTitle">
      <a href="<?= $url ?>>"> <?= $title ?> </a>
    </h3>
    <span class="modalCartProductQuantity">
      <?= $quantity ?>
    </span>
  </div>

  <div class="modalCartProductPrices">
    <?php if ($priceOld === null): ?>
      <div class="modalCartProductPrice"><?= $price ?></div>
    <?php else: ?>
      <div class="modalCartProductPrice _prev"><?= $priceOld ?></div>
      <div class="modalCartProductPrice _current"><?= $price ?></div>
    <?php endif; ?>
  </div>

  <button class="modalCartProductRemove" type="button">
    <span class="iconfont icon-bin"></span>
  </button>
</article>
