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

<form class="catalog-filters" data-catalog="filters" data-modal="catalog-filters">
  <!-- кнопки применить и сбросить ссылаются на эти поля -->
  <input id="catalog-reset" hidden type="reset">
  <input id="catalog-submit" hidden type="submit">

  <!-- только для мобильной версии -->
  <div class="catalog-filters-header">
    <span>Фильтры</span>
    <button class="catalog-filters-close" data-modal-close title="Закрыть окно" type="button">
      <span class="iconfont icon-close"></span>
    </button>
  </div>

  <div class="catalog-filters-body">
    <div class="catalog-filter _category">
      <div class="catalog-filter-summary">
        <div class="catalog-filter-summary-content">
          <span>Категории</span>
          <button class="catalog-filter-button" title="Открыть фильтр" type="button">
            <span
              class="iconfont icon-arrow-down"></span>
          </button>
        </div>
        <span class="catalog-filter-selected"></span>
      </div>
      <div class="catalog-filter-body">
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Платья</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Нарядная одежда</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Блузы и рубашки</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Брюки и юбки</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Верхняя одежда</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Джемперы и кардиганы</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Костюмы и жакеты</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Футболки и топы</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox">
          <span>Аксессуары</span>
        </label>
        <label class="catalog-filters-submit" for="catalog-submit">
          <span>Применить</span>
        </label>
      </div>
    </div>
    <div class="catalog-filter _sorting">
      <div class="catalog-filter-summary">
        <div class="catalog-filter-summary-content">
          <span>Сортировать</span>
          <button class="catalog-filter-button" title="Открыть фильтр" type="button">
            <span class="iconfont icon-arrow-down"></span>
          </button>
        </div>
        <span class="catalog-filter-selected"></span>
      </div>
      <div class="catalog-filter-body">
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="newest">
          <span> По новизне</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="popular">
          <span> По популярности</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="cheapest">
          <span> По возрастанию цены</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="expensive">
          <span> По убыванию цены</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="discount">
          <span> Товары по скидке</span>
        </label>
        <label class="catalog-filters-submit" for="catalog-submit">
          <span>Применить</span>
        </label>
      </div>
    </div>
    <div class="catalog-filter">
      <div class="catalog-filter-summary">
        <div class="catalog-filter-summary-content">
          <span>Размер</span>
          <button class="catalog-filter-button" title="Открыть фильтр" type="button">
            <span class="iconfont icon-arrow-down"></span>
          </button>
        </div>
        <span class="catalog-filter-selected"></span>
      </div>
      <div class="catalog-filter-body">
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="XS">
          <span> XS</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="S">
          <span> S</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="M">
          <span> M</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="L">
          <span> L</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="XL">
          <span> XL</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="XXL">
          <span> XXL</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="3XL">
          <span> 3XL</span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="4XL">
          <span> 4XL</span>
        </label>
        <label class="catalog-filters-submit" for="catalog-submit">
          <span>Применить</span>
        </label>
      </div>
    </div>
    <div class="catalog-filter">
      <div class="catalog-filter-summary">
        <div class="catalog-filter-summary-content">
          <span>Цена</span>
          <button class="catalog-filter-button" title="Открыть фильтр" type="button">
            <span class="iconfont icon-arrow-down"></span>
          </button>
        </div>
        <div class="catalog-filter-selected" data-select="no-overwrite">
          от
          <span id="span-price-min"></span>
          ₽
          до
          <span id="span-price-max"></span>
          ₽
        </div>
      </div>
      <div class="catalog-filter-body">
        <div class="select-prices">
          <input id="input-price-min" class="select-input" name="price_min" type="text">
          <input id="input-price-max" class="select-input" name="price_max" type="text">
        </div>
        <div data-catalog-prices
             data-input-max="#input-price-max"
             data-input-min="#input-price-min"
             data-max="12999"
             data-min="199"
             data-span-max="#span-price-max"
             data-span-min="#span-price-min"></div>
        <label class="catalog-filters-submit" for="catalog-submit">
          <span>Применить</span>
        </label>
      </div>
    </div>
    <div class="catalog-filter">
      <div class="catalog-filter-summary">
        <div class="catalog-filter-summary-content">
          <span>Цвет</span>
          <button class="catalog-filter-button" title="Открыть фильтр" type="button">
            <span class="iconfont icon-arrow-down"></span>
          </button>
        </div>
        <span class="catalog-filter-selected"></span>
      </div>
      <div class="catalog-filter-body">
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Белый и золотой">
          <span> Белый и золотой</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Белый и молочный">
          <span> Белый и молочный</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Черный">
          <span> Черный</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Бежевый и золотой">
          <span> Бежевый и золотой</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Зеленый и изумрудный">
          <span> Зеленый и изумрудный</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Красный и бордовый">
          <span>Красный и бордовый</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Оливковый и хаки">
          <span> Оливковый и хаки</span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Коричневый и шоколадный">
          <span> Коричневый и шоколадный</span>
        </label>
        <label class="catalog-filters-submit" for="catalog-submit">
          <span>Применить</span>
        </label>
      </div>
    </div>
  </div>

  <!-- только для мобильной версии -->
  <div class="catalog-filters-footer">
    <label class="catalog-filters-reset" for="catalog-reset">
      <span>Сбросить</span>
    </label>
    <label class="catalog-filters-submit" for="catalog-submit">
      <span>Применить</span>
    </label>
  </div>
</form>


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

