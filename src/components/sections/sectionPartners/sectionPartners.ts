import Swiper from 'swiper'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import { A11y, FreeMode, Navigation, Pagination } from 'swiper/modules'
import { Fancybox } from '@fancyapps/ui'

document.addEventListener('DOMContentLoaded', () => {
  Fancybox.bind('[data-fancybox]', {
    Thumbs: {
      type: 'classic',
    },
  })

  new Swiper('[data-section-partners=slider]' as CSSSelector, {
    modules: [
      Navigation,
      A11y,
      Pagination,
      FreeMode
    ],
    loop: false,
    speed: 333,
    grabCursor: true,
    slidesPerView: 1.25,
    spaceBetween: 16,
    navigation: {
      nextEl: '[data-section-partners=slider] .swiper-button-next',
      prevEl: '[data-section-partners=slider] .swiper-button-prev',
      enabled: true,
    },
    pagination: {
      el: '[data-section-partners=slider] .swiper-pagination',
      clickable: true,
    },
    freeMode: {
      enabled: true,
      momentum: true,
      sticky: true,
    },
    breakpoints: {
      0: { slidesPerView: 1.5, },
      375: { slidesPerView: 1.75, },
      540: { slidesPerView: 2.5, },
      768: { slidesPerView: 3, },
      1024: { slidesPerView: 4, },
      1366: { slidesPerView: 4.5, },
      1920: { slidesPerView: 5, }
    }
  } as SwiperOptions)
}, {
  passive: true,
  once: true,
})
