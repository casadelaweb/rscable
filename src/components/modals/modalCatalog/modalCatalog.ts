document.addEventListener('DOMContentLoaded', () => {
  const body = document.body as HTMLElement

  const categories: HTMLElement[] = Array.from(body.querySelectorAll('.modalCatalogCategory'))
  const products: HTMLElement[] = Array.from(body.querySelectorAll('.modalCatalogProducts'))

  categories.forEach((category, index) => {

    category.addEventListener('mouseenter', () => {
      categories.forEach((category) => category?.classList.remove('_active'))
      products.forEach((product) => product?.classList.remove('_active'))
      category?.classList.add('_active')
      products[index]?.classList.add('_active')
    })

  })
}, {
  passive: true,
  once: true,
})
