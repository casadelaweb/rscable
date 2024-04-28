<?php namespace App;
global $page;
global $fakeProducts;


$suggestions = [
  ['title' => 'Для электропроводки',
    'url' => '/catalog/'],
  ['title' => 'Силовой',
    'url' => '/catalog/'],
  ['title' => 'Для удлинителей и подключения электроприборов',
    'url' => '/catalog/'],
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
  ['title' => 'Для акустических систем',
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
  ['title' => 'Для обмоток трансформаторов, реле, дросселей и двигателей',
    'url' => '/catalog/'],
];
?>

<?php Render::component('breadcrumbs') ?>

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
      <div class="catalogAside">
        <form class="catalogFilters" id="form-catalog-filters">
          <fieldset data-details="details" class="catalogFilter">
            <div data-details="summary" class="catalogFilterSummary">
              <span>Холодостойкий ХЛ</span>
              <button type="button" data-details="button" class="catalogFilterButton">
                <span class="iconfont icon-arrow-down"></span>
              </button>
            </div>
            <div data-details="body" class="catalogFilterBody">
              <label class="catalogFilterLabel">
                <input class="catalogFilterInput" type="radio" name="test">
                <span class="catalogFilterTitle">Да</span>
              </label>
              <label class="catalogFilterLabel">
                <input class="catalogFilterInput" type="radio" name="test">
                <span class="catalogFilterTitle">Нет</span>
              </label>
            </div>
          </fieldset>
          <fieldset data-details="details" class="catalogFilter">
            <div data-details="summary" class="catalogFilterSummary">
              <span>Огнестойкий FR</span>
              <button type="button" data-details="button" class="catalogFilterButton">
                <span class="iconfont icon-arrow-down"></span>
              </button>
            </div>
            <div data-details="body" class="catalogFilterBody">
              <label class="catalogFilterLabel">
                <input class="catalogFilterInput" type="radio" name="test">
                <span class="catalogFilterTitle">Да</span>
              </label>
              <label class="catalogFilterLabel">
                <input class="catalogFilterInput" type="radio" name="test">
                <span class="catalogFilterTitle">Нет</span>
              </label>
            </div>
          </fieldset>
          <fieldset data-details="details" class="catalogFilter">
            <div data-details="summary" class="catalogFilterSummary">
              <span>Материал жилы</span>
              <button type="button" data-details="button" class="catalogFilterButton">
                <span class="iconfont icon-arrow-down"></span>
              </button>
            </div>
            <div data-details="body" class="catalogFilterBody">
              <label class="catalogFilterLabel">
                <input class="catalogFilterInput" type="checkbox" name="test">
                <span class="catalogFilterTitle">Алюминий</span>
              </label>
              <label class="catalogFilterLabel">
                <input class="catalogFilterInput" type="checkbox" name="test">
                <span class="catalogFilterTitle">Медь</span>
              </label>
            </div>
          </fieldset>
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
            <button type="button" data-modal-open="catalog-filters-feedback"
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
          <div class="catalogViewButtons">
            <button type="button" class="catalogViewButton">
              <span class="iconfont icon-bell"></span>
            </button>
          </div>
        </div>
        <div class="catalogProducts">
          <?php foreach ($fakeProducts as $product):
            Render::component('productCard', $product);
          endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</div>

