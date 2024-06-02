import Swiper from 'swiper'
import { Navigation, A11y, FreeMode } from 'swiper/modules'
import {
  accessibility as accessibilitySettings,
  navigation as navigationSettings
} from 'src/scripts/swiperSettings'
import { createHash } from 'src/scripts/helpers'

document.addEventListener('DOMContentLoaded', () => {
  const body = document.body

  const sections: Array<HTMLElement> = Array.from(body.querySelectorAll('.sectionAdvisable'))
  if (sections.length > 0) {
    sections.forEach((section, index) => {
      const hashClass = `slider-${ index }` + createHash()
      const slider: HTMLElement = section.querySelector('.swiper')
      const prev: HTMLElement = section.querySelector('.sectionAdvisableSliderPrev')
      const next: HTMLElement = section.querySelector('.sectionAdvisableSliderNext')

      slider.classList.add(hashClass)
      prev.classList.add(hashClass)
      next.classList.add(hashClass)

      new Swiper(slider, {
        ...navigationSettings,
        ...accessibilitySettings,
        modules: [Navigation, A11y, FreeMode],
        speed: 333,
        grabCursor: true,
        slidesPerView: 1.33,
        spaceBetween: 12,
        navigation: {
          enabled: true,
          prevEl: prev,
          nextEl: next,
        },
        freeMode: {
          enabled: true,
          momentum: true,
          sticky: true,
        },
        breakpoints: {
          360: { slidesPerView: 1.5, },
          375: { spaceBetween: 16, },
          400: { slidesPerView: 2, },
          768: { slidesPerView: 3, },
          1024: { slidesPerView: 3, },
          1180: { slidesPerView: 4, },
          1920: { slidesPerView: 5, spaceBetween: 20, },
        },
      })
    })
  }
}, {
  passive: true,
  once: true,
})
