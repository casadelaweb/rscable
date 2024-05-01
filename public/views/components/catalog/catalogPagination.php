<?php namespace App; ?>

<div class="catalogPagination">
  <button class="catalogPaginationMore" type="button">
    <span>Показать еще</span>
    <span class="catalogPaginationMoreLoading"></span>
  </button>
  <div class="catalogPaginationBody">
    <a href="/catalog/" class="catalogPaginationPrev">
      <span class="iconfont icon-arrow-left"></span>
    </a>
    <div class="catalogPaginationList">
      <a href="/catalog/" class="catalogPaginationItem">1</a>
      <a href="/catalog/" class="catalogPaginationItem _active">2</a>
      <a href="/catalog/" class="catalogPaginationItem">3</a>
      <span class="catalogPaginationDivider">...</span>
      <a href="/catalog/" class="catalogPaginationItem">123</a>
      <a href="/catalog/" class="catalogPaginationItem">124</a>
    </div>
    <a href="/catalog/" class="catalogPaginationNext">
      <span class="iconfont icon-arrow-right"></span>
    </a>
  </div>
</div>
