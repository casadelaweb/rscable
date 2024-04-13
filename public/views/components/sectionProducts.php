<?php namespace App;
global $fakeProducts
?>

<section class="products">
  <div class="products-container">
    <div class="products-header">
      <h2 class="products-title">Популярные товары</h2>
      <a href="/catalog/" class="products-button" title="Смотреть все" aria-label="Смотреть все">
        Перейти в каталог
      </a>
    </div>
    <div class="products-cards">
      <div class="products-cards-loader">
        <!--<div class="iconfont icon-spinner"></div>-->
      </div>
      <?php foreach ($fakeProducts as $product):
        Render::component('catalogCard', $product);
      endforeach; ?>
    </div>
    <div class="productsNote">
      Это все популярные товары. Не нашли то что искали? Посетите наш <a
        href="/catalog/">каталог</a> или воспользуйтесь
      <button data-modal-open="search">поиском на сайте</button>
    </div>
    <button class="productsLoadMore" type="button" title="Загрузить еще">
      Загрузить еще
    </button>
  </div>
</section>
