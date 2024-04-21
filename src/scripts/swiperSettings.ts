import { SwiperOptions } from 'swiper/types'

export const accessibility: SwiperOptions = {
  a11y: {
    enabled: true,
    firstSlideMessage: 'Это самый первый слайд',
    lastSlideMessage: 'Это самый последний слайд',
    prevSlideMessage: 'Предыдущий слайд',
    nextSlideMessage: 'Следующий слайд',
  },
  grabCursor: true,
  watchSlidesProgress: true,
}

export const autoplay: SwiperOptions = {
  autoplay: {
    delay: 5000,
    disableOnInteraction: true,
    pauseOnMouseEnter: true,
    stopOnLastSlide: false,
    waitForTransition: true,
  },
}

export const navigation: SwiperOptions = {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
}

export const swiperDefaultSettings: SwiperOptions = {
  a11y: {
    enabled: true,
    firstSlideMessage: 'Это самый первый слайд',
    lastSlideMessage: 'Это самый последний слайд',
    prevSlideMessage: 'Предыдущий слайд',
    nextSlideMessage: 'Следующий слайд',
  },
  watchSlidesProgress: true,
  // grabCursor: true,
}
