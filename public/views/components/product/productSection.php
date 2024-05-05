<?php namespace App;
/** @var string $id */
/** @var string $title */
/** @var string $body */
?>

<section class="productSection" id="<?= $id ?>">
  <div class="productSectionContainer">
    <h2 class="productSectionTitle"><?= $title ?></h2>
    <div class="productSectionBody">
      <?= $body ?>
    </div>
  </div>
</section>


