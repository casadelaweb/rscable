<?php namespace App;
global $cityCurrent;
?>

<header class="header">
  <div class="header-desktop">
    <div class="header-desktop-top">
      <div class="headerLocation">
        <button type="button" class="header-location" data-modal-open="region">
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
            <button class="headerLocationModalChoose" type="button" data-modal-open="region">
              Нет, выбрать другой
            </button>
          </div>
        </div>
      </div>
      <a href="tel:+7 (812) 561-96-12" class="headerTel">
        <span class="iconfont icon-tel"></span>
        +7 (812) 561-96-12
      </a>
      <button type="button" data-modal-open="modal-feedback" class="headerFeedback">
        Заказать звонок
      </button>
      <a href="mailto:1820metrov@rscable.shop" class="headerEmail">
        <span class="iconfont icon-email"></span>
        1820metrov@rscable.shop
      </a>
      <a href="#" class="headerPersonal">
        <span class="iconfont icon-person"></span>
        Личный кабинет
      </a>
      <!--<div class="headerAddress">
        Москва, ул Долгоруковская, 15с4-5, кабинет 331
      </div>-->
    </div>
  </div>
  <div class="header-desktop-middle">
    <a class="header-logo" href="/" title="Главная страница">
      <img src="/assets/img/logo.svg" alt="logo" class="header-logo-img" loading="lazy">
      <span class="header-slogan"> Оптовые поставки кабеля по России</span>
    </a>
    <button type="button" class="header-catalog" data-modal-toggle="catalog">
      <span class="iconfont icon-menu"></span>
      <span class="iconfont icon-close"></span>
      Каталог
    </button>
    <div class="dropdown">
      <div class="dropdown-head">
        <a href="#" class="headerLink">
          Компания
          <span class="iconfont icon-arrow-down"></span>
        </a>
      </div>
      <div class="dropdown-body">
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
          <a href="<?= $url ?>" class="dropdown-body-item">
            <?= $title ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <div class="dropdown">
      <div class="dropdown-head">
        <a href="#" class="headerLink">
          Оплата и доставка
          <span class="iconfont icon-arrow-down"></span>
        </a>
      </div>
      <div class="dropdown-body">
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
          <a href="<?= $url ?>" class="dropdown-body-item">
            <?= $title ?>
          </a>
        <?php endforeach; ?>
      </div>
    </div>
    <a href="#" class="headerLink">
      Партнерство
    </a>
    <a href="#" class="headerLink">
      Контакты
    </a>
    <div class="header-buttons">
      <div class="header-search">
        <div class="header-search-icon">
          <span class="iconfont icon-search"></span>
        </div>
        <input type="text" class="header-search-input" data-modal-open="search"
               data-search-modal="input-desktop"
               placeholder="Категория, модель или артикул">
      </div>
    </div>
    <a href="/personal/compare" class="header-button">
      <span class="iconfont icon-stats-bars"></span>
      <span class="header-button-quantity">0</span>
    </a>
    <a href="/personal/favorite/" class="header-button">
      <span class="iconfont icon-heart"></span>
      <span class="header-button-quantity">12</span>
    </a>
    <a href="/personal/cart/" class="header-button">
      <span class="iconfont icon-cart"></span>
      <span class="header-button-quantity">9</span>
    </a>
  </div>
</header>

<div class="form CALLBACK  " style="display: none">
  <div class="form_head">
    <h2>Заказать звонок</h2>
  </div>
  <form name="CALLBACK" action="/ajax/form.php?form_id=CALLBACK" method="POST"
        enctype="multipart/form-data" novalidate="novalidate">
    <div class="form_body">
      <div class="form-control">
        <label>
          <span>Ваше имя&nbsp;<span class="star">*</span>
          </span>
        </label>
        <input type="text" class="inputtext" data-sid="CLIENT_NAME" required="" name="form_text_11"
               value="" aria-required="true">
      </div>
      <div class="form-control">
        <label>
          <span>Телефон&nbsp;<span class="star">*</span>
          </span>
        </label>
        <input type="tel" class="phone" data-sid="PHONE" required="" name="form_text_12" value=""
               im-insert="true" aria-required="true">
      </div>
      <div class="form-control">
        <label>
          <span>ИНН&nbsp;<span class="star">*</span>
          </span>
        </label>
        <input type="text" class="inputtext" data-sid="INN_CALL" required="" name="form_text_62"
               value="" size="12" aria-required="true">
      </div>
      <div class="clearboth"></div>
      <textarea name="nspm" style="display:none;"></textarea>
      <div class="clearboth"></div>
    </div>
    <div class="form_footer">
      <input type="hidden" name="aspro_max_form_validate">
      <div class="licence_block filter onoff label_block">
        <input type="checkbox" id="licenses_popup" name="licenses_popup" checked="" required=""
               value="Y" aria-required="true">
        <label for="licenses_popup">
          Я согласен на
          <a href="/include/licenses_detail.php" target="_blank">обработку персональных данных</a>
        </label>
      </div>
      <div class="line-block form_footer__bottom">
        <div class="line-block__item">
          <button type="submit" class="btn btn-lg btn-default">
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
      <input type="hidden" class="btn btn-default" value="Отправить" name="web_form_submit">
    </div>
  </form>
</div>
