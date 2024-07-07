<?php namespace App; ?>
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
      'filterType' => 'row',
      'hasSearch' => false,
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
      'hasSearch' => true,
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
      'filterType' => 'row',
      'hasSearch' => false,
      'options' => ['Круглый', 'Плоский',],
    ]) ?>
    <?php Render::component('catalog/catalogFilter', [
      'filterTitle' => 'Холодостойкий',
      'inputType' => 'radio',
      'inputName' => 'is_cold_proof',
      'filterType' => 'row',
      'hasSearch' => false,
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
      'filterType' => 'row',
      'hasSearch' => false,
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
      'filterType' => 'row',
      'hasSearch' => false,
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
<script>
  /** пример простого скрипта для поиска вариантов в компоненте catalogFilter */
  document.addEventListener('DOMContentLoaded', () => {

    /** простая функция для поиска подстроки в строке */
    function hasMatch(haystack, needle) {
      return haystack.trim().toLowerCase().includes(needle.trim().toLowerCase())
    }

    const searchElements = document.body.querySelectorAll('.catalogFilterSearch')
    searchElements.forEach((searchElement) => {
      const filter = searchElement.closest('.catalogFilter')
      const searchInput = searchElement.querySelector('.catalogFilterSearchInput')
      const options = filter.querySelectorAll('.catalogFilterLabel')

      searchInput.addEventListener('input', (event) => {
        /** получаем поисковый запрос */
        const value = searchInput.value.trim().toLowerCase()

        options.forEach((option) => {
          const input = option.querySelector('.catalogFilterInput')
          const title = option.querySelector('.catalogFilterTitle')

          if (value.length === 0) {
            /** если поисковый запрос пустой, показываем все */
            input.disabled = false
            option.style = ''
          } else if (hasMatch(title.textContent, value) || hasMatch(input.value, value)) {
            /** если запрос не пустой и есть совпадение */
            input.disabled = false
            option.style = ''
          } else {
            /** если запрос не пустой и нет совпадений */
            input.disabled = true
            option.style = 'display: none;'
          }
        })
      }, {
        passive: true,
      })
    })
  }, {
    passive: true,
    once: true,
  })
</script>
