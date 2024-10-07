<?php namespace App; ?>

<div class="modalDeleteCart" data-modal="delete-cart">
  <button type="button" data-modal-close class="modalDeleteCartClose">
    <span class="iconfont icon-close"></span>
  </button>
  <div class="modalDeleteCartContainer">
    <h2 class="modalDeleteCartTitle">Очистить корзину</h2>
    <div class="modalDeleteCartNote">
      Вы точно хотите удалить выбранные товары? Отменить данное действие будет невозможно.
    </div>
    <div class="modalDeleteCartButtons">
      <a href="/cart/?cart_empty=true" class="modalDeleteCartConfirm">
        Удалить выбранные
      </a>
      <button type="button" data-modal-close class="modalDeleteCartDeny">
        Не очищать
      </button>
    </div>
  </div>
</div>
<div class="modalDeleteCartOverlay" data-modal-overlay="delete-cart"></div>
