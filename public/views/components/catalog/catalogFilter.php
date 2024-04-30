<?php namespace App;
/** @var string $filterTitle */
/** @var string $inputName */
/** @var string $inputType */
/** @var array $options */
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
    <?php foreach ($options as $option):
      $title = $option; ?>
      <label class="catalogFilterLabel">
        <input class="catalogFilterInput" type="<?= $inputType ?>" name="<?= $inputName ?>">
        <span class="catalogFilterTitle"><?= $title ?></span>
      </label>
    <?php endforeach; ?>
  </div>
</fieldset>
