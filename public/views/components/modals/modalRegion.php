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
    <div class="modalRegionField" data-field="field">
      <div class="modalRegionFieldIcon">
        <span class="iconfont icon-search"></span>
      </div>
      <input class="modalRegionFieldInput" type="text" placeholder="Введите название города"
             autocomplete="off" data-field="input">
      <button class="modalRegionFieldClear" type="button" data-field="clear">
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
        $currentCSSClass = $city == $cityCurrent ? '_current' : ''; ?>
        <button class="modalRegionCity <?= $currentCSSClass ?>" type="button">
          <?= $city ?>
        </button>
      <?php endforeach; ?>
    </div>
  </div>
</div>
<div class="modalRegionOverlay" data-modal-overlay="region"></div>

<script>
  /** Пример поиска нужного города в списке городов */
  document.addEventListener('DOMContentLoaded', () => {
    const body = document.body

    const field = body.querySelector('.modalRegionField')
    const input = field.querySelector('.modalRegionFieldInput')
    const results = field.querySelector('.modalRegionFieldResults')

    function handleInput() {
      const value = input.value.trim().toLowerCase()
      const items = Array.from(results.querySelectorAll('.modalRegionFieldResult'))

      items.forEach((item) => {
        if (item.textContent.trim().toLowerCase().includes(value)) {
          item.classList.add('_active')
        } else {
          item.classList.remove('_active')
        }
      })
    }

    function handleFocus() {
      results.classList.add('_active')
      handleInput()
    }

    function handleBlur() {
      /** добавляем небольшую задержку для скрытия списка городов
       * чтобы событие клика по городу работало корректно */
      setTimeout(() => results.classList.remove('_active'), 100)
    }

    input.addEventListener('focus', handleFocus)
    input.addEventListener('input', handleInput)
    input.addEventListener('blur', handleBlur)

    document.addEventListener('click', (event) => {
      /** если нажали на искомый город в списке */
      if (event.target.closest('.modalRegionFieldResult')) {
        const item = event.target.closest('.modalRegionFieldResult')
        /** подставляем значение в поле ввода */
        input.value = item.textContent.trim()
        results.classList.remove('_active')
      }
    })
  }, {
    passive: true,
    once: true,
  })
</script>
