<?php namespace App;
/** @var string $title */
/** @var string $date */
/** @var string $body */
/** @var string $url */
?>
<article class="review">
  <h2 class="review-title">
    <?= $title ?>
  </h2>
  <div class="review-date">
    <?= $date ?>
  </div>
  <div class="review-body">
    <?= $body ?>
  </div>
  <a class="review-button" href="<?= $url ?>" title="Читать подробнее" target="_blank">
    Читать подробнее
  </a>
</article>
