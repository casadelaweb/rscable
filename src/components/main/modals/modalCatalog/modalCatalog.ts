document.addEventListener('DOMContentLoaded', () => {
  const body = document.body as HTMLElement

  const categories: HTMLElement[] = Array.from(body.querySelectorAll('.modalCatalogCategory'))

  categories.forEach((category) => {
    category.addEventListener('mouseenter', () => {
      categories.forEach((category) => category.classList.remove('_active'))
      category.classList.add('_active')
    })
  })
}, {
  passive: true,
  once: true,
})
