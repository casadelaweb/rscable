<?php namespace App;
/** @var string $filterTitle */
/** @var number $min */
/** @var number $max */
?>

<fieldset data-details="details" class="catalogFilter open">
  <div data-details="summary" class="catalogFilterSummary">
    <div class="catalogFilterSummaryContent">
      <button type="button" data-details="button" class="catalogFilterButton">
        <span class="iconfont icon-arrow-down"></span>
      </button>
      <span class="catalogFilterTitle">
        <?= $filterTitle ?>
      </span>
    </div>
    <!--<div class="catalogFilterSelected"></div>-->
  </div>
  <div data-details="body" class="catalogFilterBody">
    <div class="catalogFilterRow">
      <input data-catalog-filter="input-min" class="catalogFilterInput _range" name="price_min"
             type="text">
      <input data-catalog-filter="input-max" class="catalogFilterInput _range" name="price_max"
             type="text">
    </div>
    <div data-catalog-filter="range" data-max="<?= $max ?>" data-min="<?= $min ?>"></div>
  </div>
</fieldset>
