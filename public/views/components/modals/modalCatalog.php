<?php namespace App;
global $categories;
global $subCategories
?>

<div data-modal="catalog" class="modalCatalog">
  <div class="modalCatalogContainer">
    <div class="modalCatalogAside">
      <?php $index = 0;
      foreach ($categories as $category):
        $title = $category['title'];
        $url = $category['url'];
        /** По умолчанию первый элемент активен, остальные скрыты */
        $additionalCSS = $index === 0 ? '_active' : ''; ?>
        <a href="<?= $url ?>" class="modalCatalogCategory <?= $additionalCSS ?>">
          <?= $title ?>
          <span class="iconfont icon-arrow-right"></span>
        </a>
        <?php $index++;
      endforeach;
      unset($index); ?>
    </div>
    <div class="modalCatalogBody">
      <?php $index = 0;
      foreach ($subCategories as $groups):
        /** По умолчанию первый элемент активен, остальные скрыты */
        $additionalCSS = $index === 0 ? '_active' : ''; ?>
        <div class="modalCatalogProducts <?= $additionalCSS ?>">
          <?php foreach ($groups as $group):
            $category = $group['category'];
            $categoryTitle = $category['title'];
            $categoryUrl = $category['url'];
            $items = $group['items'] ?? []; ?>
            <div class="modalCatalogProductsGroup">
              <a href="<?= $categoryUrl ?>" class="modalCatalogProductsGroupTitle">
                <?= $categoryTitle ?>
              </a>
              <div class="modalCatalogProductsGroupList">
                <?php foreach ($items as $item):
                  $title = $item['title'];
                  $url = $item['url']; ?>
                  <a href="<?= $url ?>" class="modalCatalogProduct">
                    <?= $title ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php $index++;
      endforeach;
      unset($index); ?>
    </div>
  </div>
</div>
<div class="modalCatalogOverlay" data-modal-overlay="catalog"></div>
