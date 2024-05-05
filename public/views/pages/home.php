<?php namespace App; ?>
<?php Render::component('sections/sectionHero') ?>
<?php Render::component('sections/sectionCategories') ?>
<?php Render::component('sections/sectionAdvisable', [
  'sectionTitle' => 'Вам может понравится',
  'sectionButtonTitle' => 'Перейти в каталог',
  'sectionButtonUrl' => '/catalog/',
]); ?>
<?php Render::component('sections/sectionBrands') ?>
<?php Render::component('sections/sectionPartners') ?>
<?php Render::component('sections/sectionProducts') ?>
<?php Render::component('sections/advantages') ?>
