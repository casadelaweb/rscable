import * as noUiSlider from 'nouislider'
import { API } from 'nouislider/dist/nouislider'
// import { Select } from 'src/modules/select/select'
// import { Details } from 'src/modules/details/details'
import 'src/assets/img/catalog/banner.jpg'

interface sliderElement extends HTMLElement {
  noUiSlider: API
}

function prepareValue(value: string): number {
  return parseInt(value.trim())
}

document.addEventListener('DOMContentLoaded', () => {
  const { body, } = document

  const sliders = Array.from(body.querySelectorAll('[data-catalog-filter=range]'))
  sliders.forEach((slider: sliderElement) => {
    const filter: HTMLElement = slider.closest('.catalogFilter')

    const priceMin: number = prepareValue(slider.getAttribute('data-min'))
    const priceMax: number = prepareValue(slider.getAttribute('data-max'))
    const inputMin: HTMLInputElement = filter.querySelector('[data-catalog-filter=input-min]')
    const inputMax: HTMLInputElement = filter.querySelector('[data-catalog-filter=input-max]')
    // const spanMin: HTMLElement = filter.querySelector(slider.getAttribute('data-span-min'))
    // const spanMax: HTMLElement = filter.querySelector(slider.getAttribute('data-span-max'))

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
      start: [priceMin, priceMax,],
      step: 1,
      connect: true,
      range: {
        'min': priceMin,
        'max': priceMax,
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
      // spanMin.textContent = parseInt(values[0])?.toLocaleString()
      // spanMax.textContent = parseInt(values[1])?.toLocaleString()
    })
  })
}, {
  passive: true,
  once: true,
})
