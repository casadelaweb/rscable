<?php namespace App;
/** @var string $addressee */
?>

<form class="reviewReply" data-form="form">
  <button class="reviewReplyClose" type="button">
    <span class="iconfont icon-close"></span>
  </button>
  <div class="reviewReplyTitle">
    Ответ на комментарий пользователя: <?= $addressee ?>
  </div>
  <div class="reviewReplyRow">
    <label class="reviewReplyField" data-form="field">
      <span class="reviewReplyFieldLabel">
        <span>Ваше Имя</span>
        <span class="reviewReplyFieldLabelRequired">*</span>
      </span>
      <input type="text" class="reviewReplyFieldInput" placeholder="Ваше Имя"
             required
             data-validate="human_name" data-form="form-input">
      <span class="reviewReplyFieldError" data-form="error">
        Заполните это поле
      </span>
    </label>
    <label class="reviewReplyField" data-form="field">
      <span class="reviewReplyFieldLabel">
        <span>Email</span>
        <span class="reviewReplyFieldLabelRequired">*</span>
      </span>
      <input type="text" class="reviewReplyFieldInput"
             placeholder="myemail@site.com"
             required
             data-form="form-input" data-validate="email">
      <span class="reviewReplyFieldError" data-form="error">
        Укажите корректную электронную почту
      </span>
    </label>
  </div>
  <label class="reviewReplyField" data-form="field">
    <span class="reviewReplyFieldLabel">
      <span>Комментарий</span>
      <span class="reviewReplyFieldLabelRequired">*</span>
    </span>
    <textarea data-validate="comment" data-min="3" data-max="1024" type="text"
              class="reviewReplyFieldInput" required
              placeholder="Будьте вежливы по отношению к другим пользователям"></textarea>
    <span class="reviewReplyFieldCounter" data-form="counter">
      <span data-form="counter-current">0</span>
      /
      <span data-form="counter-max">1024</span>
    </span>
    <span class="reviewReplyFieldError" data-form="error">
      Не менее 3 и не более 1024 символов
    </span>
  </label>
  <label class="reviewReplyNote">
    <input type="checkbox" required>
    Отправляя данную форму вы соглашаетесь с обработкой персональных данных и
    <a href="/privacy-policy/">
      политикой конфиденциальности
    </a>
  </label>
  <div class="reviewReplyFooter">
    <button class="reviewReplySubmit" type="submit" data-form="submit">
      Отправить
    </button>
    <button class="reviewReplyCancel" type="button">
      Отменить
    </button>
  </div>
</form>
