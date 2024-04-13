<?php namespace App; ?>

<?php Render::component('sections/hero') ?>
<?php Render::component('sections/promo') ?>
<?php Render::component('sections/stories') ?>
<?php Render::component('catalog/banner', [
  'url' => '/catalog',
  'images' => [
    'image' => ['url' => '/assets/img/banners/banner-1-320.jpg',],
    'sources' => [
      [
        'media' => '(min-width: 1920px)',
        'url' => '/assets/img/banners/banner-1-1920.jpg',
      ],
      [
        'media' => '(min-width: 1280px)',
        'url' => '/assets/img/banners/banner-1-1280.jpg',
      ],
      [
        'media' => '(min-width: 1024px)',
        'url' => '/assets/img/banners/banner-1-1024.jpg',
      ],
      [
        'media' => '(min-width: 768px)',
        'url' => '/assets/img/banners/banner-1-768.jpg',
      ],
    ],
  ],
]) ?>
<?php Render::component('catalog/catalogSection') ?>
<?php Render::component('catalog/banner', [
  'url' => '/catalog',
  'images' => [
    'image' => ['url' => '/assets/img/banners/banner-2-320.jpg',],
    'sources' => [
      [
        'media' => '(min-width: 1920px)',
        'url' => '/assets/img/banners/banner-2-1920.jpg',
      ],
      [
        'media' => '(min-width: 1280px)',
        'url' => '/assets/img/banners/banner-2-1280.jpg',
      ],
      [
        'media' => '(min-width: 1024px)',
        'url' => '/assets/img/banners/banner-2-1024.jpg',
      ],
      [
        'media' => '(min-width: 768px)',
        'url' => '/assets/img/banners/banner-2-768.jpg',
      ],
    ],
  ],
]) ?>
<?php Render::component('catalog/catalogSection') ?>
<?php Render::component('catalog/banner', [
  'url' => '/catalog',
  'images' => [
    'image' => ['url' => '/assets/img/banners/banner-3-320.jpg',],
    'sources' => [
      [
        'media' => '(min-width: 1920px)',
        'url' => '/assets/img/banners/banner-3-1920.jpg',
      ],
      [
        'media' => '(min-width: 1280px)',
        'url' => '/assets/img/banners/banner-3-1280.jpg',
      ],
      [
        'media' => '(min-width: 1024px)',
        'url' => '/assets/img/banners/banner-3-1024.jpg',
      ],
      [
        'media' => '(min-width: 768px)',
        'url' => '/assets/img/banners/banner-3-768.jpg',
      ],
    ],
  ],
]) ?>

