<?php namespace App;
global $fakeProducts
?>

<div class="modalSearch" data-modal="search">
  <div class="modalSearchContainer">
    <div class="modalSearchMain">
      <div class="modalSearchMainLoader"></div>
      <div class="modalSearchHeader">
        <h2 class="modalSearchHeaderTitle"> Вам могут понравится </h2>
        <button type="button" data-modal-close title="Закрыть" aria-label="Закрыть"
                class="modalSearchHeaderButton">
          Закрыть
        </button>
      </div>
      <div class="modalSearchResults">
        <?php
        foreach ($fakeProducts as $product):
          Render::component('catalog/productCard', $product);
        endforeach; ?>
      </div>
    </div>
    <div class="modalSearchAside">
      <div class="modalSearchMobile">
        <button type="button" data-modal-close title="Закрыть" aria-label="Закрыть"
                class="modalSearchHeaderButton">
          Закрыть
        </button>
        <div class="modalSearchField" data-field="field">
          <div class="modalSearchFieldIcon">
            <span class="iconfont icon-search"></span>
          </div>

          <input type="text"
                 class="modalSearchFieldInput"
                 data-modal-open="search"
                 data-field="input"
                 placeholder="Категория, модель или артикул">

          <button type="button" data-field="clear" class="modalSearchFieldClear">
            <span class="iconfont icon-close"></span>
          </button>
        </div>
      </div>
      <div class="modalSearchHints">
        <?php $hints = [
          'Гибкий', 'Для подводной прокладки', 'Огнестойкий', 'Экранирован',
          'Герметичный', 'Для наружной прокладки',
        ];
        foreach ($hints as $hint): ?>
          <button type="button" class="modalSearchHint" data-hint="<?= $hint ?>">
            <?= $hint ?>
          </button>
        <?php endforeach; ?>
      </div>
      <div class="modalSearchQuickLinks">
        <div class="modalSearchQuickLinksTitle">Часто ищут</div>
        <div class="modalSearchQuickLinksList">
          <a class="modalSearchQuickLink" href="/catalog/" title="Перейти в каталог">
            <span>Кабели силовые</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="modalSearchQuickLink" href="/catalog/" title="Перейти в каталог">
            <span>Кабели с изоляцией из ПВХ</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="modalSearchQuickLink" href="/catalog/" title="Перейти в каталог">
            <span>Кабели универсальные</span>
            <span class="iconfont icon-search"></span>
          </a>
          <a class="modalSearchQuickLink" href="/catalog/" title="Перейти в каталог">
            <span>Кабели автомобильные</span>
            <span class="iconfont icon-search"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modalSearchOverlay" data-modal-overlay="search"></div>

<script>
  /** Это пример js кода для активации индикатора загрузки во время ввода в поле поиска */

  document.addEventListener('DOMContentLoaded', () => {
    const body = document.body
    const inputModal = body.querySelector('.modalSearchFieldInput')
    const inputHeader = body.querySelector('.headerSearchInput')
    const loader = body.querySelector('.modalSearchMainLoader')

    function handleInput(event) {
      /** простейший способ связать значение двух полей ввода */
      const currentInput = event.target
      /** получаем значение того поля в котором сработало событие input */
      const currentInputValue = currentInput.value.trim()
      /** присваиваем значение всем полям принудительно */
      inputHeader.value = currentInputValue
      inputModal.value = currentInputValue


      /** показываем индикатор загрузки */
      loader.classList.add('_active')
      /** Имитируем ответ от сервера */
      setTimeout(() => {
        /** Делаем то что нам нужно. Например, подставляем html от сервера с новыми карточками
         * и обновляем заголовок в модальном окне поиска. */
        const title = body.querySelector('.modalSearchHeaderTitle')
        title.textContent = 'Вот что мы нашли для Вас:'
        // const resultsContainer = body.querySelector('.modalSearchResults')

        /** скрываем loader */
        loader.classList.remove('_active')
      }, 1000)
    }

    inputModal.addEventListener('input', handleInput)
    inputHeader.addEventListener('input', handleInput)

    /** пример обработки поисковых подсказок */
    document.addEventListener('click', (event) => {

      /** если нажали на элемент подсказки */
      if (event.target.closest('[data-hint]')) {
        /** получаем элемент подсказки */
        const button = event.target.closest('[data-hint]')
        /** получаем значение подсказке */
        const value = button.getAttribute('data-hint').trim()

        /** подставляем в одно из полей ввода */
        inputModal.value = value
        /** запускаем нативное событие, что автоматически вызовет handleInput */
        inputModal.dispatchEvent(new Event('input'))
      }
    })

  }, {
    passive: true,
    once: true,
  })
</script>
