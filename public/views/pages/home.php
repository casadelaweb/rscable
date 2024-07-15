<?php namespace App; ?>
<?php Render::component('sections/sectionHero'); ?>
<?php Render::component('sections/sectionParallax'); ?>
<?php Render::component('sections/sectionCategories', [
  'sectionTitle' => 'Категории',
  'sectionButtonTitle' => 'Перейти в каталог',
  'sectionButtonUrl' => '/catalog/',
  'categories' => [
    [
      'title' => 'Автомобильные кабели',
      'url' => '/catalog/',
      'imgUrl' => '/assets/img/cables/cable-1.png',
    ], [
      'title' => 'Информационные кабели',
      'url' => '/catalog/',
      'imgUrl' => '/assets/img/cables/cable-2.png',
    ], [
      'title' => 'Сварочные кабели',
      'url' => '/catalog/',
      'imgUrl' => '/assets/img/cables/cable-3.png',
    ], [
      'title' => 'Монтажные кабели',
      'url' => '/catalog/',
      'imgUrl' => '/assets/img/cables/cable-4.png',
    ], [
      'title' => 'Силовые кабели',
      'url' => '/catalog/',
      'imgUrl' => '/assets/img/cables/cable-5.png',
    ], [
      'title' => 'Судовые кабели',
      'url' => '/catalog/',
      'imgUrl' => '/assets/img/cables/cable-6.png',
    ],
  ],
]); ?>
<?php Render::component('sections/sectionNumbers'); ?>
<?php Render::component('sections/sectionAdvisable', [
  'sectionTitle' => 'Вам может понравится',
  'sectionButtonTitle' => 'Перейти в каталог',
  'sectionButtonUrl' => '/catalog/',
]); ?>
<?php Render::component('sections/sectionBrands'); ?>
<?php Render::component('sections/sectionPartners'); ?>
<?php Render::component('sections/sectionProducts'); ?>
<?php Render::component('sections/sectionAdvantages'); ?>
