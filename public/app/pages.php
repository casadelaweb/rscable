<?php namespace App;

$home = new Page([
  'title' => 'Главная',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/',
  'view' => 'home',
  'parent' => null,
]);
$catalog = new Page([
  'title' => 'Каталог',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/catalog/',
  'view' => 'catalog',
  'parent' => $home,
]);
$product = new Page([
  'title' => 'Страница продукта',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/product/',
  'view' => 'product',
  'parent' => $catalog,
]);
$test = new Page([
  'title' => 'Страница тестовая',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/test/',
  'view' => 'test',
  'parent' => $home,
]);
$cart = new Page([
  'title' => 'Корзина',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/cart/',
  'view' => 'cart',
  'parent' => $home,
]);
$pages = [
  $home, $catalog, $product, $test, $cart,
];

$pageNotFound = new Page([
  'title' => 'Страница не найдена',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => null,
  'view' => '404',
  'parent' => $home,
]);
$page = $pageNotFound;
foreach ($pages as $p) {
  if (Router::$currentRoute == $p->url) {
    $page = $p;
  }
}



