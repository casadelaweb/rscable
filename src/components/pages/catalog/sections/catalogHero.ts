import Swiper from 'swiper'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import { Navigation, A11y, } from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {

  new Swiper('.catalogHeroCategories' as CSSSelector, {
    modules: [Navigation, A11y,],
    speed: 333,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 16,
    freeMode: true,
    watchSlidesProgress: true,
    loop: true,
    a11y: {
      enabled: true,
      firstSlideMessage: 'Это самый первый слайд',
      lastSlideMessage: 'Это самый последний слайд',
      prevSlideMessage: 'Предыдущий слайд',
      nextSlideMessage: 'Следующий слайд',
    },
    navigation: {
      enabled: true,
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next',
    },
    breakpoints: {
      360: { slidesPerView: 1.25, },
      375: { slidesPerView: 1.5, },
      //400: { slidesPerView: 2, },
      540: { slidesPerView: 2.25, },
      768: { slidesPerView: 2.5, },
      1024: { slidesPerView: 4, },
      1920: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
    },
  } as SwiperOptions)

}, {
  passive: true,
  once: true,
})
