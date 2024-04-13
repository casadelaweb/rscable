<div class="modal" data-modal="login">
  <div class="auth login">
    <button class="auth-close" data-modal-close title="Закрыть окно" type="button">
      <span class="iconfont icon-close"></span>
    </button>
    <h2 class="auth-title">ВОЙТИ В АККАУНТ</h2>
    <div class="login-header auth-header">

      <button class="active login-header-button auth-header-button"
              data-tab="login"
              data-tab-button="login-tel"
              type="button">
        <span>По телефону</span>
      </button>

      <div class="login-header-divider"></div>

      <button class="login-header-button auth-header-button"
              data-tab="login"
              data-tab-button="login-email"
              type="button">
        <span>По эл. почте</span>
      </button>

    </div>
    <div class="auth-body">

      <form class="login-tel active auth-tel" data-tab="login" data-tab-content="login-tel">
        <label class="auth-label">
          <input autocomplete="off"
                 class="auth-input"
                 data-mask="tel"
                 name="tel"
                 placeholder="Телефон"
                 required
                 type="text">
        </label>
        <button class="auth-button" type="submit">
          <span>Получить код</span>
        </button>
        <label class="auth-policy">
          <input required type="checkbox">
          <span> Даю своё согласие на обработку персональных данных в соответствии с
              <a href="/page404">политикой конфиденциальности</a>
            </span>
        </label>
        <button class="auth-link" data-modal-open="registration" type="button">
          <span>Зарегистрироваться</span>
        </button>
      </form>

      <form class="login-email auth-email" data-tab="login" data-tab-content="login-email">
        <label class="auth-label">
          <input autocomplete="off" class="auth-input" data-mask="email" name="email"
                 placeholder="Почта"
                 required type="text">
        </label>
        <label class="auth-label">
          <input autocomplete="off" class="auth-input" name="password" placeholder="Пароль"
                 required
                 type="password">
          <!-- <span class="auth-input-message">Неверный пароль</span> -->
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
        <div class="auth-message">
          <span>Забыли пароль?</span>
          <a class="auth-link" href="/page404">
            <span>Восстановить</span>
          </a>
          <button class="auth-link" data-modal-open="registration" type="button">
            <span>Зарегистрироваться</span>
          </button>
        </div>
      </form>

    </div>

  </div>
</div>
