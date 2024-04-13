<?php namespace App;
/** @var string $url */
/** @var array $images */
?>
<a class="banner" href="<?= $url ?>">
  <picture>
    <?php foreach ($images['sources'] as $img):
      $media = $img['media'];
      $url = $img['url']; ?>
      <source media="<?= $media ?>" srcset="<?= $url ?>">
    <?php endforeach; ?>
    <img alt="img" class="banner-img" loading="lazy"
         src="<?= $images['image']['url'] ?>">
  </picture>
</a>
