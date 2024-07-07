import * as noUiSlider from 'nouislider'
import { API } from 'nouislider/dist/nouislider'
import 'src/assets/img/catalog/banner.jpg'

interface sliderElement extends HTMLElement {
  noUiSlider: API
}

function prepareValue(value: string): number {
  return parseInt(value.trim())
}

function getDefaultMin(slider: sliderElement): number {
  return prepareValue(slider.getAttribute('data-min'))
}

function getDefaultMax(slider: sliderElement): number {
  return prepareValue(slider.getAttribute('data-max'))
}

document.addEventListener('DOMContentLoaded', () => {
  const { body, } = document

  const sliders = Array.from(body.querySelectorAll('[data-catalog-filter=range]'))
  sliders.forEach((slider: sliderElement) => {
    const filter: HTMLElement = slider.closest('.catalogFilter')
    const inputMin: HTMLInputElement = filter.querySelector('[data-catalog-filter=input-min]')
    const inputMax: HTMLInputElement = filter.querySelector('[data-catalog-filter=input-max]')

    let typingTimerMin: ReturnType<typeof setTimeout>
    let typingTimerMax: ReturnType<typeof setTimeout>
    const doneTypingInterval: number = 750
    inputMin.addEventListener('keyup', () => {
      clearTimeout(typingTimerMin)
      if (inputMin.value) {
        typingTimerMin = setTimeout(() => {
          slider.noUiSlider.set([inputMin.value, null,])
        }, doneTypingInterval)
      }
    })
    inputMax.addEventListener('keyup', () => {
      clearTimeout(typingTimerMax)
      if (inputMax.value) {
        typingTimerMax = setTimeout(() => {
          slider.noUiSlider.set([null, inputMax.value,])
        }, doneTypingInterval)
      }
    })

    noUiSlider.create(slider, {
      start: [getDefaultMin(slider), getDefaultMax(slider),],
      step: 1,
      connect: true,
      range: {
        'min': getDefaultMin(slider),
        'max': getDefaultMax(slider),
      },
    }).on('update', (values: string[], handle: 0 | 1) => {
      const value = values[handle]
      if (handle === 0) {
        inputMin.value = parseInt(value).toLocaleString()
      } else {
        inputMax.value = parseInt(value).toLocaleString()
      }
      setTimeout(() => {
        inputMin.dispatchEvent(new Event('input', { bubbles: true, }))
        inputMax.dispatchEvent(new Event('input', { bubbles: true, }))
      }, 333)
    })
  })

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.catalogFiltersReset')) {
      sliders.forEach((slider: sliderElement) => {
        const filter: HTMLElement = slider.closest('.catalogFilter')
        const inputMin: HTMLInputElement = filter.querySelector('[data-catalog-filter=input-min]')
        const inputMax: HTMLInputElement = filter.querySelector('[data-catalog-filter=input-max]')
        slider.noUiSlider.reset()
        slider.noUiSlider.set([getDefaultMin(slider), getDefaultMax(slider)])
        setTimeout(() => {
          inputMin.value = getDefaultMin(slider).toLocaleString()
          inputMax.value = getDefaultMax(slider).toLocaleString()
        }, 100)
      })
    }
  }, {
    passive: true,
  })
}, {
  passive: true,
  once: true,
})
