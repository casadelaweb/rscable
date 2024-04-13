<?php namespace App;
global $fakeProducts
?>

<div class="searchModal" data-modal="search">
  <input type="text" hidden data-search-modal="input">

  <div class="searchModalContainer">
    <div class="searchModalMain">
      <div class="searchModalMainLoader"></div>
      <div class="searchModalHeader">
        <h2 class="searchModalHeaderTitle"> Вам могут понравится </h2>
        <button type="button" data-modal-close title="Закрыть" aria-label="Закрыть"
                class="searchModalHeaderButton">
          Закрыть
        </button>
      </div>
      <div class="searchModalResults">
        <?php
        foreach ($fakeProducts as $product):
          Render::component('catalogCard', $product);
        endforeach; ?>
      </div>
    </div>
    <div class="searchModalAside">
      <div class="searchModalMobile">
        <button type="button" data-modal-close title="Закрыть" aria-label="Закрыть"
                class="searchModalHeaderButton">
          Закрыть
        </button>
        <div class="header-search">
          <div class="header-search-icon">
            <span class="iconfont icon-search"></span>
          </div>
          <input type="text" class="header-search-input" data-modal-open="search"
                 data-search-modal="input-mobile"
                 placeholder="Категория, модель или артикул">
        </div>
      </div>
      <div class="searchModalHints">
        <?php $hints = [
          'Гибкий', 'Для подводной прокладки', 'Огнестойкий', 'Экранирован',
          'Герметичный', 'Для наружной прокладки',
        ];
        foreach ($hints as $hint): ?>
          <button type="button" class="searchModalHint" data-hint="<?= $hint ?>">
            <?= $hint ?>
          </button>
        <?php endforeach; ?>
      </div>
      <div class="searchModalQuickLinks">
        <div class="searchModalQuickLinksTitle">Часто ищут</div>
        <div class="searchModalQuickLinksList">
          <a class="searchModalQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели силовые</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="searchModalQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели с изоляцией из ПВХ</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="searchModalQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели универсальные</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="searchModalQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели автомобильные</span>
            <span class="iconfont icon-search"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
