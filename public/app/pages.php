<?php namespace App;

// todo: вынести регистрацию страниц в отдельную middleware

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
  'view' => 'catalog/catalog',
  'parent' => $home,
]);
$product = new Page([
  'title' => 'Товар',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/catalog/product/',
  'view' => 'catalog/product',
  'parent' => $catalog,
]);

// раздел личный кабинет
$personal = new Page([
  'title' => 'Личный кабинет',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/personal/',
  'view' => 'personal/personal',
  'parent' => $home,
]);
$personalCart = new Page([
  'title' => 'Корзина',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/personal/cart/',
  'view' => 'personal/cart',
  'parent' => $personal,
]);

// раздел информация
$info = new Page([
  'title' => 'Информация',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/',
  'view' => 'info/info',
  'parent' => $home,
]);
$infoAppointment = new Page([
  'title' => 'Записаться к стилисту',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/appointment/',
  'view' => 'info/appointment',
  'parent' => $info,
]);
$infoDelivery = new Page([
  'title' => 'Доставка',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/delivery/',
  'view' => 'info/delivery',
  'parent' => $info,
]);
$infoOferta = new Page([
  'title' => 'Договор-оферта',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/oferta/',
  'view' => 'info/oferta',
  'parent' => $info,
]);
$infoPolicy = new Page([
  'title' => 'Политика конфиденциальности',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/policy/',
  'view' => 'info/policy',
  'parent' => $info,
]);
$infoReturn = new Page([
  'title' => 'Возврат и обмен',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/return/',
  'view' => 'info/return',
  'parent' => $info,
]);
$infoPayment = new Page([
  'title' => 'Оплата',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/payment/',
  'view' => 'info/payment',
  'parent' => $info,
]);
$infoReviews = new Page([
  'title' => 'Отзывы',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/reviews/',
  'view' => 'info/reviews',
  'parent' => $info,
]);
$infoSizeguide = new Page([
  'title' => 'Таблица размеров',
  'metaDescription' => 'Заполните описание мета',
  'metaKeywords' => 'Заполните ключевые поля мета',
  'url' => '/info/sizeguide/',
  'view' => 'info/sizeguide',
  'parent' => $info,
]);

$pages = [
  $home, $catalog, $product,
  $personal, $personalCart,
  //
  $info, $infoAppointment, $infoDelivery, $infoOferta, $infoPolicy,
  $infoPayment, $infoReturn, $infoReviews, $infoSizeguide,
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


$fakeProducts = [
  [
    'title' => 'Кабель СШВ 3х150+1х120, 1 кВ',
    'url' => '/product/test3/',
    'price' => '120 000',
    'priceOld' => 0,
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => false,
    'isRecommended' => false,
    'isOrderAble' => true,
    'isHit' => true,
  ],
  [
    'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
    'url' => '/product/test/',
    'price' => '5 000',
    'priceOld' => '6 400',
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => true,
    'isRecommended' => false,
    'isOrderAble' => false,
    'isHit' => false,
  ],
  [
    'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
    'url' => '/product/test/',
    'price' => '5 000',
    'priceOld' => 0,
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => true,
    'isRecommended' => true,
    'isOrderAble' => false,
    'isHit' => false,
  ],
  [
    'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
    'url' => '/product/test2/',
    'price' => 0,
    'priceOld' => 0,
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => false,
    'isRecommended' => false,
    'isOrderAble' => true,
    'isHit' => false,
  ],
  [
    'title' => 'Кабель СШВ 3х150+1х120, 1 кВ',
    'url' => '/product/test3/',
    'price' => '120 000',
    'priceOld' => '133 000',
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_4.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => false,
    'isRecommended' => false,
    'isOrderAble' => true,
    'isHit' => true,
  ],
  [
    'title' => 'Кабель СШВ 3х150+1х120, 1 кВ',
    'url' => '/product/test3/',
    'price' => '120 000',
    'priceOld' => '133 000',
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_3.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => false,
    'isRecommended' => false,
    'isOrderAble' => true,
    'isHit' => false,
  ],
  [
    'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
    'url' => '/product/test/',
    'price' => 0,
    'priceOld' => 0,
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => true,
    'isRecommended' => false,
    'isOrderAble' => false,
    'isHit' => false,
  ],
  [
    'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
    'url' => '/product/test/',
    'price' => '5 000',
    'priceOld' => '6 400',
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => true,
    'isRecommended' => false,
    'isOrderAble' => false,
    'isHit' => true,
  ],
  [
    'title' => 'Кабель NYM-J 3х1,5, 1 кВ',
    'url' => '/product/test/',
    'price' => '5 000',
    'priceOld' => '6 400',
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => true,
    'isRecommended' => true,
    'isOrderAble' => false,
    'isHit' => false,
  ],
  [
    'title' => 'Кабель КШВЭББШВ-6 3х95+1х10+1х16, 1 кВ',
    'url' => '/product/test2/',
    'price' => '51 000',
    'priceOld' => '62 400',
    'images' => [
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_1.jpg',
        'alt' => 'img description',
      ],
      [
        'url' => 'https://cable.ru/images/resize/catalog/cable/800_vbbshv_cores_2.jpg',
        'alt' => 'img description',
      ],
    ],
    'isInStock' => false,
    'isRecommended' => false,
    'isOrderAble' => true,
    'isHit' => false,
  ],
];
?>
