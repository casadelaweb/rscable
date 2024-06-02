import { addEventListeners } from 'src/scripts/helpers'

type iField = HTMLInputElement | HTMLTextAreaElement | HTMLSelectElement

document.addEventListener('DOMContentLoaded', () => {

  const body = document.body

  const fields: Array<HTMLElement> = Array.from(body.querySelectorAll('[data-field=field]'))
  fields.forEach((field) => {
    const input: iField = field.querySelector('[data-field=input]')
    const clear: HTMLElement = field.querySelector('[data-field=clear]')

    addEventListeners(input, ['input', 'blur', 'focus'], () => {
      const value = input.value

      if (value.length > 0) {
        clear.classList.add('_active')
      } else {
        clear.classList.remove('_active')
      }
    })

    clear.addEventListener('click', () => {
      input.value = ''

      input.dispatchEvent(new Event('input', {
        bubbles: false,
      }))
    })
  })
}, {
  passive: true,
  once: true,
})
