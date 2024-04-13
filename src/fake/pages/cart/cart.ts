// import { CartCard, iElement } from './cart.card'
//
// document.addEventListener('DOMContentLoaded', () => {
//   const cards = new CartCard()
//   cards.init()
//
//   const { body, } = document
//   const priceRaw = body.querySelector('[data-cart=price-raw]')
//
//   function calculatePriceRaw(): string {
//     let priceRawValue: number = 0
//     cards.elements.forEach((element: iElement) => {
//       const price: string = element.priceCurrent.textContent.replace(/\s/g, '')
//       const quantity: string = element.input.value.replace(/\s/g, '')
//
//       priceRawValue = priceRawValue + parseInt(price) * parseInt(quantity)
//     })
//
//     return priceRawValue.toLocaleString()
//   }
//
//   if (priceRaw) {
//     priceRaw.textContent = calculatePriceRaw()
//     document.addEventListener('cartCardUpdate', () => {
//       priceRaw.textContent = calculatePriceRaw()
//     })
//   }
// }, {
//   passive: true,
//   once: true,
// })
