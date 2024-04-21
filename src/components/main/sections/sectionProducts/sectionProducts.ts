import { fakeProducts } from 'src/fake'

document.addEventListener('DOMContentLoaded', () => {
  let fakeCounter = 0

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.productsLoadMore')) {
      const button: HTMLButtonElement = target.closest('.productsLoadMore')
      const section = target.closest('.products')
      const cardsLayout = section.querySelector('.products-cards')
      const note = section.querySelector('.productsNote')
      if (fakeCounter === 0) {
        cardsLayout.classList.add('_loading')
        button.disabled = true
        setTimeout(() => {
          cardsLayout.classList.remove('_loading')
          cardsLayout.innerHTML = cardsLayout.innerHTML + fakeProducts
          button.disabled = false
          fakeCounter++
        }, 2500)
      } else {
        note.classList.add('_active')
      }
    }
  })
})
