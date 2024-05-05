<?php namespace App;
/** @var array $certificates */ ?>

<section class="productCertificates" id="certificates">
  <div class="productCertificatesContainer">
    <h2 class="productCertificatesTitle"> Сертификаты </h2>
    <div class="productCertificatesLayout">
      <?php foreach ($certificates as $certificate) :
        $imgUrl = $certificate['imgUrl'];
        $title = $certificate['title']; ?>
        <a href="<?= $imgUrl ?>" data-fancybox="product-certificates" data-caption="<?= $title; ?>"
           title="Открыть в галерее" aria-label="Открыть в галерее">
          <img src="<?= $imgUrl ?>" alt="img" loading="lazy">
          <span><?= $title ?></span>
        </a>
      <? endforeach; ?>
    </div>
  </div>
</section>
