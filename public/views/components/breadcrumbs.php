<?php namespace App;
global $page;

function renderParent(Page $p): void {
  $parent = $p->parent;
  echo "<a class='breadcrumb' href='$p->url' title='$p->title'>
        $p->title
      </a>";
  if ($parent) renderParent($parent);
}

?>

<div class="breadcrumbs">
  <div class="breadcrumbs-container">
    <?php renderParent($page) ?>
    <!--<a class="breadcrumb" href="/">Главная</a>
    <?php if ($page->parent) : ?>
      <a class="breadcrumb" href="<?= $page->parent->url ?>" title="<?= $page->title ?>">
        <?= $page->parent->title ?>
      </a>
    <?php endif; ?>
    <a class="breadcrumb active" href="<?= $page->url ?>" title="<?= $page->title ?>">
      <?= $page->title ?>
    </a>-->
  </div>
</div>
