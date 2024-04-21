<?php namespace App;
global $cityCurrent;
?>

<header class="header">
  <div class="headerDesktop">
    <div class="headerDesktopTop">
      <div class="headerLocation">
        <button class="headerLocation" data-modal-open="region" type="button">
          <span class="iconfont icon-location"></span>
          <span><?= $cityCurrent ?></span>
        </button>
        <div class="headerLocationModal _active">
          <button class="headerLocationModalClose" type="button">
            <span class="iconfont icon-close"></span>
          </button>
          <div class="headerLocationModalTitle">
            Ваш город <?= $cityCurrent ?>?
          </div>
          <div class="headerLocationModalButtons">
            <button class="headerLocationModalAccept" type="button">
              Да, все верно
            </button>
            <button class="headerLocationModalChoose" data-modal-open="region" type="button">
              Нет, выбрать другой
            </button>
          </div>
        </div>
      </div>
      <a class="headerTel" href="tel:+7 (812) 561-96-12">
        <span class="iconfont icon-tel"></span>
        +7 (812) 561-96-12
      </a>
      <button class="headerFeedback" data-modal-open="modal-feedback" type="button">
        Заказать звонок
      </button>
      <a class="headerEmail" href="mailto:1820metrov@rscable.shop">
        <span class="iconfont icon-email"></span>
        1820metrov@rscable.shop
      </a>
      <a class="headerPersonal" href="#">
        <span class="iconfont icon-person"></span>
        Личный кабинет
      </a>
    </div>
    <div class="headerDesktopMiddle">
      <a class="headerLogo" href="/" title="Главная страница">
        <img alt="logo" class="headerLogoImg" loading="lazy" src="/assets/img/logo.svg">
        <span class="headerSlogan"> Оптовые поставки кабеля по России</span>
      </a>
      <button class="headerCatalog" data-modal-toggle="catalog" type="button">
        <span class="iconfont icon-menu"></span>
        <span class="iconfont icon-close"></span>
        Каталог
      </button>
      <div class="dropdown">
        <div class="dropdownHead">
          <a class="headerLink" href="#">
            Компания
            <span class="iconfont icon-arrow-down"></span>
          </a>
        </div>
        <div class="dropdownBody">
          <?php
          $items = [
            [
              'title' => 'О компании',
              'url' => '#',
            ],
            [
              'title' => 'Новости',
              'url' => '#',
            ],
            [
              'title' => 'Сертификаты',
              'url' => '#',
            ],
            [
              'title' => 'Благодарности',
              'url' => '#',
            ],
            [
              'title' => 'Документы',
              'url' => '#',
            ],
            [
              'title' => 'Камеры',
              'url' => '#',
            ],
            [
              'title' => 'Наши проекты',
              'url' => '#',
            ],
            [
              'title' => 'Отзывы',
              'url' => '#',
            ],
            [
              'title' => 'Блог',
              'url' => '#',
            ],
          ];
          foreach ($items as $item):
            $title = $item['title'];
            $url = $item['url'];
            ?>
            <a class="dropdownBodyItem" href="<?= $url ?>">
              <?= $title ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <div class="dropdown">
        <div class="dropdownHead">
          <a class="headerLink" href="#">
            Оплата и доставка
            <span class="iconfont icon-arrow-down"></span>
          </a>
        </div>
        <div class="dropdownBody">
          <?php
          $items = [
            [
              'title' => 'Условия доставки',
              'url' => '#',
            ],
            [
              'title' => 'Условия оплаты',
              'url' => '#',
            ],
            [
              'title' => 'Вопросы и ответы',
              'url' => '#',
            ],
            [
              'title' => 'Акции и предложения',
              'url' => '#',
            ],
          ];
          foreach ($items as $item):
            $title = $item['title'];
            $url = $item['url'];
            ?>
            <a class="dropdownBodyItem" href="<?= $url ?>">
              <?= $title ?>
            </a>
          <?php endforeach; ?>
        </div>
      </div>
      <a class="headerLink" href="#">
        Партнерство
      </a>
      <a class="headerLink" href="#">
        Контакты
      </a>
      <div class="headerSearch">
        <div class="headerSearchIcon">
          <span class="iconfont icon-search"></span>
        </div>
        <input class="headerSearchInput" data-modal-open="search" data-search-modal="input-desktop"
               placeholder="Категория, модель или артикул"
               type="text">
      </div>
      <a class="headerButton" href="/personal/compare">
        <span class="iconfont icon-stats-bars"></span>
        <span class="headerButtonQuantity">0</span>
      </a>
      <a class="headerButton" href="/personal/favorite/">
        <span class="iconfont icon-heart"></span>
        <span class="headerButtonQuantity">12</span>
      </a>
      <a class="headerButton" href="/personal/cart/">
        <span class="iconfont icon-cart"></span>
        <span class="headerButtonQuantity">9</span>
      </a>
    </div>
  </div>
  <div class="headerMobile">
    <button class="headerButton" data-modal-open="menu-mobile" type="button">
      <span class="iconfont icon-menu"></span>
    </button>
    <a class="headerLogo" href="/">
      <img alt="logo" class="headerLogoImg" loading="lazy" src="/assets/img/logo.svg">
    </a>

    <button class="headerButton" data-modal-open="search" type="button">
      <span class="iconfont icon-search"></span>
    </button>
    <a class="headerButton" href="/personal/favorite/">
      <span class="iconfont icon-heart"></span>
      <span class="headerButtonQuantity">12</span>
    </a>
    <a class="headerButton" href="/personal/cart/">
      <span class="iconfont icon-cart"></span>
      <span class="headerButtonQuantity">9</span>
    </a>
    <a class="headerPersonal" href="/personal/">
      <span class="iconfont icon-person"></span>
    </a>
  </div>
