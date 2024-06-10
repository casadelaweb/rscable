import Swiper from 'swiper'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import { A11y, Thumbs } from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {
  const thumbs = new Swiper('.modalProductThumbs', {
    modules: [A11y,],
    speed: 333,
    direction: 'horizontal',
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 16,
    freeMode: true,
    watchSlidesProgress: true,
    grabCursor: true,
    a11y: {
      enabled: true,
      firstSlideMessage: 'Это самый первый слайд',
      lastSlideMessage: 'Это самый последний слайд',
      prevSlideMessage: 'Предыдущий слайд',
      nextSlideMessage: 'Следующий слайд',
    },
    breakpoints: {
      0: {
        slidesPerView: 'auto',
        spaceBetween: 12,
      },
      375: {
        slidesPerView: 'auto',
        spaceBetween: 16,
      }
    },
  })

  new Swiper('.modalProductSlider' as CSSSelector, {
    modules: [A11y, Thumbs],
    loop: true,
    speed: 333,
    grabCursor: true,
    slidesPerView: 1,
    spaceBetween: 16,
    thumbs: {
      swiper: thumbs,
    },
    freeMode: true,
    watchSlidesProgress: true,
    a11y: {
      enabled: true,
      firstSlideMessage: 'Это самый первый слайд',
      lastSlideMessage: 'Это самый последний слайд',
      prevSlideMessage: 'Предыдущий слайд',
      nextSlideMessage: 'Следующий слайд',
    },
  } as SwiperOptions)
}, {
  passive: true,
  once: true,
})
