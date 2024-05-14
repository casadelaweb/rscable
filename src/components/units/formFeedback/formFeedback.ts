import { validate, validateForm } from 'src/components/units/formFeedback/helpers'

document.addEventListener('DOMContentLoaded', () => {
  const body = document.body as HTMLElement
  const inputs: HTMLElement[] = Array.from(body.querySelectorAll('[data-validate]'))
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

  const loader: HTMLElement = body.querySelector('.formFeedbackLoader')
  const response: HTMLElement = body.querySelector('.formFeedbackResponse')
  const overlay: HTMLElement = body.querySelector('.formFeedbackOverlay')

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('[data-form=submit]')) {
      const form: HTMLFormElement = target.closest('[data-form=form]')
      if (validateForm(form)) {
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
}, {
  passive: true,
  once: true,
})
