import Swiper from 'swiper'
import { Navigation, Pagination, Thumbs } from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {

  const thumbs = new Swiper('.productSliderThumbs', {
    direction: 'horizontal',
    slidesPerView: 'auto',
    loop: true,
    spaceBetween: 16,
    freeMode: true,
    watchSlidesProgress: true,
    breakpoints: {
      0: {
        slidesPerView: 5,
      },
      1024: {
        direction: 'vertical',
      },
    },
  })

  new Swiper('.productSliderMain', {
    modules: [Pagination, Navigation, Thumbs,],
    loop: true,
    pagination: {
      enabled: true,
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      enabled: true,
      prevEl: '.swiper-button-prev',
      nextEl: '.swiper-button-next',
    },
    slidesPerView: 1,
    spaceBetween: 16,
    thumbs: {
      swiper: thumbs,
    },
  })
}, {
  passive: true,
  once: true,
})
