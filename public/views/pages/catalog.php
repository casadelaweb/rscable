<?php namespace App;
global $page;
global $fakeProducts;

$suggestions = [
  ['title' => 'Установочный',
    'url' => '/catalog/'],
  ['title' => 'Монтажный',
    'url' => '/catalog/'],
  ['title' => 'Телефонный',
    'url' => '/catalog/'],
  ['title' => 'Сигнальный и передачи данных',
    'url' => '/catalog/'],
  ['title' => 'Для интернета (витая пара)',
    'url' => '/catalog/'],
  ['title' => 'Для автомобилей',
    'url' => '/catalog/'],
  ['title' => 'Для подогрева труб и крыш',
    'url' => '/catalog/'],
  ['title' => 'Для телевидения и антенн',
    'url' => '/catalog/'],
  ['title' => 'Для охранно-пожарной сигнализации',
    'url' => '/catalog/'],
  ['title' => 'Для подключения систем контроля и управления',
    'url' => '/catalog/'],
  ['title' => 'Для видеонаблюдения и домофонов',
    'url' => '/catalog/'],
  ['title' => 'С несущей жилой',
    'url' => '/catalog/'],
  ['title' => 'Для солнечных панелей',
    'url' => '/catalog/'],
  ['title' => 'Кабель водопогружной (КВ)',
    'url' => '/catalog/'],
];
?>

<?php Render::component('sections/breadcrumbs') ?>

<div class="catalog">
  <div class="catalogContainer">
    <div class="catalogHeader">
      <h1 class="catalogTitle"><?= $page->title ?></h1>
      <div class="catalogSuggestions">
        <?php foreach ($suggestions as $suggestion):
          $title = $suggestion['title'];
          $url = $suggestion['url']; ?>
          <a href="<?= $url ?>" class="catalogSuggestion">
            <?= $title ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="catalogLayout">
      <div class="catalogAside" data-modal="catalog-aside">
        <form class="catalogFilters" id="form-catalog-filters">
          <div class="catalogFiltersHeader">
            <span>Фильтры</span>
            <button type="button" data-modal-close class="catalogFiltersClose">
              <span class="iconfont icon-close"></span>
            </button>
          </div>

          <div class="catalogFiltersBody">
            <?php Render::component('catalog/catalogFilter', [
              'filterTitle' => 'Холодостойкий',
              'inputType' => 'radio',
              'inputName' => 'is_cold_resisted',
              'options' => ['Да', 'Нет',],
            ]) ?>

            <?php Render::component('catalog/catalogFilterRange', [
              'filterTitle' => 'Стоимость',
            ]) ?>
          </div>

          <div class="catalogFiltersButtons">
            <button class="catalogFiltersSubmit" type="submit">
              Применить
            </button>
            <button class="catalogFiltersReset" type="reset">
              Сбросить
            </button>
          </div>
          <div class="catalogFiltersFeedback">
            <div class="catalogFiltersFeedbackTitle">Нет нужного фильтра?</div>
            <button type="button" data-modal-open="catalogFilters-feedback"
                    class="catalogFiltersFeedbackButton">
              <span class="iconfont icon-bubble"></span>
              <span>Оставьте обратную связь</span>
            </button>
          </div>
        </form>
      </div>
      <div class="catalogMain">
        <div class="catalogNav">
          <div class="catalogSortButtons">
            Сортировать по:
            <button class="catalogSortButton" type="button">
              Популярности
              <span class="iconfont icon-ascending"></span>
              <span class="iconfont icon-descending"></span>
            </button>
            <button class="catalogSortButton" type="button">
              Цене
              <span class="iconfont icon-ascending"></span>
              <span class="iconfont icon-descending"></span>
            </button>
            <button class="catalogSortButton" type="button">
              Отзывам
              <span class="iconfont icon-ascending"></span>
              <span class="iconfont icon-descending"></span>
            </button>
            <button class="catalogSortButton" type="button">
              Рейтингу
              <span class="iconfont icon-ascending"></span>
              <span class="iconfont icon-descending"></span>
            </button>
          </div>
          <button type="button" data-modal-open="catalog-aside" class="test">
            <span class="iconfont icon-filters"></span>
          </button>
          <div class="catalogViewButtons">
            <button type="button" class="catalogViewButton">
              <span class="iconfont icon-grid"></span>
            </button>
            <button type="button" class="catalogViewButton">
              <span class="iconfont icon-row"></span>
            </button>
          </div>
        </div>
        <div class="catalogProducts">
          <?php foreach ($fakeProducts as $product):
            Render::component('catalog/productCard', $product);
          endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="catalogAsideOverlay" data-modal-overlay="catalog-aside"></div>

