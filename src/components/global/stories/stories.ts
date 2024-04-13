import Swiper from 'swiper'
import { Pagination, Navigation, A11y, Autoplay } from 'swiper/modules'
import { CSSSelector, SwiperOptions } from 'swiper/types'
import { autoplay, swiperDefaultSettings } from 'src/scripts/swiper-settings'
import './stories.scss'

interface iSelectors {
  slider: string,
  sliderPagination: string,
  sliderButtonPrev: string,
  sliderButtonNext: string,
}

export class Stories {
  private readonly onClick: (event: MouseEvent) => any
  private selectors: iSelectors

  constructor() {
    this.selectors = {
      slider: '[data-stories=slider]',
      sliderPagination: '[data-stories=slider-pagination]',
      sliderButtonPrev: '[data-stories=slider-button-prev]',
      sliderButtonNext: '[data-stories=slider-button-next]',
    }
    this.onClick = this.handleClick.bind(this)
  }

  public init(): void {

    this.initSlider()
  }

  private initSlider(): void {
    const { body, } = document
    //const progressCircle: HTMLElement = body.querySelector('.autoplay-progress svg')
    const progressContent: HTMLElement = body.querySelector('.autoplay-progress span')

    new Swiper(this.selectors.slider as CSSSelector, {
      ...swiperDefaultSettings,
      ...autoplay,
      modules: [
        Pagination,
        Navigation,
        A11y,
        Autoplay,
      ],
      pagination: {
        el: this.selectors.sliderPagination,
        enabled: true,
      },
      navigation: {
        nextEl: this.selectors.sliderButtonPrev,
        prevEl: this.selectors.sliderButtonNext,
        enabled: true,
      },
      slidesPerView: 'auto',
      spaceBetween: 10,
      centeredSlides: true,
      // centeredSlidesBounds: true,
      // loop: true,
      autoplay: {
        delay: 5000,
        disableOnInteraction: true,
        waitForTransition: true,
      },
      //on: {
      //  autoplayTimeLeft(s, time, progress) {

      //    progressContent.textContent = `${Math.ceil(time / 1000)}s`
      //  },
      //},
    } as SwiperOptions)
  }

  private handleClick(event: MouseEvent): void {
    const target = event.target as HTMLElement
  }

  private updateListeners(): void {
    document.removeEventListener('click', this.onClick)
    document.addEventListener('click', this.onClick, { passive: true, })
  }
}
