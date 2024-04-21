import 'restyle.css/dist/restyle.css'
import 'restyle.css/dist/checkboxes.css'

import '@fancyapps/ui/dist/fancybox/fancybox.css'
import 'swiper/scss'
import 'swiper/scss/a11y'
import 'swiper/scss/scrollbar'

import 'src/styles/main.scss'
import 'src/components'
import { modals } from 'src/scripts/globalModals'
import { globalScrollController } from 'src/scripts/globalScrollController'
import { Details } from 'src/modules/details/details'
import { Masks } from 'src/modules/masks/masks'
import 'src/modules/images'
import 'src/modules/dropdown'

document.addEventListener('DOMContentLoaded', () => {
  globalScrollController.init()
  modals.init()

  const details = new Details()
  details.init()
  new Masks().init()

  function handleError(input: HTMLInputElement, errorTooltip: HTMLElement, errorText?: string) {
    input.classList.remove('_success')
    input.classList.add('_error')
    errorTooltip.classList.remove('_success')
    errorTooltip.classList.add('_error')
  }

  function handleSuccess(input: HTMLInputElement, errorTooltip: HTMLElement, errorText?: string) {
    input.classList.add('_success')
    input.classList.remove('_error')
    errorTooltip.classList.add('_success')
    errorTooltip.classList.remove('_error')
  }

  function validate(input: HTMLInputElement) {
    let isValid: boolean = false
    const value: string | number = input.value.trim()
    const scheme: string = input.getAttribute('data-validate')
    const field: HTMLElement = input.closest('[data-form=field]')
    const errorTooltip: HTMLElement = field.querySelector('[data-form=error]')
    if (scheme === 'human_name') {
      if (value.length > 1) {
        isValid = true
        handleSuccess(input, errorTooltip)
      } else {
        isValid = false
        handleError(input, errorTooltip)
      }
    }
    if (scheme === 'tel') {
      if (value.length === 18) {
        isValid = true
        handleSuccess(input, errorTooltip)
      } else {
        isValid = false
        handleError(input, errorTooltip)
      }
    }

    return isValid
  }

  const inputs: HTMLElement[] = Array.from(document.body.querySelectorAll('[data-validate]'))
  inputs.forEach((input: HTMLInputElement) => {
    input.addEventListener('input', () => validate(input))
    input.addEventListener('focus', () => {
      const value: string | number = input.value.trim()
      // const field: HTMLElement = input.closest('[data-form=field]')
      // const errorTooltip: HTMLElement = field.querySelector('[data-form=error]')
      if (value.length > 0) {
        validate(input)
      }
    })
    input.addEventListener('blur', () => {
      const field: HTMLElement = input.closest('[data-form=field]')
      const errorTooltip: HTMLElement = field.querySelector('[data-form=error]')
      input.classList.remove('_error')
      errorTooltip.classList.remove('_error')
    })
  })

  const loader: HTMLElement = document.body.querySelector('.formFeedbackLoader')
  const response: HTMLElement = document.body.querySelector('.formFeedbackResponse')
  const overlay: HTMLElement = document.body.querySelector('.formFeedbackOverlay')

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('[data-form=submit]')) {
      const form: HTMLFormElement = target.closest('[data-form=form]')
      const inputs: HTMLInputElement[] = Array.from(form.querySelectorAll('[required][data-validate]'))
      const hasErrors = inputs.some((input) => validate(input) === false)
      if (hasErrors) {
        event.preventDefault()
      } else {
        event.preventDefault()
        loader.classList.add('_active')

        setTimeout(() => {
          loader.classList.remove('_active')
          response.classList.add('_active')
          overlay.classList.add('_active')
        }, 1500)
      }
    }

    if (target.closest('.formFeedbackOverlay')
      || target.closest('.formFeedbackResponseClose')
      || target.closest('.formFeedbackResponseButton')) {
      overlay.classList.remove('_active')
      response.classList.remove('_active')
    }
  })
}, { passive: true, })
