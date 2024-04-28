<?php namespace App; ?>
<form class="formFeedback" data-form="form">
  <h2 class="formFeedbackTitle">
    Получить доступ к персональным ценам!
  </h2>
  <div class="formFeedbackNote">
    Оптовая компания "РОСКАБ" специализируется на поставках с минимальным заказом в 100 000
    рублей.
  </div>
  <div class="formFeedbackBody">
    <label class="formFeedbackField" data-form="field">
      <span class="formFeedbackFieldLabel">Контактное лицо:</span>
      <input type="text" class="formFeedbackFieldInput" placeholder="Имя Фамилия"
             data-validate="human_name" required>
      <span class="formFeedbackFieldError" data-form="error">
        Укажите корректные имя и фамилию
      </span>
    </label>
    <label class="formFeedbackField" data-form="field">
      <span class="formFeedbackFieldLabel">ИНН:</span>
      <input type="text" class="formFeedbackFieldInput" placeholder="ИНН"
             data-validate="inn" required>
      <span class="formFeedbackFieldError" data-form="error">
        ИНН должен содержать 10 или 12 арабских цифр
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
    <button class="formFeedbackSubmit" type="submit" data-form="submit">
      Отправить заявку
    </button>
  </div>
  <label class="formFeedbackNote">
    <input type="checkbox" required>
    Отправляя данную форму вы соглашаетесь с обработкой персональных данных и
    <a href="/privacy-policy/">
      политикой конфиденциальности
    </a>
  </label>
</form>
