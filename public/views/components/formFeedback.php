<section class="feedback">
  <div class="feedbackContainer">
    <!--    <picture class="feedbackBanner">-->
    <!--      <img src="https://rscable.ru/upload/iblock/8a2/8a2192486aade25538ff57a858097084.png" alt=""-->
    <!--           class="feedbackBannerImg" loading="lazy">-->
    <!--    </picture>-->
    <form class="formFeedback" data-form="form">
      <h2 class="formFeedbackTitle">
        Получить доступ к персональным ценам!
      </h2>
      <div class="formFeedbackNote">
        Оптовая компания "РОСКАБ" специализируется на поставках с минимальным заказом в 100 000
        рублей.
      </div>
      <label class="formFeedbackField" data-form="field">
        <span class="formFeedbackFieldLabel">Контактное лицо:</span>
        <input type="text" class="formFeedbackFieldInput" placeholder="Имя Фамилия"
               data-validate="human_name" required>
        <span class="formFeedbackFieldError" data-form="error">
            Укажите корректные имя и фамилию
          </span>
      </label>
      <label class="formFeedbackField" data-form="field">
        <span class="formFeedbackFieldLabel">Телефон:</span>
        <input data-mask="tel" data-validate="tel" type="text" class="formFeedbackFieldInput"
               placeholder="+7-x-xxx-xx-xx" required>
        <span class="formFeedbackFieldError" data-form="error">
            Введите номер телефона в формате +7-x-xxx-xx-xx
    </span>
      </label>
      <div class="formFeedbackNote">
        Отправляя данную форму вы соглашаетесь с обработкой персональных данных и
        <a href="/privacy-policy/">
          политикой конфиденциальности
        </a>
      </div>
      <button class="formFeedbackSubmit" type="submit" data-form="submit">
        Отправить заявку
      </button>
    </form>
  </div>
</section>
<div class="formFeedbackLoader">
  <img src="/assets/img/loading.svg" alt="loading" loading="eager">
</div>
<div class="formFeedbackResponse">
  <button class="formFeedbackResponseClose" type="button" title="Закрыть">
    <span class="iconfont icon-close"></span>
  </button>
  <div class="formFeedbackResponseTitle">
    Спасибо, мы получили вашу заявку
  </div>
  <div class="formFeedbackResponseNote">
    Наши менеджеры свяжутся с Вами в ближайшее время.
  </div>
  <button class="formFeedbackResponseButton" type="button" title="Закрыть">
    Закрыть
  </button>
</div>
<div class="formFeedbackOverlay"></div>
