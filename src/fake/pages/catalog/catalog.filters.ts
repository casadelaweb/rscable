import * as noUiSlider from 'nouislider'
import { API } from 'nouislider/dist/nouislider'

interface sliderElement extends HTMLElement {
  noUiSlider: API
}

function preparePrice(value: string): number {
  return parseInt(value)
}

document.addEventListener('DOMContentLoaded', () => {
  const { body, } = document

  const pricesSlider: sliderElement = body.querySelector('[data-catalog-prices]')

  if (pricesSlider) {
    const priceMin = preparePrice(pricesSlider.getAttribute('data-min'))
    const priceMax = preparePrice(pricesSlider.getAttribute('data-max'))
    const inputMin: HTMLInputElement = body.querySelector(pricesSlider.getAttribute('data-input-min'))
    const inputMax: HTMLInputElement = body.querySelector(pricesSlider.getAttribute('data-input-max'))
    const spanMin: HTMLElement = body.querySelector(pricesSlider.getAttribute('data-span-min'))
    const spanMax: HTMLElement = body.querySelector(pricesSlider.getAttribute('data-span-max'))

    let typingTimerMin: ReturnType<typeof setTimeout>
    let typingTimerMax: ReturnType<typeof setTimeout>
    const doneTypingInterval: number = 750
    inputMin.addEventListener('keyup', () => {
      clearTimeout(typingTimerMin)
      if (inputMin.value) {
        typingTimerMin = setTimeout(() => {
          pricesSlider.noUiSlider.set([inputMin.value, null,])
        }, doneTypingInterval)
      }
    })
    inputMax.addEventListener('keyup', () => {
      clearTimeout(typingTimerMax)
      if (inputMax.value) {
        typingTimerMax = setTimeout(() => {
          pricesSlider.noUiSlider.set([null, inputMax.value,])
        }, doneTypingInterval)
      }
    })

    noUiSlider.create(pricesSlider, {
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

      spanMin.textContent = parseInt(values[0]).toLocaleString()
      spanMax.textContent = parseInt(values[1]).toLocaleString()
    })
  }
}, {
  passive: true,
  once: true,
})
