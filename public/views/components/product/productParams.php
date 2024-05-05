<?php namespace App;
/** @var array $params */
?>

<div class="productParams">
  <?php foreach ($params as $parameter):
    $parameterKey = $parameter['key'];
    $parameterValue = $parameter['value']; ?>
    <div class="productParam">
      <span class="productParamKey">
        <?= $parameterKey ?>
      </span>
      <span class="productParamDivider"></span>
      <span class="productParamValue">
        <?= $parameterValue ?>
      </span>
    </div>
  <?php endforeach; ?>
</div>
