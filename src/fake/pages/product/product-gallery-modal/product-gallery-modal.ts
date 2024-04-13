import Swiper from 'swiper'
import { Navigation, Pagination, Mousewheel, A11y, Scrollbar, FreeMode } from 'swiper/modules'
import { swiperDefaultSettings } from 'src/scripts/swiper-settings'
import { modals } from 'src/scripts/modals-instance'
import { CSSSelector, SwiperOptions } from 'swiper/types'
//import 'swiper/components/global/scrollbar.min.css'

document.addEventListener('DOMContentLoaded', () => {
  const { body, } = document
  const catalogDetail: HTMLElement = body.querySelector('.product')
  const galleryItems: HTMLElement[] = Array.from(body.querySelectorAll('.product-gallery-item'))
  const catalogGalleryModalSlider: HTMLElement = body.querySelector('.product-gallery-modal-slider .swiper-wrapper')

  galleryItems.forEach((galleryItem: HTMLElement, index: number) => {
    galleryItem.dataset.slideId = `${ index }`
    //const galleryModalItem: HTMLElement = document.createElement('div')
    //galleryModalItem.classList.add('swiper-slide')
    //galleryModalItem.innerHTML = '<div class="product-gallery-modal-item"></div>'
    //galleryModalItem.children[0].append(galleryItem.children[0].cloneNode())
    //catalogGalleryModalSlider.append(galleryModalItem)
  })

  const swiperInstance: Swiper = new Swiper('.product-gallery-modal-slider' as CSSSelector, {
    ...swiperDefaultSettings,
    modules: [
      Navigation,
      Pagination,
      Mousewheel,
      A11y,
      // Scrollbar,
      FreeMode,
    ],
    freeMode: {
      enabled: true,
      sticky: false,
      minimumVelocity: 0.50,
    },
    loop: false,
    enabled: true,
    slidesPerView: 'auto',
    direction: 'vertical',
    //scrollbar: {
    //  el: '.swiper-scrollbar',
    //  enabled: false,
    //},
    mousewheel: true,
    spaceBetween: 50,
    speed: 500,
    navigation: {
      nextEl: '.gallery-swiper-button-next',
      prevEl: '.gallery-swiper-button-prev',
      enabled: true,
    },
    pagination: {
      el: '.swiper-pagination',
      type: 'bullets',
      clickable: true,
      enabled: true,
    },
  } as SwiperOptions)

  if (catalogDetail) {
    catalogDetail.addEventListener('click', (event: MouseEvent) => {
      const target = event.target as HTMLElement
      if (target.closest('.product-gallery-item')) {
        const modalGallery: HTMLElement = body.querySelector('[data-modal=product-gallery-modal]')
        const item: HTMLElement = target.closest('.product-gallery-item')
        modals.activateModal(modalGallery)
        swiperInstance.slideTo(+item.dataset.slideId, 0)
      }
    })
  }
})
