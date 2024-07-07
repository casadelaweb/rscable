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
      <?php Render::component('catalog/catalogFilters') ?>
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

