<?php namespace App;

$brandsPopular = [
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/24.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/407.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/3.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/103.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13251.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/426.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/4.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/586.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/67.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/22628.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/737.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13251.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/2059248.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13656.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13528.jpg',
  ],
];
$brandsExclusive = [
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/785.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13528.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/737.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/67.jpg',
  ],
  [
    'title' => 'title',
    'url' => '#',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/imgtmb/420x180/img/makes/13251.jpg',
  ],
];
$brandsPrivate = [
  [
    'url' => '#',
    'title' => 'inforce',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/res/content/page_templates/d1953333c8dc802d838e936bef8ce361.jpeg',
  ],
  [
    'url' => '#',
    'title' => 'gigant',
    'imgUrl' => 'https://cdn.vseinstrumenti.ru/res/content/page_templates/1267a1fa332c2b6db707620fbf59f86b.jpeg',
  ],
];
?>

<section class="sectionBrands">
  <div class="sectionBrandsContainer">
    <div class="sectionBrandsHeader">
      <h2 class="sectionBrandsTitle">
        <a href="#">
          Бренды
        </a>
      </h2>
      <a href="#" class="sectionBrandsButton">
        Все производители
      </a>
    </div>
    <div class="sectionBrandsLayout">
      <article class="sectionBrandsPopular">
        <h2 class="sectionBrandsSubTitle">
          <a href="#">
            Популярные бренды
          </a>
        </h2>
        <div class="sectionBrandsPopularLayout">
          <?php foreach ($brandsPopular as $brand):
            $url = $brand['url'];
            $title = $brand['title'];
            $imgUrl = $brand['imgUrl']; ?>
            <a href="<?= $url ?>" class="sectionBrandsBrand" title="<?= $title ?>">
              <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy"
                   class="sectionBrandsBrandImg">
            </a>
          <?php endforeach; ?>
        </div>
      </article>
      <article class="sectionBrandsExclusive">
        <h2 class="sectionBrandsSubTitle">
          <a href="#">
            Эксклюзивные бренды
          </a>
        </h2>
        <div class="sectionBrandsPopularLayout">
          <?php foreach ($brandsExclusive as $brand):
            $url = $brand['url'];
            $title = $brand['title'];
            $imgUrl = $brand['imgUrl']; ?>
            <a href="<?= $url ?>" class="sectionBrandsBrand" title="<?= $title ?>">
              <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy"
                   class="sectionBrandsBrandImg">
            </a>
          <?php endforeach; ?>
        </div>
      </article>
      <article class="sectionBrandsPrivate">
        <h2 class="sectionBrandsSubTitle">
          <a href="#">
            Собственные торговые марки
          </a>
        </h2>
        <div class="sectionBrandsPrivateLayout">
          <?php foreach ($brandsPrivate as $brand):
            $url = $brand['url'];
            $title = $brand['title'];
            $imgUrl = $brand['imgUrl']; ?>
            <a href="<?= $url ?>" class="sectionBrandsBrand" title="<?= $title ?>">
              <img src="<?= $imgUrl ?>" alt="<?= $title ?>" loading="lazy"
                   class="sectionBrandsBrandImg">
            </a>
          <?php endforeach; ?>
        </div>
      </article>
    </div>
  </div>
</section>