</header>

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
  </div>
  <div class="details" data-details="details">
    <div class="details-summary" data-details="summary">
      <a href="#">Каталог</a>
      <button class="details-button" data-details="button" type="button">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="details-body" data-details="body">
      <a class="details-link" href="#">Автомобильные кабели</a>
      <a class="details-link" href="#">Информационные кабели</a>
      <a class="details-link" href="#">Сварочные кабели</a>
      <a class="details-link" href="#">Монтажные кабели</a>
      <a class="details-link" href="#">Силовые кабели</a>
      <a class="details-link" href="#">Судовые кабели</a>
      <a class="details-link" href="#">Провода</a>
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
      <a href="#">Личный кабинет</a>
      <button class="details-button" data-details="button" type="button">
        <span class="iconfont icon-arrow-down"></span>
      </button>
    </div>
    <div class="details-body" data-details="body">
      <a class="details-link" href="#">Корзина</a>
      <a class="details-link" href="#">Избранное</a>
      <a class="details-link" href="#">Товары в сравнении</a>
      <a class="details-link" href="#">Выйти</a>
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

<div class="form CALLBACK  " style="display: none">
  <div class="form_head">
    <h2>Заказать звонок</h2>
  </div>
  <form action="/ajax/form.php?form_id=CALLBACK" enctype="multipart/form-data" method="POST"
        name="CALLBACK" novalidate="novalidate">
    <div class="form_body">
      <div class="form-control">
        <label>
          <span>Ваше имя&nbsp;<span class="star">*</span>
          </span>
        </label>
        <input aria-required="true" class="inputtext" data-sid="CLIENT_NAME" name="form_text_11"
               required=""
               type="text" value="">
      </div>
      <div class="form-control">
        <label>
          <span>Телефон&nbsp;<span class="star">*</span>
          </span>
        </label>
        <input aria-required="true" class="phone" data-sid="PHONE" im-insert="true"
               name="form_text_12" required=""
               type="tel" value="">
      </div>
      <div class="form-control">
        <label>
          <span>ИНН&nbsp;<span class="star">*</span>
          </span>
        </label>
        <input aria-required="true" class="inputtext" data-sid="INN_CALL" name="form_text_62"
               required=""
               size="12" type="text" value="">
      </div>
      <div class="clearboth"></div>
      <textarea name="nspm" style="display:none;"></textarea>
      <div class="clearboth"></div>
    </div>
    <div class="form_footer">
      <input name="aspro_max_form_validate" type="hidden">
      <div class="licence_block filter onoff label_block">
        <input aria-required="true" checked="" id="licenses_popup" name="licenses_popup" required=""
               type="checkbox" value="Y">
        <label for="licenses_popup">
          Я согласен на
          <a href="/include/licenses_detail.php" target="_blank">обработку персональных данных</a>
        </label>
      </div>
      <div class="line-block form_footer__bottom">
        <div class="line-block__item">
          <button class="btn btn-lg btn-default" type="submit">
            <span>Отправить</span>
          </button>
        </div>
        <div class="line-block__item">
          <div class="required-fields-note">
            <span class="star">*</span>
            <span class="muted888 font_xs"> – обязательные поля</span>
          </div>
        </div>
      </div>
      <input class="btn btn-default" name="web_form_submit" type="hidden" value="Отправить">
    </div>
  </form>
</div>

