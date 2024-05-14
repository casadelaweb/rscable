<?php namespace App;
/** @var string $sectionTitle */
/** @var string $sectionButtonTitle */
/** @var string $sectionButtonUrl */
/** @var array $categories */
?>

<section class="sectionCategories">
  <div class="sectionCategoriesContainer">
    <div class="sectionCategoriesHeader">
      <h2 class="sectionCategoriesTitle"><?= $sectionTitle ?></h2>
      <a href="<?= $sectionButtonUrl ?>" class="sectionCategoriesButton">
        <?= $sectionButtonTitle ?>
      </a>
    </div>
    <div class="sectionCategoriesLayout">
      <?php foreach ($categories as $category):
        $title = $category['title'];
        $url = $category['url'];
        $imgUrl = $category['imgUrl'];
        ?>
        <article class="sectionCategoriesCard">
          <h3 class="sectionCategoriesCardTitle">
            <a href="<?= $url ?>"> <?= $title ?> </a>
          </h3>
          <a href="<?= $url ?>" class="sectionCategoriesCardImg">
            <img loading="lazy" src="<?= $imgUrl ?>" alt="<?= $title ?>">
          </a>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>
