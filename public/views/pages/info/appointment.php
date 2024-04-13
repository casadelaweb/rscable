<?php namespace App; ?>

<?php Render::component('breadcrumbs') ?>

<div class="info">
  <div class="info-container">
    <?php Render::component('info/infoNav') ?>

    <div class="info-main">
      <section class="appointment-hero">
        <h1 class="info-title">Записаться к стилисту</h1>
        <picture>
          <source media="(min-width: 540px)"
                  srcset="/assets/img/appointment/banner-desktop.jpg">
          <img alt="img" class="appointment-img" loading="lazy"
               src="/assets/img/appointment/banner.jpg">
        </picture>
      </section>

      <section class="appointment-free">
        <div class="appointment-free-main">
          <h2 class="appointment-title">
            ЖЕЛАЕТЕ ОБНОВИТЬ ГАРДЕРОБ, НО НЕ ЗНАЕТЕ, <br>
            ЧТО ВАМ ИДЁТ?
          </h2>
          <div class="appointment-description">
            <p>
              Наш профессиональный стилист поможет вам составить гардероб, <br>
              который подчеркнет вашу индивидуальность.
            </p>
            <p>Услуга предоставляется абсолютно бесплатно.</p>
          </div>
        </div>
        <div class="appointment-free-images">
          <img alt="img" class="appointment-free-discount" loading="lazy"
               src="/assets/img/appointment/free.png">
          <img alt="img" class="appointment-free-img" loading="lazy"
               src="/assets/img/appointment/banner-free.jpg">
        </div>
      </section>

      <section class="appointment-advantages">
        <h2 class="appointment-title">Что вы получите?</h2>
        <div class="appointment-advantages-layout">
          <article class="appointment-advantage">
            <h2 class="appointment-advantage-title">
              <span class="appointment-advantage-number">1</span> <span>Образы</span>
            </h2>
            <div class="appointment-advantage-description">
              Для вас соберут готовые образы под запрос. Например, в офис или для разного рода
              мероприятий
            </div>
          </article>
          <article class="appointment-advantage">
            <h2 class="appointment-advantage-title">
              <span class="appointment-advantage-number">2</span> <span>Детали</span>
            </h2>
            <div class="appointment-advantage-description">
              Стилист подберёт вам обувь и аксессуары исходя из ваших предпочтений
            </div>
          </article>
          <article class="appointment-advantage">
            <h2 class="appointment-advantage-title">
              <span class="appointment-advantage-number">3</span> <span>Знания</span>
            </h2>
            <div class="appointment-advantage-description">
              Узнаете полезные рекомендации от профессионального стилиста, которые сможете
              использовать в будущем
            </div>
          </article>
        </div>
      </section>

      <form class="appointment-form">
        <h2 class="appointment-title appointment-form-title">ЗАПИСАТЬСЯ ОНЛАЙН</h2>
        <div class="appointment-form-message">
          Бронирование свободной даты происходит через онлайн-форму или личные сообщения
          ВКонтакте. Просто напишите
          «Хочу записаться на шопинг».
        </div>
        <a class="appointment-social" href="https://vk.com" target="_blank">
          <span class="iconfont icon-vk"></span>
        </a>
        <div class="appointment-form-layout">
          <label class="appointment-label _name">
            <span class="appointment-label-text">Имя *</span>
            <input autocomplete="off" class="appointment-input" placeholder="Имя"
                   required type="text">
          </label>
          <label class="appointment-label _email">
            <span class="appointment-label-text">Почта *</span>
            <input autocomplete="off" class="appointment-input" data-mask="email"
                   placeholder="username@site.ru" required type="text">
          </label>
          <label class="appointment-label _tel">
            <span class="appointment-label-text">Телефон *</span>
            <input autocomplete="off" class="appointment-input" data-mask="tel"
                   placeholder="+7 999 999 99 99" required type="text">
          </label>
          <label class="appointment-label _textarea">
            <span class="appointment-label-text">Комментарий *</span>
            <textarea autocomplete="off" class="appointment-textarea" placeholder="Комментарий"
                      type="text"></textarea>
          </label>
          <button class="appointment-submit" type="submit">
            <span>Записаться</span>
          </button>
          <div class="appointment-form-policy">
            Нажимая кнопку «Записаться» вы даёте своё согласие на обработку персональных данных
            в соответствии
            с <a href="/info/policy">политикой конфиденциальности</a>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
