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
      <button class="headerFeedback" data-modal-open="feedback" type="button">
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



