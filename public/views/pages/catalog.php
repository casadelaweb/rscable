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
$subcategories = [
  [
    'title' => 'Подкатегория кабелей',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-1.png',
  ], [
    'title' => 'Дочерняя категория кабелей',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-2.png',
  ], [
    'title' => 'Сварочные кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-3.png',
  ], [
    'title' => 'Монтажные кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-4.png',
  ], [
    'title' => 'Сварочные кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-3.png',
  ], [
    'title' => 'Автомобильные кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-1.png',
  ], [
    'title' => 'Силовые кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-5.png',
  ], [
    'title' => 'Судовые кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-6.png',
  ], [
    'title' => 'Информационные кабели',
    'url' => '/catalog/',
    'imgUrl' => '/assets/img/cables/cable-2.png',
  ],
];
?>

<?php Render::component('sections/breadcrumbs') ?>

<?php Render::component('catalog/catalogHero', [
  'title' => $page->title,
  'subcategories' => $subcategories,
  'suggestions' => $suggestions,
]) ?>
<div class="catalogContainer">
  <div class="catalogLayout">
    <div class="catalogAside" data-modal="catalog-aside">
      <form class="catalogFilters" id="form-catalog-filters">
        <div class="catalogFiltersHeader">
          <div class="catalogFiltersHeaderRow">
            <span>Фильтры</span>
            <button type="button" data-modal-close class="catalogFiltersClose">
              <span class="iconfont icon-close"></span>
            </button>
          </div>
          <!--          <div class="catalogFiltersHeaderRow">-->
          <!--            <button type="button">-->
          <!--              Раскрыть все-->
          <!--            </button>-->
          <!--            <button type="button">-->
          <!--              Свернуть все-->
          <!--            </button>-->
          <!--          </div>-->
        </div>
        <div class="catalogFiltersBody">
          <?php Render::component('catalog/catalogFilter', [
            'filterTitle' => 'Наличие',
            'inputType' => 'checkbox',
            'inputName' => 'stock',
            'filterType' => 'flex',
            'options' => [
              'В наличии',
              'Под заказ: сегодня',
              'Под заказ: завтра',
              'Под заказ: послезавтра',
              'Под заказ: позднее',
            ],
          ]) ?>
          <?php Render::component('catalog/catalogFilter', [
            'filterTitle' => 'Бренд',
            'filterType' => 'grid',
            'inputType' => 'checkbox',
            'inputName' => 'brand',
            'options' => [
              'Название бренда 1',
              'Название бренда 2',
              'Название бренда 3',
              'Название бренда 4',
              'Название бренда 5',
              'Название бренда 6',
              'Название бренда 7',
              'Название бренда 8',
              'Название бренда 9',
              'Название бренда 10',
              'Название бренда 11',
              'Название бренда 12',
              'Название бренда 13',
              'Название бренда 14',
              'Название бренда 15',
              'Название бренда 16',
              'Название бренда 17',
              'Название бренда 18',
              'Название бренда 19',
              'Название бренда 20',
              'Название бренда 21',
              'Название бренда 22',
              'Название бренда 23',
              'Название бренда 24',
              'Название бренда 25',
            ],
          ]) ?>
          <?php Render::component('catalog/catalogFilter', [
            'filterTitle' => 'Форма кабеля',
            'inputType' => 'radio',
            'inputName' => 'cable_form',
            'filterType' => 'flex',
            'options' => ['Круглый', 'Плоский',],
          ]) ?>
          <?php Render::component('catalog/catalogFilter', [
            'filterTitle' => 'Холодостойкий',
            'inputType' => 'radio',
            'inputName' => 'is_cold_proof',
            'filterType' => 'flex',
            'options' => ['Да', 'Нет',],
          ]) ?>
          <?php Render::component('catalog/catalogFilterRange', [
            'filterTitle' => 'Максимальная температура',
            'min' => -50,
            'max' => 50,
          ]) ?>
          <?php Render::component('catalog/catalogFilter', [
            'filterTitle' => 'Материал оболочки',
            'inputType' => 'checkbox',
            'inputName' => 'material_outside',
            'filterType' => 'flex',
            'options' => [
              'ПВХ',
              'ПВХ пластикат пониженной горючести',
              'ПВХ пластикат пониженной пожарной опасности',
              'ПВХ с пониженным давлением',
              'ПВХ с низким дымо- и газовыделением и низкой токсичностью горения',
              'Огнестойкая кремнийорганическая резина',
              'ПВХ-пластикат не поддерживающий горение с пониженным дымо- и газовыделением',
              'ПВХ-пластикат',
            ],
          ]) ?>
          <?php Render::component('catalog/catalogFilterRange', [
            'filterTitle' => 'Минимальная температура',
            'min' => -50,
            'max' => 50,
          ]) ?>
          <?php Render::component('catalog/catalogFilter', [
            'filterTitle' => 'Огнестойкий',
            'inputType' => 'radio',
            'inputName' => 'is_fire_proof',
            'filterType' => 'flex',
            'options' => ['Да', 'Нет',],
          ]) ?>
          <?php Render::component('catalog/catalogFilterRange', [
            'filterTitle' => 'Стоимость',
            'min' => 1000,
            'max' => 1000000,
          ]) ?>
        </div>

        <div class="catalogFiltersButtons">
          <!--<button type="button" class="catalogFiltersExpand">
            Развернуть все
          </button>
          <button type="button" class="catalogFiltersCollapse">
            Свернуть все
          </button>-->
          <button class="catalogFiltersSubmit" type="submit" id="catalog-filters-submit">
            Применить
          </button>
          <button class="catalogFiltersReset" type="reset">
            Сбросить
          </button>
        </div>
        <div class="catalogFiltersTooltip">
          <label for="catalog-filters-submit" class="catalogFiltersTooltipButton">
            Применить
          </label>
        </div>
      </form>
    </div>
    <div class="catalogMain">
      <div class="catalogNav">
        <div class="catalogSortButtons">
          <span class="catalogSortButtonsTitle">Сортировать по:</span>
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
        <button type="button" data-modal-open="catalog-aside" class="catalogOpenAside">
          <span class="iconfont icon-filters"></span>
        </button>
        <div class="catalogViewButtons">
          <button type="button" class="catalogViewButton" data-catalog-view="grid">
            <span class="iconfont icon-grid"></span>
          </button>
          <button type="button" class="catalogViewButton" data-catalog-view="row">
            <span class="iconfont icon-row"></span>
          </button>
        </div>
      </div>
      <div class="catalogProducts" data-catalog="products">
        <?php foreach ($fakeProducts as $product):
          Render::component('catalog/productCard', $product);
        endforeach; ?>

        <?php Render::component('catalog/catalogBanner') ?>

        <?php foreach ($fakeProducts as $product):
          Render::component('catalog/productCard', $product);
        endforeach; ?>
      </div>
      <?php Render::component('catalog/catalogPagination') ?>
    </div>
  </div>
</div>

<div class="catalogAsideOverlay" data-modal-overlay="catalog-aside"></div>

