<?php namespace App; ?>

<div class="modalReview" data-modal="review">
  <div class="modalReviewHeader">
    <h2 class="modalReviewTitle">
      Оставить отзыв
    </h2>
    <button class="modalReviewClose" data-modal-close>
      <span class="iconfont icon-close"></span>
    </button>
  </div>

  <form class="modalReviewForm" data-form="form">
    <label class="modalReviewField" data-form="field">
      <span class="modalReviewFieldLabel">
        <span>Ваше Имя</span>
        <span class="modalReviewFieldLabelRequired">*</span>
      </span>
      <input type="text" class="modalReviewFieldInput" placeholder="Ваше Имя" required
             data-validate="human_name" data-form="form-input">
      <span class="modalReviewFieldError" data-form="error">
        Заполните это поле
      </span>
    </label>
    <label class="modalReviewField" data-form="field">
      <span class="modalReviewFieldLabel">
        <span>Email</span>
        <span class="modalReviewFieldLabelRequired">*</span>
      </span>
      <input type="text" class="modalReviewFieldInput" placeholder="myemail@site.com" required
             data-form="form-input" data-validate="email">
      <span class="modalReviewFieldError" data-form="error">
        Укажите корректную электронную почту
      </span>
    </label>
    <label class="modalReviewField" data-form="field">
      <span class="modalReviewFieldLabel">
        <span>Ваша оценка</span>
        <span class="modalReviewFieldLabelRequired">*</span>
      </span>

      <span class="modalReviewFieldRating">
        <input type="text" class="modalReviewFieldInput" required name="rating"
               hidden data-validate="not_empty">

        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
        <span class="iconfont icon-star"></span>
      </span>

      <span class="modalReviewFieldError" data-form="error">
        Поставьте оценку от 1 до 5
      </span>
    </label>
    <label class="modalReviewField" data-form="field">
      <span class="modalReviewFieldLabel">
        <span>Достоинства</span>
        <span class="modalReviewFieldLabelRequired">*</span>
      </span>
      <textarea data-validate="comment" data-min="3" data-max="1024" type="text"
                class="modalReviewFieldInput"
                placeholder="Постарайтесь дать ответ, который будет полезен другим пользователям"
                required></textarea>
      <span class="modalReviewFieldCounter" data-form="counter">
        <span data-form="counter-current">0</span>
        /
        <span data-form="counter-max">1024</span>
      </span>
      <span class="modalReviewFieldError" data-form="error">
        Не менее 3 и не более 1024 символов
      </span>
    </label>
    <label class="modalReviewField" data-form="field">
      <span class="modalReviewFieldLabel">
        <span>Недостатки</span>
        <span class="modalReviewFieldLabelRequired">*</span>
      </span>
      <textarea data-validate="comment" data-min="3" data-max="1024" type="text"
                class="modalReviewFieldInput"
                placeholder="Постарайтесь дать ответ, который будет полезен другим пользователям"
                required></textarea>
      <span class="modalReviewFieldCounter" data-form="counter">
        <span data-form="counter-current">0</span>
        /
        <span data-form="counter-max">1024</span>
      </span>
      <span class="modalReviewFieldError" data-form="error">
        Не менее 3 и не более 1024 символов
      </span>
    </label>
    <label class="modalReviewField" data-form="field">
      <span class="modalReviewFieldLabel">
        <span>Комментарий</span>
        <span class="modalReviewFieldLabelRequired">*</span>
      </span>
      <textarea data-validate="comment" data-min="3" data-max="1024" type="text"
                class="modalReviewFieldInput" required
                placeholder="Поделитесь впечатлениями о товаре"></textarea>
      <span class="modalReviewFieldCounter" data-form="counter">
        <span data-form="counter-current">0</span>
        /
        <span data-form="counter-max">1024</span>
      </span>
      <span class="modalReviewFieldError" data-form="error">
        Не менее 3 и не более 1024 символов
      </span>
    </label>
    <label class="modalReviewNote">
      <input type="checkbox" required>
      Отправляя данную форму вы соглашаетесь с обработкой персональных данных и
      <a href="/privacy-policy/">
        политикой конфиденциальности
      </a>
    </label>
    <button class="modalReviewSubmit" type="submit" data-form="submit">
      Отправить
    </button>
  </form>

</div>
<div data-modal-overlay="review" class="modalReviewOverlay"></div>
