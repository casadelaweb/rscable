import Swiper from 'swiper'
import { Navigation, A11y, Autoplay } from 'swiper/modules'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import {
  accessibility as accessibilitySettings,
  autoplay as autoplaySettings,
  navigation as navigationSettings
} from 'src/scripts/swiperSettings'

document.addEventListener('DOMContentLoaded', () => {
  new Swiper('.sectionAdvisableSlider', {
    ...navigationSettings,
    ...autoplaySettings,
    ...accessibilitySettings,
    modules: [Navigation, A11y, Autoplay,],
    speed: 333,
    grabCursor: true,
    slidesPerView: 1.33,
    spaceBetween: 16,
    autoplay: { delay: 10000, },
    navigation: {
      enabled: true,
      prevEl: '.sectionAdvisableSliderPrev',
      nextEl: '.sectionAdvisableSliderNext',
    },
    breakpoints: {
      360: { slidesPerView: 1.5, },
      540: { slidesPerView: 2, },
      // 768: { slidesPerView: 2, },
      1024: { slidesPerView: 3, },
      1180: { slidesPerView: 4, },
      1920: { slidesPerView: 5, },
    },
  })

  // new Swiper('.slider-small', {
  //   ...sharedSettings,
  //   autoplay: { delay: 5000, },
  //   breakpoints: {
  //     768: {
  //       slidesPerView: 3,
  //       spaceBetween: 14,
  //     },
  //     1024: {
  //       slidesPerView: 4,
  //       spaceBetween: 14,
  //     },
  //     1280: {
  //       slidesPerView: 5,
  //       spaceBetween: 14,
  //     },
  //     1920: {
  //       slidesPerView: 6,
  //       spaceBetween: 14,
  //     },
  //   },
  // })
}, {
  passive: true,
  once: true,
})
