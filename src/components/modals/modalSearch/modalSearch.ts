// import { addEventListeners } from 'src/scripts/helpers'
//
// document.addEventListener('DOMContentLoaded', () => {
//   const body = document.body
//
//   // const modalSearchInput: HTMLInputElement = body.querySelector('[data-search-modal=input]')
//   // const inputMobile: HTMLInputElement = body.querySelector('[data-search-modal=input-mobile]')
//   // const inputDesktop: HTMLInputElement = body.querySelector('[data-search-modal=input-desktop]')
//   // const loader: HTMLElement = body.querySelector('.modalSearchMainLoader')
//   //
//   // inputMobile.addEventListener('input', (event: InputEvent) => {
//   //   const target = event.target as HTMLInputElement
//   //   modalSearchInput.value = target.value.trim()
//   //   modalSearchInput.dispatchEvent(new Event('input', { bubbles: true, }))
//   // })
//   // inputDesktop.addEventListener('input', (event: InputEvent) => {
//   //   const target = event.target as HTMLInputElement
//   //   modalSearchInput.value = target.value.trim()
//   //   modalSearchInput.dispatchEvent(new Event('input', { bubbles: true, }))
//   // })
//
//   // modalSearchInput.addEventListener('input', (event: InputEvent) => {
//   //   const target = event.target as HTMLInputElement
//   //   const value: string = target.value.trim()
//   //   loader.classList.add('_active')
//   //   setTimeout(() => {
//   //     loader.classList.remove('_active')
//   //   }, 1000)
//   // })
//
//   document.addEventListener('click', (event: MouseEvent) => {
//     const target = event.target as HTMLElement
//
//     if (target.closest('[data-hint]')) {
//       const button: HTMLElement = target.closest('[data-hint]')
//       const value = button.getAttribute('data-hint').trim()
//       // inputMobile.value = value
//       // inputDesktop.value = value
//       // modalSearchInput.dispatchEvent(new Event('input', { bubbles: true, }))
//     }
//   })
//
//   // const inputs: Array<HTMLInputElement> = Array.from(body.querySelectorAll('[data-bind=input-search]'))
//   //
//   // function handleUpdate(event: FocusEvent | InputEvent) {
//   //   const input = event.target as HTMLInputElement
//   //   const value = input.value
//   //
//   //   inputs.forEach((i) => {
//   //     i.value = value
//   //   })
//   // }
//   //
//   // inputs.forEach((input) => {
//   //   addEventListeners(input, ['input', 'blur', 'focus'], handleUpdate)
//   // })
// })
