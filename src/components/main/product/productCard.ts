import Swiper from 'swiper'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import { A11y, Mousewheel, Navigation, Pagination } from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {
  new Swiper('[data-product-card=slider] ' as CSSSelector, {
    modules: [
      Navigation,
      A11y,
      Pagination,
      Mousewheel,
    ],
    loop: true,
    speed: 333,
    grabCursor: false,
    slidesPerView: 1,
    spaceBetween: 16,
    navigation: {
      nextEl: '[data-product-card=slider] .swiper-button-next',
      prevEl: '[data-product-card=slider] .swiper-button-prev',
      enabled: false,
    },
    pagination: {
      el: '[data-product-card=slider] .swiper-pagination',
      clickable: true,
    },
    mousewheel: false,
    breakpoints: {
      1024: {
        navigation: { enabled: true, },
        mousewheel: { releaseOnEdges: true, },
      },
      1280: {
        navigation: { enabled: true, },
        mousewheel: { releaseOnEdges: true, },
      },
      1920: {
        navigation: { enabled: true, },
        mousewheel: { releaseOnEdges: true, },
      },
    },
  } as SwiperOptions)
}, {
  passive: true,
  once: true,
})
