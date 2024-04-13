import Swiper from 'swiper'
import { Navigation, A11y, Autoplay } from 'swiper/modules'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import {
  accessibility as accessibilitySettings,
  autoplay as autoplaySettings,
  navigation as navigationSettings
} from 'src/scripts/swiper-settings'

document.addEventListener('DOMContentLoaded', () => {
  const sharedSettings: SwiperOptions = {
    ...navigationSettings,
    ...autoplaySettings,
    ...accessibilitySettings,
    modules: [Navigation, A11y, Autoplay,],
    speed: 500,
    grabCursor: true,
    slidesPerView: 2.05,
    spaceBetween: 7,
  }

  new Swiper('.section-layout' as CSSSelector, {
    ...sharedSettings,
    autoplay: { delay: 10000, },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1280: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
      1920: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
    },
  } as SwiperOptions)

  new Swiper('.slider-small' as CSSSelector, {
    ...sharedSettings,
    autoplay: { delay: 5000, },
    breakpoints: {
      768: {
        slidesPerView: 3,
        spaceBetween: 16,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 16,
      },
      1280: {
        slidesPerView: 5,
        spaceBetween: 16,
      },
      1920: {
        slidesPerView: 6,
        spaceBetween: 16,
      },
    },
  } as SwiperOptions)
}, {
  passive: true,
  once: true,
})
