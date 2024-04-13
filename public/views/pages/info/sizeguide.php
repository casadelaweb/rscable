<?php namespace App; ?>

<?php Render::component('breadcrumbs') ?>

<div class="info">
  <div class="info-container">
    <?php Render::component('info/infoNav') ?>

    <div class="info-main">
      <h1 class="appointment-title">ТАБЛИЦА РАЗМЕРОВ</h1>
      <h2 class="table-label">
        Замеры указаны в сантиметрах
      </h2>

      <?php Render::component('sizeguideTable') ?>
    </div>
  </div>
</div>
