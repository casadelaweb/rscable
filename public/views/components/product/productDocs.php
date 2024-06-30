<?php namespace App;
/** @var string $title */
/** @var string $description */
/** @var array $docs */ ?>

<section class="productDocs" id="certificates">
  <div class="productDocsContainer">
    <h2 class="productDocsTitle"><?= $title ?></h2>
    <div class="productDocsDescription">
      <?= $description ?>
    </div>
    <div class="productDocsLayout">
      <?php foreach ($docs as $doc) :
        $imgUrl = $doc['imgUrl'];
        $title = $doc['title']; ?>
        <a href="<?= $imgUrl ?>" data-fancybox="product-certificates" data-caption="<?= $title; ?>"
           title="Открыть в галерее" aria-label="Открыть в галерее" class="productDoc">
          <span class="productDocImg">
            <span class="productDocIcon">
              <span class="iconfont icon-zoom-in"></span>
            </span>
            <img src="<?= $imgUrl ?>" alt="img" loading="lazy">
          </span>
          <span><?= $title ?></span>
        </a>
      <? endforeach; ?>
    </div>
  </div>
</section>
