import Swiper from 'swiper'
import { Pagination } from 'swiper/modules'
import { CSSSelector, SwiperOptions } from 'swiper/types'

document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.product-gallery-slider' as CSSSelector, {
    enabled: true,
    slidesPerView: 1,
    modules: [Pagination,],

    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
    breakpoints: { 1024: { enabled: false, }, },
  } as SwiperOptions)
}, {
  passive: true,
  once: true,
})
