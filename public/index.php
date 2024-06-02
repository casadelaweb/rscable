<?php namespace App;
require_once "app/helpers.php";
require_once "app/Page.php";
require_once "app/Router.php";
require_once "app/routes.php";
require_once "app/pages.php";
require_once "app/Render.php";
require_once "app/globals.php";
/** @var Page $page */
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
      <?php Render::component('sections/header') ?>
      <main class="main">
        <?php Render::page($page->view) ?>
      </main>
      <?php Render::component('sections/footer') ?>
      <div id="modals">
        <?php Render::component('modals/modalCookie') ?>
        <?php Render::component('modals/modalCatalog') ?>
        <?php Render::component('modals/modalSearch') ?>
        <?php Render::component('modals/modalRegion') ?>
        <?php Render::component('modals/modalFeedback') ?>
        <?php Render::component('modals/modalMenu') ?>
        <?php Render::component('modals/modalProduct') ?>
        <?php Render::component('modals/modalCart/modalCart') ?>
      </div>
    </div>
    <script src="<?= getFilePathWithHash('/assets/js/main.js'); ?>"></script>
  </body>
</html>
