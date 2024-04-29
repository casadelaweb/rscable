//import { fakeProducts } from 'src/fake'
import axios from 'axios'

document.addEventListener('DOMContentLoaded', () => {
  let fakeCounter: number = 0

  // async function getProducts(layout: HTMLElement, button: HTMLButtonElement) {
  //   try {
  //     layout.classList.add('_loading')
  //     button.disabled = true
  //     const response = await axios.get('/api/products/popular/')
  //     const data = response.data
  //     console.log(response, data)
  //     layout.innerHTML = layout.innerHTML + data
  //   } catch (error) {
  //     console.log(error)
  //   } finally {
  //     layout.classList.remove('_loading')
  //     button.disabled = false
  //     fakeCounter++
  //   }
  // }

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.productsLoadMore')) {
      const button: HTMLButtonElement = target.closest('.productsLoadMore')
      const section: HTMLElement = target.closest('.products')
      const cardsLayout: HTMLElement = section.querySelector('.products-cards')
      const note: HTMLElement = section.querySelector('.productsNote')
      if (fakeCounter === 0) {
        // getProducts(cardsLayout, button)
      } else {
        note.classList.add('_active')
      }
    }
  })
})
