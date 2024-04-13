<?php namespace App; ?>

<?php Render::component('breadcrumbs') ?>

<div class="info">
  <div class="info-container">
    <?php Render::component('info/infoNav') ?>

    <div class="info-main">
      <h1 class="info-title">Оптовые продажи</h1>
      <div class="text">
        <p>Регистрация разрешена только ИП и юридическим лицам.</p>
        <p>Для доступа к оптовым ценам необходимо пройти регистрацию и ожидать подтверждения
          нашего менеджера,
          звонок осуществляется в рабочее время компании.</p>
        <p>Мы ценим время наших покупателей и эффективное общение, потому все операции
          максимально упрощены.</p>
      </div>
      <form class="info-form-test">
        <label>
          <span>ФИО*</span>
          <input autocomplete="off" name="name" placeholder="Виктор Иванов" required
                 type="text">
        </label>
        <label>
          <span>Телефон*</span>
          <input autocomplete="off" data-mask="tel" name="tel" placeholder="+7 (999) 999-99-99"
                 required>
        </label>
        <label>
          <span>E-mail*</span>
          <input autocomplete="off" data-mask="email" name="email" placeholder="test@test.ru"
                 required type="text">
        </label>
        <label>
          <span>Пароль*</span>
          <input autocomplete="off" placeholder="Не менее 6 символов" type="password">
        </label>
        <label>
          <span>Подтверждение пароля*</span>
          <input autocomplete="off" placeholder="Введите пароль повторно" type="password">
        </label>
        <label>
          <span>Населённый пункт*</span>
          <input autocomplete="off" placeholder="Новосибирск" required type="text">
        </label>
        <label>
          <span>Защита от автоматических сообщений</span>
          <input name="captcha_sid" type="hidden" value="06669082c9fc9c6b693b2b19de01cbee">
          <span id="recaptcha_013e" class="g-recaptcha"
                data-badge="bottomright"
                data-callback="RecaptchafreeSubmitForm"
                data-sitekey="6LfL4_UUAAAAAIamAYPAPv8tH_-8D2kn6KrOe9Qk"
                data-size="normal"
                data-theme="light" data-widget="1">
                <span style="width: 304px; height: 78px;">

                    <iframe height="78"
                            name="a-xo2wqjna29b" role="presentation"
                            sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox"
                            scrolling="no"
                            src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LfL4_UUAAAAAIamAYPAPv8tH_-8D2kn6KrOe9Qk&amp;co=aHR0cHM6Ly93d3cubW9ra28tYnJhbmQucnU6NDQz&amp;hl=ru&amp;v=pCoGBhjs9s8EhFOHJFe8cqis&amp;theme=light&amp;size=normal&amp;badge=bottomright&amp;cb=y66n6dwld8jz"
                            title="reCAPTCHA"
                            width="304"></iframe>

                  <textarea id="g-recaptcha-response-1" class="g-recaptcha-response"
                            name="g-recaptcha-response"
                            style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0; resize: none; display: none;"></textarea>
                </span>
                <iframe style="display: none;"></iframe>
              </span>
        </label>
        <button type="submit">Зарегистрироваться</button>
        <div class="appointment-form-policy">
          Нажимая кнопку «Зарегистрироваться» вы даёте своё согласие на обработку персональных
          данных в соответствии
          с <a href="/info/policy">политикой конфиденциальности</a>
        </div>
      </form>
    </div>
  </div>
</div>
