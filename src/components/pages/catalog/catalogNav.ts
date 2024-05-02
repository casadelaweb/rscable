// type iCatalogView = 'grid' | 'row'

document.addEventListener('DOMContentLoaded', () => {
  const body = document

  function getCatalogView(button: HTMLElement): string {
    return button.getAttribute('data-catalog-view').trim().toLowerCase() ?? 'grid'
  }

  function applyCatalogView(view: string) {
    const layout: HTMLElement = body.querySelector('[data-catalog=products]')

    if (!layout) return

    const buttonsAll: Array<HTMLButtonElement> = Array.from(body.querySelectorAll('[data-catalog-view]'))
    const products: Array<HTMLElement> = Array.from(layout?.querySelectorAll('.productCard')) ?? []
    buttonsAll.forEach((element) => element.classList.remove('_active'))
    body.querySelector(`[data-catalog-view=${ view }]`).classList.add('_active')
    localStorage.setItem('catalogView', view)
    if (view === 'grid') {
      layout.classList.remove('row')
      layout.classList.add('grid')
    } else {
      layout.classList.remove('grid')
      layout.classList.add('row')
    }
    products.forEach((product) => {
      if (view === 'grid') {
        product.classList.remove('row')
        product.classList.add('grid')
      } else {
        product.classList.remove('grid')
        product.classList.add('row')
      }
    })
  }

  let mode: string = 'grid'
  const buttonActiveDefault: HTMLElement = body.querySelector(`[data-catalog-view]._active`)
  const modeStorage = localStorage.getItem('catalogView')?.trim().toLowerCase()
  if (modeStorage === 'grid' || modeStorage === 'row') {
    mode = modeStorage
  } else if (buttonActiveDefault) {
    mode = getCatalogView(buttonActiveDefault)
  }
  applyCatalogView(mode)

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('[data-catalog-view]')) {
      const view = getCatalogView(target.closest('[data-catalog-view]'))
      applyCatalogView(view)
    }
  })
}, {
  passive: true,
  once: true,
})
