<?php namespace App;
/** @var string $filterTitle */
/** @var string $filterType */
/** @var string $inputName */
/** @var string $inputType */
/** @var array $options */
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
      <!--<button type="button" class="catalogFilterReset">
        <span class="iconfont icon-close"></span>
        <span>Сбросить</span>
      </button>-->
    </div>
    <!--<div class="catalogFilterSelected"></div>-->
  </div>
  <div data-details="body" class="catalogFilterBody <?= $filterType === 'grid' ? '_grid' : ''; ?>">
    <?php if ($filterType === 'grid') : ?>
      <label class="catalogFilterBodySearch">
        <span class="catalogFilterBodySearchIcon iconfont icon-search"></span>
        <input type="text" class="catalogFilterBodySearchInput" placeholder="<?= $filterTitle ?>">
      </label>
    <?php endif; ?>

    <?php foreach ($options as $option):
      $title = $option; ?>
      <label class="catalogFilterLabel">
        <input class="catalogFilterInput" type="<?= $inputType ?>" name="<?= $inputName ?>">
        <span class="catalogFilterTitle"><?= $title ?></span>
      </label>
    <?php endforeach; ?>
  </div>
</fieldset>
