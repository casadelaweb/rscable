<?php namespace App;
global $cityCurrent;
global $isAuth;
?>

<div class="modalMenu" data-modal="menu-mobile">
  <div class="modalMenuTop">
    <a class="modalMenuLogo" href="/">
      <img alt="logo" class="modalMenuLogoImg" loading="lazy" src="/assets/img/logo.svg">
    </a>
    <button class="modalMenuClose" data-modal-close type="button">
      <span class="iconfont icon-close"></span>
    </button>
  </div>
  <div class="modalMenuContainer">
    <?php if ($isAuth): ?>
      <div class="modalMenuProfile">
        <div class="modalMenuProfileTitle">
          <div class="modalMenuProfileImg">
            <span class="iconfont icon-person"></span>
          </div>
          <span>Семенов Семен Семенович</span>
          <a href="/personal/notifications/" class="modalMenuProfileNotifications">
            <span class="iconfont icon-bell"></span>
            <span class="modalMenuProfileNotificationsQuantity">
              14
            </span>
          </a>
        </div>
        <div class="modalMenuProfileDescription">
          С возвращением! У вас 14 новых уведомлений. Ну или другое сообщение с другим текстом.
        </div>
        <a href="/personal/" type="button" class="modalMenuProfileButton">
          Перейти в личный кабинет
        </a>
      </div>
    <?php else: ?>
      <div class="modalMenuProfile">
        <div class="modalMenuProfileTitle">
          Войдите в профиль
        </div>
        <div class="modalMenuProfileDescription">
          Вы сможете отслеживать статусы заказов и
          получать персональные предложения
        </div>
        <button type="button" class="modalMenuProfileButton">
          Войти
        </button>
      </div>
    <?php endif; ?>
  </div>
  <div class="details" data-details="details">
    <div class="details-summary" data-details="summary">
      <a href="/catalog/">Каталог</a>
      <button class="details-button" data-details="button" type="button">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="details-body" data-details="body">
      <a class="details-link" href="/catalog/">Автомобильные кабели</a>
      <a class="details-link" href="/catalog/">Информационные кабели</a>
      <a class="details-link" href="/catalog/">Сварочные кабели</a>
      <a class="details-link" href="/catalog/">Монтажные кабели</a>
      <a class="details-link" href="/catalog/">Силовые кабели</a>
      <a class="details-link" href="/catalog/">
        Категория ниже визуально выделяется ярко
      </a>
      <a class="details-link _primary" href="/catalog/">
        Промо и акции
      </a>
      <a class="details-link" href="/catalog/">
        Судовые кабели
      </a>
      <a class="details-link" href="/catalog/">
        Вот еще какая-то категория
      </a>
      <a class="details-link" href="/catalog/">
        Еще какие-то провода
      </a>
      <a class="details-link" href="/catalog/">
        Категория ниже визуально выделяется, но не слишком броско
      </a>
      <a class="details-link _prior" href="/catalog/">
        Смотреть все
      </a>
    </div>
  </div>
  <div class="details" data-details="details">
    <div class="details-summary" data-details="summary">
      <a href="#">Компания</a>
      <button class="details-button" data-details="button" type="button">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="details-body" data-details="body">
      <a class="details-link" href="#">О компании</a>
      <a class="details-link" href="#">Новости</a>
      <a class="details-link" href="#">Сертификаты</a>
      <a class="details-link" href="#">Благодарности</a>
      <a class="details-link" href="#">Документы</a>
      <a class="details-link" href="#">Камеры</a>
      <a class="details-link" href="#">Наши проекты</a>
      <a class="details-link" href="#">Отзывы</a>
      <a class="details-link" href="#">Блог</a>
    </div>
  </div>
  <div class="details" data-details="details">
    <div class="details-summary" data-details="summary">
      <a href="#">Как купить</a>
      <button class="details-button" data-details="button" type="button">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="details-body" data-details="body">
      <a class="details-link" href="#">Условия доставки</a>
      <a class="details-link" href="#">Условия оплаты</a>
    </div>
  </div>
  <div class="details" data-details="details">
    <div class="details-summary" data-details="summary">
      <a href="/personal/">Личный кабинет</a>
      <button class="details-button" data-details="button" type="button">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="details-body" data-details="body">
      <a class="details-link" href="/personal/cart/">Корзина</a>
      <a class="details-link" href="/personal/fav/">Избранное</a>
      <a class="details-link" href="/personal/compare">Товары в сравнении</a>
      <a class="details-link" href="/">Выйти</a>
    </div>
  </div>
  <div class="modalMenuContainer">
    <div class="modalMenuContacts">
      <div>
        <span class="iconfont icon-location"></span>
        Москва, ул Долгоруковская, 15с4-5, кабинет 331
      </div>
      <div>
        <span class="iconfont icon-metro"></span>
        Станция метро Новослободская
      </div>
      <div>Режим работы: с 8:00 до 18:00</div>
      <a class="modalMenuTel" href="tel:+78005057189">
        <span class="iconfont icon-tel"></span>
        <span>+7 800 505 71 89</span>
      </a>
      <div>Прием звонков: 24 / 7</div>
      <a class="modalMenuEmail" href="mailto:2650metrov@rscable.shop">
        <span class="iconfont icon-email"></span>
        <span>2650metrov@rscable.shop</span>
      </a>
      <button class="modalMenuFeedback" data-modal-open="modal-feedback" type="button">
        Заказать звонок
      </button>
    </div>
  </div>
</div>
<div class="modalMenuOverlay" data-modal-overlay="menu-mobile"></div>
