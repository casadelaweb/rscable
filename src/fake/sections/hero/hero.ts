import Swiper from 'swiper'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import { Pagination, Autoplay, A11y } from 'swiper/modules'
import {
  autoplay as autoplaySetting,
  accessibility as accessibilitySettings
} from 'src/scripts/swiper-settings'

document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.hero-slider' as CSSSelector, {
    ...autoplaySetting,
    ...accessibilitySettings,
    modules: [Pagination, Autoplay, A11y,],
    grabCursor: true,
    slidesPerView: 1,
    speed: 500,
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  } as SwiperOptions)
}, {
  passive: true,
  once: true,
})
