<div class="modal" data-modal="registration">
  <div class="auth">
    <button class="auth-close" data-modal-close title="Закрыть окно" type="button">
      <span class="iconfont icon-close"></span>
    </button>
    <h2 class="auth-title">Регистрация</h2>
    <div class="auth-body">
      <form class="auth-step">
        <label class="auth-label">
          <input autocomplete="off" class="auth-input" name="name" placeholder="Имя *" required
                 type="text">
        </label>
        <label class="auth-label">
          <input autocomplete="off" class="auth-input" data-mask="tel" name="tel"
                 placeholder="Телефон *"
                 required type="text">
        </label>
        <label class="auth-label">
          <input autocomplete="off" class="auth-input" data-mask="email" name="email"
                 placeholder="Почта"
                 type="text">
        </label>
        <button class="auth-button" type="submit">
          <span>Зарегистрироваться</span>
        </button>
        <label class="auth-policy">
          <input required type="checkbox">
          <span> Даю своё согласие на обработку персональных данных в соответствии с
              <a href="/page404">политикой конфиденциальности</a>
            </span>
        </label>

        <button class="auth-link" data-modal-open="login" type="button">
          <span>Войти</span>
        </button>
      </form>
      <form class="auth-step" hidden>
        <label class="auth-label">
          <input autocomplete="off" class="auth-input" placeholder="Код из СМС *" required
                 type="text">
        </label>
        <div class="auth-message">
          * Код отправлен на номер +7 (960) 274-44-44
          Повторная отправка возможна через 60 сек.
        </div>
        <button class="auth-button" type="submit">
          <span>Подтвердить</span>
        </button>
        <label class="auth-policy">
          <input required type="checkbox">
          <span>
            Даю своё согласие на обработку персональных данных в соответствии с
            <a href="/page404">политикой конфиденциальности</a>
          </span>
        </label>

        <button class="auth-link" data-modal-open="login" type="button">
          <span>Войти</span>
        </button>
      </form>
      <div class="auth-success" hidden>

        <span class="iconfont icon-heart-fill"></span>

        <p>Спасибо за регистрацию!</p>

        <p>Вход на сайт осуществляется по номеру телефона. В личном кабинете можно установить
          пароль и использовать
          для входа логин (адрес эл. почты).</p>

        <a class="auth-link" href="/page404">
          <span>Личный кабинет</span>
        </a>
      </div>
    </div>
  </div>
</div>
