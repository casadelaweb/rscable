<?php namespace App;
require_once "app/helpers.php";
require_once "app/Page.php";
require_once "app/Router.php";
require_once "app/routes.php";
require_once "app/pages.php";
require_once "app/Render.php";
/** @var Page $page */
$isHomepage = $page->view == 'home'
// todo: подготовить контроллеры для тестирования форм
?>

<!doctype html>
<html lang="ru">
  <head itemscope itemtype="https://schema.org/WPHeader">
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
          name="viewport">
    <meta content="ie=edge" http-equiv="X-UA-Compatible">
    <meta content="320" name="MobileOptimized">
    <meta content="True" name="HandheldFriendly">
    <?php Render::component('meta/metaMain') ?>
    <title itemprop="headline">
      <?= $page->title ?>
    </title>
    <?php Render::component('meta/favicon') ?>
    <link rel="stylesheet" href="<?= getFilePathWithHash('/assets/css/main.css'); ?>">
  </head>
  <body>
    <div id="app">
      <?php Render::component('header') ?>
      <main class="main">
        <?php Render::component('formFeedback') ?>
        <section class="sectionCategories">
          <div class="sectionCategoriesContainer">
            <div class="sectionCategoriesHeader">
              <h2 class="sectionCategoriesTitle">Категории</h2>
              <a href="/catalog/" class="sectionCategoriesButton">
                Перейти в каталог
              </a>
            </div>
            <div class="sectionCategoriesLayout">
              <article class="sectionCategoriesCard">
                <h3 class="sectionCategoriesCardTitle">Автомобильные кабели</h3>
                <img src="/assets/img/cables/cable-1.png" alt="offer"
                     class="sectionCategoriesCardImg">
              </article>
              <article class="sectionCategoriesCard">
                <h3 class="sectionCategoriesCardTitle">Информационные кабели</h3>
                <img src="/assets/img/cables/cable-2.png" alt="offer"
                     class="sectionCategoriesCardImg">
              </article>
              <article class="sectionCategoriesCard">
                <h3 class="sectionCategoriesCardTitle">Сварочные кабели</h3>
                <img src="/assets/img/cables/cable-3.png" alt="offer"
                     class="sectionCategoriesCardImg">
              </article>
              <article class="sectionCategoriesCard">
                <h3 class="sectionCategoriesCardTitle">Монтажные кабели</h3>
                <img src="/assets/img/cables/cable-4.png" alt="offer"
                     class="sectionCategoriesCardImg">
              </article>
              <article class="sectionCategoriesCard">
                <h3 class="sectionCategoriesCardTitle">Силовые кабели</h3>
                <img src="/assets/img/cables/cable-5.png" alt="offer"
                     class="sectionCategoriesCardImg">
              </article>
              <article class="sectionCategoriesCard">
                <h3 class="sectionCategoriesCardTitle">Судовые кабели</h3>
                <img src="/assets/img/cables/cable-6.png" alt="offer"
                     class="sectionCategoriesCardImg">
              </article>
            </div>
          </div>
        </section>
        <?php Render::component('sections/partners') ?>
        <?php Render::component('sectionProducts') ?>
        <?php Render::component('sections/advantages') ?>
      </main>
      <?php Render::component('footer') ?>
      <div id="modals">
        <?php Render::component('modals/modalSearch') ?>
        <div class="modal-overlay" data-modal-overlay></div>
      </div>
    </div>
    <script src="<?= getFilePathWithHash('/assets/js/main.js'); ?>"></script>
  </body>
</html>
