<?php namespace App;
/** @var string $author */
/** @var string $date */
/** @var string $duration */
/** @var string $positives */
/** @var string $negatives */
/** @var int|float $rating */
/** @var string $comment */
?>

<article class="productReview">
  <div class="productReviewRating">
    <span class="productReviewRatingStars">
      <span class="productReviewRatingTop"
            style="width: calc(<?= $rating ?> / 5 * 100%)">
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
      </span>
      <span class="productReviewRatingBottom">
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
      </span>
    </span>
  </div>
  <h3 class="productReviewAuthor">
    <?= $author ?>
  </h3>
  <div class="productReviewSubtitle">
    Срок использования:
  </div>
  <div class="productReviewDuration">
    <?= $duration ?>
  </div>
  <div class="productReviewSubtitle">
    Достоинства:
  </div>
  <div class="productReviewPositives">
    <?= $positives ?>
  </div>
  <div class="productReviewSubtitle">
    Недостатки:
  </div>
  <div class="productReviewNegatives">
    <?= $negatives ?>
  </div>
  <div class="productReviewSubtitle">
    Комментарий:
  </div>
  <div class="productReviewComment">
    <?= $comment ?>
  </div>
  <div class="productReviewFooter">
    <div class="productReviewButtons">
      <button type="button" class="productReviewLike">
        <span class="iconfont icon-like"></span>
        <span>(4)</span>
      </button>
      <button type="button" class="productReviewDislike">
        <span class="iconfont icon-dislike"></span>
        <span>(0)</span>
      </button>
    </div>
    <div class="productReviewDate"><?= $date ?></div>
  </div>
</article>
<div class="productReviewActions">
  <button type="button" class="productReviewToggle">
    <span class="_open">Показать ответы (1)</span>
    <span class="_close">Свернуть ответы (1)</span>
  </button>
  <button type="button" class="productReviewReply">
    Ответить
  </button>
</div>
