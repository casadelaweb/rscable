<?php namespace App; ?>

<?php Render::component('breadcrumbs'); ?>

<section class="catalog">
  <div class="catalog-container">
    <div class="catalog-layout" data-catalog="layout">
      <?php Render::component('catalog/catalogAside') ?>

      <div class="catalog-main">
        <div class="catalog-header _mobile">
          <div class="catalog-title">Каталог</div>
          <?php Render::component('catalog/catalogFiltersButtons') ?>
        </div>
        <div class="catalog-header _desktop" data-catalog="header-desktop">
          <h1 class="catalog-title">Каталог</h1>
          <?php Render::component('catalog/catalogFilters') ?>
          <?php Render::component('catalog/catalogFiltersButtons') ?>
        </div>
        <div class="catalog-cards">
          <div class="catalog-cards-loading">
            <img alt="loading" class="catalog-cards-loading-img" loading="lazy"
                 src="/assets/img/loading.gif">
          </div>
          <?php $i = 0;
          while ($i < 24) {
            Render::component('catalog/catalogCard');
            $i++;
          } ?>
        </div>
        <button class="catalog-more" data-catalog="update" type="button">
          <span>Показать еще</span>
        </button>
        <?php Render::component('catalog/catalogPagination') ?>
      </div>
    </div>
  </div>
</section>

