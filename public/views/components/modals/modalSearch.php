<?php namespace App;
global $fakeProducts
?>

<div class="modalSearch" data-modal="search">
  <input type="text" hidden data-search-modal="input">

  <div class="modalSearchContainer">
    <div class="modalSearchMain">
      <div class="modalSearchMainLoader"></div>
      <div class="modalSearchHeader">
        <h2 class="modalSearchHeaderTitle"> Вам могут понравится </h2>
        <button type="button" data-modal-close title="Закрыть" aria-label="Закрыть"
                class="modalSearchHeaderButton">
          Закрыть
        </button>
      </div>
      <div class="modalSearchResults">
        <?php
        foreach ($fakeProducts as $product):
          Render::component('productCard', $product);
        endforeach; ?>
      </div>
    </div>
    <div class="modalSearchAside">
      <div class="modalSearchMobile">
        <button type="button" data-modal-close title="Закрыть" aria-label="Закрыть"
                class="modalSearchHeaderButton">
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
      <div class="modalSearchHints">
        <?php $hints = [
          'Гибкий', 'Для подводной прокладки', 'Огнестойкий', 'Экранирован',
          'Герметичный', 'Для наружной прокладки',
        ];
        foreach ($hints as $hint): ?>
          <button type="button" class="modalSearchHint" data-hint="<?= $hint ?>">
            <?= $hint ?>
          </button>
        <?php endforeach; ?>
      </div>
      <div class="modalSearchQuickLinks">
        <div class="modalSearchQuickLinksTitle">Часто ищут</div>
        <div class="modalSearchQuickLinksList">
          <a class="modalSearchQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели силовые</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="modalSearchQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели с изоляцией из ПВХ</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="modalSearchQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели универсальные</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="modalSearchQuickLink" href="/catalog/test/" title="Перейти в каталог">
            <span>Кабели автомобильные</span>
            <span class="iconfont icon-search"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modalSearchOverlay" data-modal-overlay="search"></div>
