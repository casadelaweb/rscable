<?php namespace App;
/** @var string $filterTitle */
?>

<fieldset data-details="details" class="catalogFilter">
  <div data-details="summary" class="catalogFilterSummary">
    <div class="catalogFilterSummaryContent">
      <span><?= $filterTitle ?></span>
      <button type="button" data-details="button" class="catalogFilterButton">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="catalogFilterSelected"></div>
  </div>
  <div data-details="body" class="catalogFilterBody">
    <div class="catalogFilterRow">
      <input id="input-price-min" class="catalogFilterInput _range" name="price_min" type="text">
      <input id="input-price-max" class="catalogFilterInput _range" name="price_max" type="text">
    </div>
    <div data-catalog-prices
         data-input-max="#input-price-max"
         data-input-min="#input-price-min"
         data-max="12999"
         data-min="199"
         data-span-max="#span-price-max"
         data-span-min="#span-price-min"></div>
  </div>
</fieldset>
