<?php namespace App;
$categories = [
  [
    'title' => 'Кабели силовые',
    'url' => '#',
  ],
  [
    'title' => 'Кабели информационные',
    'url' => '#',
  ],
  [
    'title' => 'Подбор кабеля',
    'url' => '#',
  ],
  [
    'title' => 'Спецкабель',
    'url' => '#',
  ],
  [
    'title' => 'Кабели судовые',
    'url' => '#',
  ],
  [
    'title' => 'Кабели монтажные',
    'url' => '#',
  ],
  [
    'title' => 'Кабели сварочные',
    'url' => '#',
  ],
  [
    'title' => 'Кабели самонесущие',
    'url' => '#',
  ],
  [
    'title' => 'Кабели Витая пара',
    'url' => '#',
  ],
  [
    'title' => 'Кабели высоковольтные',
    'url' => '#',
  ],
//  [
//    'title' => 'Провода',
//    'url' => '#',
//  ],
];

$products = [
  /** кабели силовые */
  [
    [
      'category' => [
        'title' => 'Изоляция и оболочка',
        'url' => '#',
      ],
      'items' => [
        [
          'title' => 'С пластмассовой изоляцией',
          'url' => '#',],
        [
          'title' => 'С бумажной изоляцией БПИ',
          'url' => '#',],
        [
          'title' => 'С резиновой изоляцией',
          'url' => '#',],
        [
          'title' => 'С ПВХ оболочкой',
          'url' => '#',],
        [
          'title' => 'Безгалогенный',
          'url' => '#',],
        [
          'title' => 'С изоляцией из сшитого полиэтилена',
          'url' => '#',],
        [
          'title' => 'FRLS',
          'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'Часто ищут', 'url' => '#'],
      'items' => [
        ['title' => 'Экранированные', 'url' => '#',],
        ['title' => 'Бронированные', 'url' => '#',],
        ['title' => 'Огнестойкие', 'url' => '#',],
        ['title' => 'Негорючие', 'url' => '#',],
        ['title' => 'Морозостойкие', 'url' => '#',],
        ['title' => 'Плоские', 'url' => '#',],
        ['title' => 'Гибкие', 'url' => '#',],
        ['title' => 'С тросом', 'url' => '#',],
        ['title' => 'Сварочные', 'url' => '#',],
        ['title' => 'Без брони', 'url' => '#',],
        ['title' => 'Для питания', 'url' => '#',],
        ['title' => 'Для проводки', 'url' => '#',],
        ['title' => 'Для освещения', 'url' => '#',],],
    ],
    [
      'category' => ['title' => 'Популярные марки ', 'url' => '#',],
      'items' => [
        ['title' => 'ВВГНГ', 'url' => '#',],
        ['title' => 'ВВГ', 'url' => '#',],
        ['title' => 'ВВГнг(А)-LS', 'url' => '#',],
        ['title' => 'АВВГнг(А)-LS', 'url' => '#',],
        ['title' => 'ВВГ-Пнг(А)', 'url' => '#',],
        ['title' => 'ВВГ-П', 'url' => '#',],
        ['title' => 'АВВГ', 'url' => '#',],
        ['title' => 'ВБбШв', 'url' => '#',],
        ['title' => 'ВБШвнг(А)-LS', 'url' => '#',],
        ['title' => 'NUM', 'url' => '#',],],
    ],
    [
      'category' => ['title' => 'По количеству жил', 'url' => '#',],
      'items' => [
        ['title' => 'Одножильные', 'url' => '#',],
        ['title' => 'Двухжильные', 'url' => '#',],
        ['title' => 'Трехжильные', 'url' => '#',],
        ['title' => 'Четырехжильные', 'url' => '#',],
        ['title' => 'Пятижильные', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'Материал жилы', 'url' => '#',],
      'items' => [
        ['title' => 'Алюминиевые силовые', 'url' => '#',],
        ['title' => 'Медные силовые', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'По напряжению ', 'url' => '#',],
      'items' => [
        ['title' => '1 кВ', 'url' => '#',],
        ['title' => '6 кВ', 'url' => '#',],
        ['title' => '10 кВ', 'url' => '#',],
        ['title' => '35 кВ', 'url' => '#',],
        ['title' => '110 кВ', 'url' => '#',],],
    ],
  ],
  /** кабели информационные */
  [
    [
      'category' => ['title' => 'Контрольные', 'url' => '#',],
      'items' => [
        ['title' => 'Все контрольные кабели', 'url' => '#',],
        ['title' => 'КВВГ', 'url' => '#',],
        ['title' => 'КВВГЭ', 'url' => '#',],
        ['title' => 'КВВГнг(А)', 'url' => '#',],
        ['title' => 'КВВГЭнг(А)-LS', 'url' => '#',],
        ['title' => 'КВВГнг(А)-LS', 'url' => '#',],
        ['title' => 'КВБбШв', 'url' => '#',],
        ['title' => 'КППГнг(А)-HF', 'url' => '#',],
        ['title' => 'КВБбШвнг(А)', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'Управления', 'url' => '#',],
      'items' => [
        ['title' => 'Все кабели управления', 'url' => '#',],
        ['title' => 'КУПЭВ', 'url' => '#',],
        ['title' => 'КПВ', 'url' => '#',],
        ['title' => 'КУГВВ', 'url' => '#',],
        ['title' => 'КУПВ', 'url' => '#',],
        ['title' => 'КУПР', 'url' => '#',],
        ['title' => 'КУПЭВнг(А)-LS-ХЛ', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'Часто ищут', 'url' => '#',],
      'items' => [
        ['title' => 'Высокочастотные', 'url' => '#',],
        ['title' => 'Для компьютерных сетей', 'url' => '#',],
        ['title' => 'Радиочастотные', 'url' => '#',],
        ['title' => 'Кабели связи', 'url' => '#',],
        ['title' => 'Витая пара', 'url' => '#',],
        ['title' => 'Сетевые', 'url' => '#',],
        ['title' => 'Слаботочные', 'url' => '#',],
        ['title' => 'Симметричные', 'url' => '#',],
        ['title' => 'Антенные', 'url' => '#',],
        ['title' => 'Кабели FTP', 'url' => '#',],
        ['title' => 'Кабели UTP', 'url' => '#',],
      ],
    ],
  ],
  /** подбор кабеля */
  [
    [
      'category' => ['title' => 'По назначению', 'url' => '#'],
      'items' => [
        ['title' => 'Шахтные', 'url' => '#'],
        ['title' => 'Монтажные', 'url' => '#'],
        ['title' => 'Универсальные', 'url' => '#'],
        ['title' => 'Автомобильные', 'url' => '#'],
        ['title' => 'Сварочные', 'url' => '#'],
        ['title' => 'Подводные', 'url' => '#'],
        ['title' => 'Для пожарной и охранной сигнализации', 'url' => '#'],
        ['title' => 'Для сигнализации и блокировки', 'url' => '#'],
        ['title' => 'Для автоматизации систем управления', 'url' => '#'],
        ['title' => 'Водопогружные', 'url' => '#'],
        ['title' => 'Высоковольтные', 'url' => '#'],
        ['title' => 'Для локальной сети', 'url' => '#'],
      ],
    ],
    [
      'category' => ['title' => 'По свойствам', 'url' => '#',],
      'items' => [
        ['title' => 'Медные', 'url' => '#',],
        ['title' => 'Алюминиевые', 'url' => '#',],
        ['title' => 'Бронированные', 'url' => '#',],
        ['title' => 'Экранированные', 'url' => '#',],
        ['title' => 'Неэкранированные', 'url' => '#',],
        ['title' => 'Кабели с тросом', 'url' => '#',],
        ['title' => 'Водопогружные', 'url' => '#',],
        ['title' => 'Самонесущие', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'По исполнению', 'url' => '#',],
      'items' => [
        ['title' => 'Огнестойкие', 'url' => '#',],
        ['title' => 'Морозостойкие', 'url' => '#',],
        ['title' => 'Не распространяющие горение', 'url' => '#',],
        ['title' => 'Безгалогеновые', 'url' => '#',],
        ['title' => 'Плоские', 'url' => '#',],
        ['title' => 'Герметичные', 'url' => '#',],
        ['title' => 'Водонепроницаемые', 'url' => '#',],
        ['title' => 'Тропические', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'По количеству жил', 'url' => '#',],
      'items' => [
        ['title' => 'Одножильные', 'url' => '#',],
        ['title' => 'Двухжильные', 'url' => '#',],
        ['title' => 'Трехжильные', 'url' => '#',],
        ['title' => 'Четырехжильные', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'По зоне прокладки', 'url' => '#',],
      'items' => [
        ['title' => 'Для воздушной прокладки', 'url' => '#',],
        ['title' => 'Для внутренней прокладки', 'url' => '#',],
        ['title' => 'Для внешней прокладки', 'url' => '#',],
        ['title' => 'Для подземной прокладки', 'url' => '#',],
        ['title' => 'Подобрать по другим', 'url' => '#',],
      ],
    ],
  ],
  /** спец кабель */
  [
    [
      'category' => [
        'title' => 'Кабель для Минобороны РФ',
        'url' => '#',
      ],
    ],
  ],
  /** кабели судовые */
  [
    [
      'category' => ['title' => 'Все судовые кабели', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВЭ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПЭВ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПЭВЭ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВЭВ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КНР', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КНРЭ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КСНРТЭл', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КСРТнг(А)', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'МРШМ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'МРШНЭ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'НГРШМ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'НРШМ', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'НРШМЭнг(С)-FRHF', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВнг(А)-LS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВЭВнг(А)-LS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВЭнг(А)-LS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВВЭВнг(А)-FRLS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВВЭнг(А)-FRLS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВЭВнг(А)-FRLS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПВЭВЭВнг(А)-FRLS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПЭВнг(А)-LS', 'url' => '#',],
    ],
    [
      'category' => ['title' => 'КМПЭВЭВнг(А)-LS', 'url' => '#',],
    ],
  ],
  /** кабели монтажные */
  [
    ['category' => ['title' => 'Все монтажные кабели', 'url' => '#'],],
    ['category' => ['title' => 'КУПсЭВнг(А)-FRLS', 'url' => '#'],],
    ['category' => ['title' => 'КУПсЭВнг(А)-LS', 'url' => '#'],],
    ['category' => ['title' => 'КУПсЭПнг(А)-FRHF', 'url' => '#'],],
    ['category' => ['title' => 'КУПсЭПнг(А)-HF', 'url' => '#'],],
    ['category' => ['title' => 'КУПсЭПнг(А)-HF-ХЛ', 'url' => '#'],],
    ['category' => ['title' => 'КЭВВнг(А)-LS', 'url' => '#'],],
    ['category' => ['title' => 'КЭВЭВнг(А)-LS', 'url' => '#'],],
  ],
  /** кабели сварочные */
  [
    ['category' => ['title' => 'Все сварочные кабели', 'url' => '#'],],
    ['category' => ['title' => 'КГ', 'url' => '#'],],
    ['category' => ['title' => 'КГ-ХЛ', 'url' => '#'],],
    ['category' => ['title' => 'КГН', 'url' => '#'],],
    ['category' => ['title' => 'КОГ1', 'url' => '#'],],
    ['category' => ['title' => 'КОГ1-ХЛ', 'url' => '#'],],
  ],
  /** кабели самонесущие */
  [
    ['category' => ['title' => 'Все самонесущие кабели', 'url' => '#',],],
    ['category' => ['title' => 'АПвПТи', 'url' => '#',],],
    ['category' => ['title' => 'АПвПгТп', 'url' => '#',],],
  ],
  /** кабели витая пара */
  [
    [
      'category' => ['title' => 'Все кабели Витая пара', 'url' => '#'],
      'items' => [
        ['title' => 'КИПвЭВнг(А)-LS', 'url' => '#'],
        ['title' => 'КСПвЭнг(А)-HF', 'url' => '#'],
        ['title' => 'Лоутокс КПСВВнг(А)-LSLTx', 'url' => '#'],
        ['title' => 'СПЕЦЛАН FTP-5нг(А)-FRHF', 'url' => '#'],
        ['title' => 'СПЕЦЛАН UTP-3нг(А)-FRLSLTx', 'url' => '#'],
      ],
    ],
    [
      'category' => ['title' => 'Витая пара категории 5е', 'url' => '#'],
      'items' => [
        ['title' => 'КВПГЭфнг(А)-5e-БГ', 'url' => '#'],
        ['title' => 'КВПМЭКГнг(А)-5е-БГ', 'url' => '#'],
        ['title' => 'КВПМЭКнг(А)-5е-БГ', 'url' => '#'],
        ['title' => 'КВПМЭнг(А)-5е-БГ', 'url' => '#'],
        ['title' => 'КВПМЭУКГнг(А)-5е-БГ', 'url' => '#'],
        ['title' => 'КВПМЭУКнг(А)-5е-БГ', 'url' => '#'],
        ['title' => 'КВПМЭУнг(А)-5е-БГ', 'url' => '#'],
        ['title' => 'Лоутокс КВПнг(C)-LSLTx-5e', 'url' => '#'],
        ['title' => 'СПЕЦЛАН F/UTP Cat 5e PVC', 'url' => '#'],
      ],
    ],
    [
      'category' => ['title' => 'Витая пара категории 6', 'url' => '#'],
      'items' => [
        ['title' => 'КВПЭГ-6нг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭГКГ-6нг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭГУ-6нг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭГУКГ-6нг(А)-БГ', 'url' => '#'],
      ],
    ],
    [
      'category' => ['title' => 'Витая пара категории 7', 'url' => '#'],
      'items' => [
        ['title' => 'КВПЭ-7нг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭУ-7нг(А)-БГ', 'url' => '#'],
      ],
    ],
    [
      'category' => ['title' => 'Витая пара категории 6А', 'url' => '#'],
      'items' => [
        ['title' => 'КВПМЭ-6Анг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПМЭКГ-6Анг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПМЭУ-6Анг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПМЭУКГ-6Анг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭКГнг(А)-6A-БГ', 'url' => '#'],
        ['title' => 'КВПЭнг(А)-6A-БГ', 'url' => '#'],
      ],
    ],
    [
      'category' => ['title' => 'Витая пара категории 7А', 'url' => '#'],
      'items' => [
        ['title' => 'КВПЭ-7Aнг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭКГ-7Aнг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭУ-7Aнг(А)-БГ', 'url' => '#'],
        ['title' => 'КВПЭУКГ-7Aнг(А)-БГ', 'url' => '#'],
      ],
    ],
  ],
  /** кабели высоковольтные */
  [
    [
      'category' => ['title' => 'Все высоковольтные кабели', 'url' => '#',],
      'items' => [
        ['title' => '64 кВ', 'url' => '#',],
        ['title' => '110 кВ', 'url' => '#',],
        ['title' => '220 кВ', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'С алюминиевой жилой', 'url' => '#',],
      'items' => [
        ['title' => 'АПвВ', 'url' => '#',],
        ['title' => 'АПвВнг(А)', 'url' => '#',],
        ['title' => 'АПвКП2г', 'url' => '#',],
        ['title' => 'АПвКПг', 'url' => '#',],
        ['title' => 'АПвПг', 'url' => '#',],
        ['title' => 'АПвПу2г', 'url' => '#',],
        ['title' => 'АПвПуг', 'url' => '#',],
      ],
    ],
    [
      'category' => ['title' => 'С медной жилой', 'url' => '#',],
      'items' => [
        ['title' => 'ПвВ', 'url' => '#',],
        ['title' => 'ПвВнг(А)', 'url' => '#',],
        ['title' => 'ПвВнг(А)-LS', 'url' => '#',],
        ['title' => 'ПвКПг', 'url' => '#',],
        ['title' => 'ПвП2г', 'url' => '#',],
        ['title' => 'ПвПг', 'url' => '#',],
        ['title' => 'ПвПнг(А)-HF', 'url' => '#',],
      ],
    ],
  ],
];
?>

<div data-modal="catalog" class="modalCatalog">
  <div class="modalCatalogContainer">
    <div class="modalCatalogAside">
      <?php $index = 0;
      foreach ($categories as $category):
        $title = $category['title'];
        $url = $category['url'];
        /** По умолчанию первый элемент активен, остальные скрыты */
        $additionalCSS = $index === 0 ? '_active' : ''; ?>
        <a href="<?= $url ?>" class="modalCatalogCategory <?= $additionalCSS ?>">
          <?= $title ?>
          <span class="iconfont icon-arrow-right"></span>
        </a>
        <?php $index++;
      endforeach;
      unset($index); ?>
    </div>
    <div class="modalCatalogBody">
      <?php $index = 0;
      foreach ($products as $groups):
        /** По умолчанию первый элемент активен, остальные скрыты */
        $additionalCSS = $index === 0 ? '_active' : ''; ?>
        <div class="modalCatalogProducts <?= $additionalCSS ?>">
          <?php foreach ($groups as $group):
            $category = $group['category'];
            $categoryTitle = $category['title'];
            $categoryUrl = $category['url'];
            $items = $group['items'] ?? []; ?>
            <div class="modalCatalogProductsGroup">
              <a href="<?= $categoryUrl ?>" class="modalCatalogProductsGroupTitle">
                <?= $categoryTitle ?>
              </a>
              <div class="modalCatalogProductsGroupList">
                <?php foreach ($items as $item):
                  $title = $item['title'];
                  $url = $item['url']; ?>
                  <a href="<?= $url ?>" class="modalCatalogProduct">
                    <?= $title ?>
                  </a>
                <?php endforeach; ?>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
        <?php $index++;
      endforeach;
      unset($index); ?>
    </div>
  </div>
</div>
<div class="modalCatalogOverlay" data-modal-overlay="catalog"></div>
