<?php namespace App;

Router::register('/');
Router::register('/catalog');
Router::register('/catalog/product');
// раздел личный кабинет
Router::register('/personal');
Router::register('/personal/cart');
// раздел информация
Router::register('/info');
Router::register('/info/appointment');
Router::register('/info/delivery');
Router::register('/info/oferta');
Router::register('/info/payment');
Router::register('/info/policy');
Router::register('/info/return');
Router::register('/info/reviews');
Router::register('/info/shops');
Router::register('/info/sizeguide');
Router::register('/info/wholesale');

Router::enable();

