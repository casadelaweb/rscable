<?php namespace App;
global $cityCurrent;
global $citiesAll;
global $citiesPopular;
?>

<div data-modal="region" class="modalRegion">
  <button data-modal-close type="button" class="modalRegionClose">
    <span class="iconfont icon-close"></span>
  </button>
  <div class="modalRegionTop">
    <h2 class="modalRegionTitle">Выберите город</h2>
    <div class="modalRegionField">
      <button class="modalRegionFieldButton" type="button">
        <span class="iconfont icon-search"></span>
      </button>
      <input class="modalRegionFieldInput" type="text" placeholder="Введите название города"
             autocomplete="off">
      <button class="modalRegionFieldReset" type="button">
        <span class="iconfont icon-close"></span>
      </button>
      <div class="modalRegionFieldResults">
        <?php foreach ($citiesAll as $city) : ?>
          <button class="modalRegionFieldResult" type="button">
            <?= $city ?>
          </button>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="modalRegionCities">
      <?php foreach ($citiesPopular as $city):
        $currentCSSClass = $city == $cityCurrent ? '_current' : '';
        ?>
        <button class="modalRegionSuggestion <?= $currentCSSClass ?>" type="button">
          <?= $city ?>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
  <div class="modalRegionBody">
    <div class="modalRegionCities _column">
      <?php foreach ($citiesAll as $city):
        $currentCSSClass = $city == $cityCurrent ? '_current' : '';
        ?>
        <button class="modalRegionCity <?= $currentCSSClass ?>" type="button">
          <?= $city ?>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<div class="modalRegionOverlay" data-modal-overlay="region"></div>
