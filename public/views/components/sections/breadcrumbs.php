<?php namespace App;
global $page;

function renderParent(Page $p): void {
  global $page;
  $active = $page->url === $p->url ? '_active' : '';
  $parent = $p->parent;
  if ($parent) {
    renderParent($parent);
  }

  echo "<a class='breadcrumb $active' href='$p->url' title='$p->title'>
        $p->title
      </a>";
}

?>

<div class="breadcrumbs">
  <div class="breadcrumbsContainer">
    <?php renderParent($page) ?>
  </div>
</div>
