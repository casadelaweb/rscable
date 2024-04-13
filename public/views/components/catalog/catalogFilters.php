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
          <button class="catalog-filter-button" title="Открыть фильтр" type="button"><span
            class="iconfont icon-arrow-down"></span>
          </button>
        </div>
        <span class="catalog-filter-selected"></span>
      </div>
      <div class="catalog-filter-body">
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"> <span>Платья</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Нарядная одежда</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Блузы и рубашки</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Брюки и юбки</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Верхняя одежда</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Джемперы и кардиганы</span> </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Костюмы и жакеты</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Футболки и топы</span>
        </label>
        <label class="catalog-filter-label">
          <input name="category" type="checkbox"><span>Аксессуары</span> </label>
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
          <input name="sorting" type="radio" value="newest"> <span> По новизне </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="popular"> <span> По популярности </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="cheapest"> <span> По возрастанию цены </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="expensive"> <span> По убыванию цены </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sorting" type="radio" value="discount"> <span> Товары по скидке </span>
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
          <input name="sizes" type="checkbox" value="XS"> <span> XS </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="S"> <span> S </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="M"> <span> M </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="L"> <span> L </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="XL"> <span> XL </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="XXL"> <span> XXL </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="3XL"> <span> 3XL </span>
        </label>
        <label class="catalog-filter-label">
          <input name="sizes" type="checkbox" value="4XL"> <span> 4XL </span>
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
          от <span id="span-price-min"></span> ₽
          до <span id="span-price-max"></span> ₽
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
          <span> Черный </span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Бежевый и золотой">
          <span> Бежевый и золотой </span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Зеленый и изумрудный">
          <span> Зеленый и изумрудный </span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Красный и бордовый">
          <span>Красный и бордовый </span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Оливковый и хаки">
          <span> Оливковый и хаки </span>
        </label>
        <label class="catalog-filter-label">
          <input name="color" type="checkbox" value="Коричневый и шоколадный">
          <span> Коричневый и шоколадный </span>
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
