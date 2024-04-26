<?php namespace App;
global $page;

$partners = [
  [
    'title' => 'Тестовое название партнера',
    'imgUrl' => 'https://rscable.ru/upload/iblock/c2a/c2a75d4b43933d19ff378cd4c1710bf7.png',
  ],
  ['title' => 'Тестовое название партнера',
    'imgUrl' => 'https://nsk.cable.ru/assets/images/certificates/%D0%9E%D0%9E%D0%9E%20%D0%AD%D0%BD%D0%B5%D1%80%D0%B3%D0%B8%D1%8F%20%28%D0%AD%D0%BB%D0%BA%D0%BE%D0%BC%29.jpg',
  ],
  ['title' => 'Тестовое название партнера',
    'imgUrl' => 'https://rscable.ru/upload/iblock/e09/e091301c643a577e3b43de3aae12d164.png',
  ],
  ['title' => 'Здесь может быть изображение сертификата',
    'imgUrl' => 'https://nsk.cable.ru/assets/images/certificates/%D0%A1%D0%B5%D1%80%D1%82%D0%B8%D1%84%D0%B8%D0%BA%D0%B0%D1%82%20TOR.png',
  ],
  ['title' => 'Или изображение логотипа в хорошем качестве',
    'imgUrl' => 'https://rscable.ru/upload/iblock/695/6950d9e2a7d961072e24b93ca9c3928f.png',
  ],
  ['title' => 'Тестовое название партнера',
    'imgUrl' => 'https://rscable.ru/upload/iblock/7d0/fjrltajhe52v8rgg5zvpksna8erpmzbu.png',
  ],
  ['title' => 'ЭнергоКомплект',
    'imgUrl' => 'https://rscable.ru/upload/iblock/966/bqqvlnr1kd10htonovthqd6w8oqrxqpz.png',
  ],
];
?>

<section class="sectionPartners">
  <div class="sectionPartnersContainer">
    <div class="sectionPartnersHeader">
      <h2 class="sectionPartnersTitle">Наши партнеры</h2>
      <a href="/partners/" class="sectionPartnersButton" title="Стать партнером">
        Стать партнером
      </a>
    </div>
    <div class="swiper" data-section-partners="slider">
      <div class="swiper-wrapper">
        <?php foreach ($partners as $partner) :
          $imgUrl = $partner['imgUrl'];
          $title = $partner['title'];
          ?>
          <article class="swiper-slide sectionPartnersSlide">
            <a href="<?= $imgUrl ?>" data-fancybox="section-partners" data-caption="<?= $title; ?>"
               title="Открыть в галерее" aria-label="Открыть в галерее">
              <img src="<?= $imgUrl ?>" alt="img" loading="lazy" class="sectionPartnersSlideImg">
            </a>
            <h3 class="sectionPartnersSlideTitle">
              <a href="#" target="_blank" title="Перейти на сайт партнера"
                 aria-label="Перейти на сайт партнера">
                <?= $title; ?>
              </a>
            </h3>
            <div class="swiper-lazy-preloader"></div>
          </article>
        <?php endforeach; ?>
      </div>
      <div class="swiper-footer">
        <button type="button" class="swiper-button-prev">
          <span class="iconfont icon-arrow-left"></span>
        </button>
        <div class="swiper-pagination"></div>
        <button type="button" class="swiper-button-next">
          <span class="iconfont icon-arrow-right"></span>
        </button>
      </div>
    </div>
  </div>
</section>
