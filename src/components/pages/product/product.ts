import Swiper from 'swiper'
import { Navigation, Pagination, Thumbs } from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {
  const thumbs = new Swiper('.productSliderThumbs', {
    direction: 'vertical',
    slidesPerView: 'auto',
    spaceBetween: 16,
    freeMode: true,
    watchSlidesProgress: true,
  })
  new Swiper('.productSliderMain', {
    modules: [Pagination, Navigation, Thumbs,],
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
    }
  })
}, {
  passive: true,
  once: true,
})
