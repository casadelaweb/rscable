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
  [
    'title' => 'Провода',
    'url' => '#',
  ],
];
?>

<div data-modal="catalog" class="modalCatalog _active">
  <div class="modalCatalogContainer">
    <div class="modalCatalogAside">
      <?php foreach ($categories as $category):
        $title = $category['title'];
        $url = $category['url'];
        ?>
        <div class="modalCatalogCategory">
          <?= $title ?>
          <span class="iconfont icon-arrow-right"></span>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="modalCatalogBody">
      <div class="modalCatalogProducts">
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Изоляция и оболочка">
            <span class="name option-font-bold">Изоляция и оболочка</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_silovye_s_plastmassovoy_izolyatsiey/"
                title="С пластмассовой изоляцией" style="white-space: normal;">
                С пластмассовой изоляцией
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_silovye_s_bumazhnoy_izolyatsiey/"
                title="С бумажной изоляцией БПИ" style="white-space: normal;">
                С бумажной изоляцией БПИ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_silovye_s_rezinovoy_izolyatsiey/"
                title="С резиновой изоляцией" style="white-space: normal;">
                С резиновой изоляцией
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabel_silovoy_s_pvkh_obolochkoy/"
                 title="С ПВХ оболочкой" style="white-space: normal;">
                С ПВХ оболочкой
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabel_silovoy_hf_bezgalogennyy/"
                 title="Безгалогенный" style="white-space: normal;">
                Безгалогенный
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/silovoy_kabel_s_izolyatsiey_iz_sshitogo_polietilena/"
                title="С изоляцией из сшитого полиэтилена" style="white-space: normal;">
                С изоляцией из сшитого полиэтилена
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabel_silovoy_frls/" title="FRLS"
                 style="white-space: normal;">
                FRLS
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Часто ищут">
            <span class="name option-font-bold">Часто ищут</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/ekranirovannye_silovye_kabeli/"
                 title="Экранированные" style="white-space: normal;">
                Экранированные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/bronirovannye_silovye_kabeli/"
                 title="Бронированные" style="white-space: normal;">
                Бронированные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/ognestoykie_silovye_kabeli/"
                 title="Огнестойкие" style="white-space: normal;">
                Огнестойкие
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_silovye_negoryuchie/"
                 title="Негорючие" style="white-space: normal;">
                Негорючие
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_silovye_morozostoykie/"
                 title="Морозостойкие" style="white-space: normal;">
                Морозостойкие
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/ploskiy_silovoy_kabel/"
                 title="Плоские" style="white-space: normal;">
                Плоские
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabel_silovoy_gibkiy/" title="Гибкие"
                 style="white-space: normal;">
                Гибкие
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovoy_kabel_s_trosom/"
                 title="С тросом" style="white-space: normal;">
                С тросом
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabel_silovoy_svarochnyy/"
                 title="Сварочные" style="white-space: normal;">
                Сварочные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_silovye_bez_broni/"
                 title="Без брони" style="white-space: normal;">
                Без брони
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_pitaniya/" title="Для питания"
                 style="white-space: normal;">
                Для питания
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dlya_provodki/"
                 title="Для проводки" style="white-space: normal;">
                Для проводки
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dlya_osveshcheniya/"
                 title="Для освещения" style="white-space: normal;">
                Для освещения
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Популярные марки">
            <span class="name option-font-bold">Популярные марки</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vvgng_a/" title="ВВГНГ"
                 style="white-space: normal;">
                ВВГНГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vvg/" title="ВВГ"
                 style="white-space: normal;">
                ВВГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vvgng_a_ls/"
                 title="ВВГнг(А)-LS" style="white-space: normal;">
                ВВГнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_avvgng_a_ls/"
                 title="АВВГнг(А)-LS" style="white-space: normal;">
                АВВГнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vvg_png_a/" title="ВВГ-Пнг(А)"
                 style="white-space: normal;">
                ВВГ-Пнг(А)
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vvg_p/" title="ВВГ-П"
                 style="white-space: normal;">
                ВВГ-П
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_avvg/" title="АВВГ"
                 style="white-space: normal;">
                АВВГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vbbshv/" title="ВБбШв"
                 style="white-space: normal;">
                ВБбШв
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vbshvng_a_ls/"
                 title="ВБШвнг(А)-LS" style="white-space: normal;">
                ВБШвнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_num/" title="NUM"
                 style="white-space: normal;">
                NUM
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По количеству жил">
            <span class="name option-font-bold">По количеству жил</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/odnozhilnye_silovye_kabeli/"
                 title="Одножильные" style="white-space: normal;">
                Одножильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/dvukhzhilnye_silovye_kabeli/"
                 title="Двухжильные" style="white-space: normal;">
                Двухжильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/trekhzhilnye_silovye_kabeli/"
                 title="Трехжильные" style="white-space: normal;">
                Трехжильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/chetyrekhzhilnye_silovye_kabeli/"
                 title="Четырехжильные" style="white-space: normal;">
                Четырехжильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/pyatizhilnye_silovye_kabeli/"
                 title="Пятижильные" style="white-space: normal;">
                Пятижильные
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Материал жилы">
            <span class="name option-font-bold">Материал жилы</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/alyuminievye_silovye_kabeli/"
                 title="Алюминиевые силовые" style="white-space: normal;">
                Алюминиевые силовые
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/mednye_silovye_kabeli/"
                 title="Медные силовые" style="white-space: normal;">
                Медные силовые
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По напряжению">
            <span class="name option-font-bold">По напряжению</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_1_kv/" title="1 кВ"
                 style="white-space: normal;">
                1 кВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_6_kv/" title="6 кВ"
                 style="white-space: normal;">
                6 кВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_10_kv/" title="10 кВ"
                 style="white-space: normal;">
                10 кВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_35_kv/" title="35 кВ"
                 style="white-space: normal;">
                35 кВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_110_kv/" title="110 кВ"
                 style="white-space: normal;">
                110 кВ
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="modalCatalogProducts">
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Контрольные">
            <span class="name option-font-bold">Контрольные</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kontrolnye/"
                 title="Все контрольные кабели">
                Все контрольные кабели
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvvg/" title="КВВГ">
                КВВГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvvge/" title="КВВГЭ">
                КВВГЭ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvvgng_a/" title="КВВГнг(А)">
                КВВГнг(А)
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvvgeng_a_ls/"
                 title="КВВГЭнг(А)-LS">
                КВВГЭнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvvgng_a_ls/"
                 title="КВВГнг(А)-LS">
                КВВГнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvbbshv/" title="КВБбШв">
                КВБбШв
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kppgng_a_hf/"
                 title="КППГнг(А)-HF">
                КППГнг(А)-HF
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvbbshvng_a/"
                 title="КВБбШвнг(А)">
                КВБбШвнг(А)
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="https://rscable.ru/catalog/kabeli_upravleniya/" title="Управления">
            <span class="name option-font-bold">Управления</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_upravleniya/"
                 title="Все кабели управления">
                Все кабели управления
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kupev/" title="КУПЭВ">
                КУПЭВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kpv/" title="КПВ">
                КПВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kugvv/" title="КУГВВ">
                КУГВВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kupv/" title="КУПВ">
                КУПВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kupr/" title="КУПР">
                КУПР
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kupevng_a_ls_khl/"
                 title="КУПЭВнг(А)-LS-ХЛ">
                КУПЭВнг(А)-LS-ХЛ
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Часто ищут">
            <span class="name option-font-bold">Часто ищут</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vysokochastotnye/"
                 title="Высокочастотные">
                Высокочастотные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dlya_kompyuternykh_setey/"
                 title="Для компьютерных сетей">
                Для компьютерных сетей
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_radiochastotnye/"
                 title="Радиочастотные">
                Радиочастотные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_svyazi/" title="Кабели связи">
                Кабели связи
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vitaya_para/"
                 title="Витая пара">
                Витая пара
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_setevye/" title="Сетевые">
                Сетевые
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_slabotochnye/"
                 title="Слаботочные">
                Слаботочные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_simmetrichnye/"
                 title="Симметричные">
                Симметричные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_antennye/" title="Антенные">
                Антенные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_ftp/" title="Кабели FTP">
                Кабели FTP
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_utp/" title="Кабели UTP">
                Кабели UTP
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="modalCatalogProducts">
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По назначению">
            <span class="name option-font-bold">По назначению</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_shakhtnye/" title="Шахтные">
                Шахтные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_montazhnye/" title="Монтажные">
                Монтажные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_universalnye/"
                 title="Универсальные">
                Универсальные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_avtomobilnye/"
                 title="Автомобильные">
                Автомобильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_svarochnye/" title="Сварочные">
                Сварочные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_podvodnye/" title="Подводные">
                Подводные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_dlya_sistem_pozharnoy_i_okhrannoy_signalizatsii/"
                title="Для пожарной и охранной сигнализации">
                Для пожарной и охранной сигнализации
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_dlya_signalizatsii_i_blokirovki/"
                title="Для сигнализации и блокировки">
                Для сигнализации и блокировки
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_dlya_promyshlennoy_avtomatizatsii_i_sistem_upravleniya/"
                title="Для автоматизации систем управления ">
                Для автоматизации систем управления
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vodopogruzhnye/"
                 title="Водопогружные">
                Водопогружные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vysokovoltnye/"
                 title="Высоковольтные">
                Высоковольтные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vitaya_para/"
                 title="Для локальной сети">
                Для локальной сети
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По свойствам">
            <span class="name option-font-bold">По свойствам</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/mednye_kabeli/" title="Медные">
                Медные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/alyuminievye_kabeli/"
                 title="Алюминиевые">
                Алюминиевые
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/bronirovannye_kabeli/"
                 title="Бронированные">
                Бронированные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_ekranirovannye/"
                 title="Экранированные">
                Экранированные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_ekranirovannye/"
                 title="Неэкранированные">
                Неэкранированные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_s_trosom/"
                 title="Кабели с тросом">
                Кабели с тросом
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vodopogruzhnye/"
                 title="Водопогружные">
                Водопогружные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_samonesushchie/"
                 title="Самонесущие">
                Самонесущие
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По исполнению">
            <span class="name option-font-bold">По исполнению</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_ognestoykie_fr/"
                 title="Огнестойкие">
                Огнестойкие
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_morozostoykie/"
                 title="Морозостойкие">
                Морозостойкие
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/catalog/kabeli_ne_rasprostranyayushchie_gorenie_ng/"
                title="Не распространяющие горение">
                Не распространяющие горение
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_bezgalogenovye_hf/"
                 title="Безгалогеновые">
                Безгалогеновые
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_ploskie/" title="Плоские">
                Плоские
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_germetichnye/"
                 title="Герметичные">
                Герметичные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_vodonepronitsaemye/"
                 title="Водонепроницаемые">
                Водонепроницаемые
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/tropicheskie_kabeli/"
                 title="Тропические">
                Тропические
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По количеству жил">
            <span class="name option-font-bold">По количеству жил</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_odnozhilnye/"
                 title="Одножильные">
                Одножильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dvukhzhilnye/"
                 title="Двухжильные">
                Двухжильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_trekhzhilnye/"
                 title="Трехжильные">
                Трехжильные
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_chetyrekhzhilnye/"
                 title="Четырехжильные">
                Четырехжильные
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="По зоне прокладки">
            <span class="name option-font-bold">По зоне прокладки</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dlya_vozdushnoy_prokladki/"
                 title="Для воздушной прокладки">
                Для воздушной прокладки
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dlya_vnutrenney_prokladki/"
                 title="Для внутренней прокладки">
                Для внутренней прокладки
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_dlya_naruzhnoy_prokladki/"
                 title="Для внешней прокладки">
                Для внешней прокладки
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_podzemnye/"
                 title="Для подземной прокладки">
                Для подземной прокладки
              </a>
            </li>
          </ul>
        </div>
        <li class="   ">
          <a href="https://rscable.ru/podbor/"
             title="Подобрать по другим характеристикам >>">
            <span class="name option-font-bold">Подобрать по другим характеристикам &gt;&gt;
            </span>
          </a>
        </li>
      </div>
      <div class="modalCatalogProducts">
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabel_dlya_minoborony_rf/"
             title="Кабель для Минобороны РФ">
            <span class="name option-font-bold">Кабель для Минобороны РФ</span>
          </a>
        </li>
      </div>
      <div class="modalCatalogProducts">
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_sudovye/"
             title="Все судовые кабели">
            <span class="name option-font-bold">Все судовые кабели</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpv/" title="КМПВ">
            <span class="name option-font-bold">КМПВ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpve/" title="КМПВЭ">
            <span class="name option-font-bold">КМПВЭ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpev/" title="КМПЭВ">
            <span class="name option-font-bold">КМПЭВ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpeve/" title="КМПЭВЭ">
            <span class="name option-font-bold">КМПЭВЭ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvev/" title="КМПВЭВ">
            <span class="name option-font-bold">КМПВЭВ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_knr/" title="КНР">
            <span class="name option-font-bold">КНР</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_knre/" title="КНРЭ">
            <span class="name option-font-bold">КНРЭ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_ksnrtel/" title="КСНРТЭл">
            <span class="name option-font-bold">КСНРТЭл</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_ksrtng_a/" title="КСРТнг(А)">
            <span class="name option-font-bold">КСРТнг(А)</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_mrshm/" title="МРШМ">
            <span class="name option-font-bold">МРШМ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_mrshne/" title="МРШНЭ">
            <span class="name option-font-bold">МРШНЭ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_ngrshm/" title="НГРШМ">
            <span class="name option-font-bold">НГРШМ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_nrshm/" title="НРШМ">
            <span class="name option-font-bold">НРШМ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_nrshmeng_s_frhf/"
             title="НРШМЭнг(С)-FRHF">
            <span class="name option-font-bold">НРШМЭнг(С)-FRHF</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvng_a_ls/" title="КМПВнг(А)-LS">
            <span class="name option-font-bold">КМПВнг(А)-LS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvevng_a_ls/"
             title="КМПВЭВнг(А)-LS">
            <span class="name option-font-bold">КМПВЭВнг(А)-LS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpveng_a_ls/"
             title="КМПВЭнг(А)-LS">
            <span class="name option-font-bold">КМПВЭнг(А)-LS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvvevng_a_frls/"
             title="КМПВВЭВнг(А)-FRLS">
            <span class="name option-font-bold">КМПВВЭВнг(А)-FRLS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvveng_a_frls/"
             title="КМПВВЭнг(А)-FRLS">
            <span class="name option-font-bold">КМПВВЭнг(А)-FRLS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvevng_a_frls/"
             title="КМПВЭВнг(А)-FRLS">
            <span class="name option-font-bold">КМПВЭВнг(А)-FRLS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpvevevng_a_frls/"
             title="КМПВЭВЭВнг(А)-FRLS">
            <span class="name option-font-bold">КМПВЭВЭВнг(А)-FRLS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpevng_a_ls/"
             title="КМПЭВнг(А)-LS">
            <span class="name option-font-bold">КМПЭВнг(А)-LS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kmpevevng_a_ls/"
             title="КМПЭВЭВнг(А)-LS">
            <span class="name option-font-bold">КМПЭВЭВнг(А)-LS</span>
          </a>
        </li>
      </div>
      <div class="modalCatalogProducts">
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_montazhnye/"
             title="Все монтажные кабели">
            <span class="name option-font-bold">Все монтажные кабели</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kupsevng_a_frls/"
             title="КУПсЭВнг(А)-FRLS">
            <span class="name option-font-bold">КУПсЭВнг(А)-FRLS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kupsevng_a_ls/"
             title="КУПсЭВнг(А)-LS">
            <span class="name option-font-bold">КУПсЭВнг(А)-LS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kupsepng_a_frhf/"
             title="КУПсЭПнг(А)-FRHF">
            <span class="name option-font-bold">КУПсЭПнг(А)-FRHF</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kupsepng_a_hf/"
             title="КУПсЭПнг(А)-HF">
            <span class="name option-font-bold">КУПсЭПнг(А)-HF</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kupsepng_a_hf_khl/"
             title="КУПсЭПнг(А)-HF-ХЛ">
            <span class="name option-font-bold">КУПсЭПнг(А)-HF-ХЛ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kevvng_a_ls/" title="КЭВВнг(А)-LS">
            <span class="name option-font-bold">КЭВВнг(А)-LS</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kevevng_a_ls/"
             title="КЭВЭВнг(А)-LS">
            <span class="name option-font-bold">КЭВЭВнг(А)-LS</span>
          </a>
        </li>
      </div>
      <div class="modalCatalogProducts">
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_svarochnye/"
             title="Все сварочные кабели">
            <span class="name option-font-bold">Все сварочные кабели</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kg/" title="КГ">
            <span class="name option-font-bold">КГ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kg_khl/" title="КГ-ХЛ">
            <span class="name option-font-bold">КГ-ХЛ</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kgn/" title="КГН">
            <span class="name option-font-bold">КГН</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kog1/" title="КОГ1">
            <span class="name option-font-bold">КОГ1</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_kog1_khl/" title="КОГ1-ХЛ">
            <span class="name option-font-bold">КОГ1-ХЛ</span>
          </a>
        </li>
      </div>
      <div class="modalCatalogProducts">
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_samonesushchie/"
             title="Все самонесущие кабели">
            <span class="name option-font-bold">Все самонесущие кабели</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_apvpti/" title="АПвПТи">
            <span class="name option-font-bold">АПвПТи</span>
          </a>
        </li>
        <li class="   ">
          <a href="https://rscable.ru/catalog/kabeli_apvpgtp/" title="АПвПгТп">
            <span class="name option-font-bold">АПвПгТп</span>
          </a>
        </li>
      </div>
      <div class="modalCatalogProducts">
        <div class="modalCatalogProductsGroup">
          <a href="https://rscable.ru/catalog/kabeli_vitaya_para/"
             title="Все кабели Витая пара">
            <span class="name option-font-bold">Все кабели Витая пара</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kipvevng_a_ls/"
                 title="КИПвЭВнг(А)-LS">
                КИПвЭВнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kspveng_a_hf/"
                 title="КСПвЭнг(А)-HF">
                КСПвЭнг(А)-HF
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_loutoks_kpsvvng_a_lsltx/"
                 title="Лоутокс КПСВВнг(А)-LSLTx">
                Лоутокс КПСВВнг(А)-LSLTx
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_spetslan_ftp_5ng_a_frhf/"
                 title="СПЕЦЛАН FTP-5нг(А)-FRHF">
                СПЕЦЛАН FTP-5нг(А)-FRHF
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_spetslan_utp_3ng_a_frlsltx/"
                 title="СПЕЦЛАН UTP-3нг(А)-FRLSLTx">
                СПЕЦЛАН UTP-3нг(А)-FRLSLTx
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Витая пара категории 5е">
            <span class="name option-font-bold">Витая пара категории 5е</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpgefng_a_5e_bg/"
                 title="КВПГЭфнг(А)-5e-БГ">
                КВПГЭфнг(А)-5e-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmekgng_a_5e_bg/"
                 title="КВПМЭКГнг(А)-5е-БГ">
                КВПМЭКГнг(А)-5е-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmekng_a_5e_bg/"
                 title="КВПМЭКнг(А)-5е-БГ">
                КВПМЭКнг(А)-5е-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmeng_a_5e_bg/"
                 title="КВПМЭнг(А)-5е-БГ">
                КВПМЭнг(А)-5е-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmeukgng_a_5e_bg/"
                 title="КВПМЭУКГнг(А)-5е-БГ">
                КВПМЭУКГнг(А)-5е-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmeukng_a_5e_bg/"
                 title="КВПМЭУКнг(А)-5е-БГ">
                КВПМЭУКнг(А)-5е-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmeung_a_5e_bg/"
                 title="КВПМЭУнг(А)-5е-БГ">
                КВПМЭУнг(А)-5е-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_loutoks_kvpng_c_lsltx_5e/"
                 title="Лоутокс КВПнг(C)-LSLTx-5e">
                Лоутокс КВПнг(C)-LSLTx-5e
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/utp_cat_5e_pvc1/"
                 title="СПЕЦЛАН F/UTP Cat 5e PVC">
                СПЕЦЛАН F/UTP Cat 5e PVC
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Витая пара категории 6">
            <span class="name option-font-bold">Витая пара категории 6</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpeg_6ng_a_bg/"
                 title="КВПЭГ-6нг(А)-БГ">
                КВПЭГ-6нг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpegkg_6ng_a_bg/"
                 title="КВПЭГКГ-6нг(А)-БГ">
                КВПЭГКГ-6нг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpegu_6ng_a_bg/"
                 title="КВПЭГУ-6нг(А)-БГ">
                КВПЭГУ-6нг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpegukg_6ng_a_bg/"
                 title="КВПЭГУКГ-6нг(А)-БГ">
                КВПЭГУКГ-6нг(А)-БГ
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Витая пара категории 6А">
            <span class="name option-font-bold">Витая пара категории 6А</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpme_6ang_a_bg/"
                 title="КВПМЭ-6Анг(А)-БГ">
                КВПМЭ-6Анг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmekg_6ang_a_bg/"
                 title="КВПМЭКГ-6Анг(А)-БГ">
                КВПМЭКГ-6Анг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmeu_6ang_a_bg/"
                 title="КВПМЭУ-6Анг(А)-БГ">
                КВПМЭУ-6Анг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpmeukg_6ang_a_bg/"
                 title="КВПМЭУКГ-6Анг(А)-БГ">
                КВПМЭУКГ-6Анг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpekgng_a_6a_bg/"
                 title="КВПЭКГнг(А)-6A-БГ">
                КВПЭКГнг(А)-6A-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpeng_a_6a_bg/"
                 title="КВПЭнг(А)-6A-БГ">
                КВПЭнг(А)-6A-БГ
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Витая пара категории 7">
            <span class="name option-font-bold">Витая пара категории 7</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpe_7ng_a_bg/"
                 title="КВПЭ-7нг(А)-БГ">
                КВПЭ-7нг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpeu_7ng_a_bg/"
                 title="КВПЭУ-7нг(А)-БГ">
                КВПЭУ-7нг(А)-БГ
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="Витая пара категории 7А">
            <span class="name option-font-bold">Витая пара категории 7А</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpe_7ang_a_bg/"
                 title="КВПЭ-7Aнг(А)-БГ">
                КВПЭ-7Aнг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpekg_7ang_a_bg/"
                 title="КВПЭКГ-7Aнг(А)-БГ">
                КВПЭКГ-7Aнг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpeu_7ang_a_bg/"
                 title="КВПЭУ-7Aнг(А)-БГ">
                КВПЭУ-7Aнг(А)-БГ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_kvpeukg_7ang_a_bg/"
                 title="КВПЭУКГ-7Aнг(А)-БГ">
                КВПЭУКГ-7Aнг(А)-БГ
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="modalCatalogProducts">
        <div class="modalCatalogProductsGroup">
          <a href="https://rscable.ru/catalog/silovye_vysokovoltnye_kabeli/"
             title="Все высоковольтные кабели">
            <span class="name option-font-bold">Все высоковольтные кабели</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_64_kv/" title="64 кВ">
                64 кВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_110_kv/"
                 title="110 кВ">
                110 кВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/silovye_kabeli_220_kv/"
                 title="220 кВ">
                220 кВ
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="С алюминиевой жилой">
            <span class="name option-font-bold">С алюминиевой жилой</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_apvv/filter/volta-is-110-or-220-or-64-110/apply/"
                title="АПвВ">
                АПвВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_apvvng_a/" title="АПвВнг(А)">
                АПвВнг(А)
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_apvkp2g/filter/volta-is-110-or-220-or-64-110/apply/"
                title="АПвКП2г">
                АПвКП2г
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_apvkpg/filter/volta-is-110-or-220-or-64-110/apply/"
                title="АПвКПг">
                АПвКПг
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_apvpg/filter/volta-is-110-or-220-or-64-110/apply/"
                title="АПвПг">
                АПвПг
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_apvpu2g/filter/volta-is-110-or-220-or-64-110/apply/"
                title="АПвПу2г">
                АПвПу2г
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_apvpug/filter/volta-is-110-or-220-or-64-110/apply/"
                title="АПвПуг">
                АПвПуг
              </a>
            </li>
          </ul>
        </div>
        <div class="modalCatalogProductsGroup">
          <a href="#" title="С медной жилой">
            <span class="name option-font-bold">С медной жилой</span>
            <i class="svg right svg-inline-right" aria-hidden="true">
              <svg width="3" height="5">
                <use
                  xlink:href="/bitrix/templates/aspro_max/images/svg/trianglearrow_sprite.svg#trianglearrow_right"></use>
              </svg>
            </i>
          </a>
          <ul class="dropdown-menu toggle_menu">
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_pvv/filter/volta-is-110-or-220-or-64-110/apply/"
                title="ПвВ">
                ПвВ
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_pvvng_a/" title="ПвВнг(А)">
                ПвВнг(А)
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_pvvng_a_ls/filter/volta-is-110-or-220-or-64-110/apply/"
                title="ПвВнг(А)-LS">
                ПвВнг(А)-LS
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_pvkpg/filter/volta-is-110-or-220-or-64-110/apply/"
                title="ПвКПг">
                ПвКПг
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_pvp2g/filter/volta-is-110-or-220-or-64-110/apply/"
                title="ПвП2г">
                ПвП2г
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a
                href="https://rscable.ru/kabeli_silovye/kabeli_silovye_s_plastmassovoy_izolyatsiey/kabeli_pvpg/filter/volta-is-110-or-220-or-64-110/apply/"
                title="ПвПг">
                ПвПг
              </a>
            </li>
            <li class="modalCatalogProduct">
              <a href="https://rscable.ru/catalog/kabeli_pvpng_a_hf/"
                 title="ПвПнг(А)-HF">
                ПвПнг(А)-HF
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
