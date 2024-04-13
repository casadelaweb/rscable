import { CatalogCards } from './catalog.cards'
import { isMediaAboveLaptop } from 'src/scripts/helpers'
import './catalog.filters'
import { Details } from 'src/components/global/details/details'
import { Select } from 'src/components/global/select/select'
import { CatalogPreview } from 'src/components/pages/catalog/catalog.preview'

document.addEventListener('DOMContentLoaded', () => {
  const catalogCards = new CatalogCards()
  catalogCards.init()
  new CatalogPreview().init()

  const catalogHeader: HTMLElement = catalogCards.elements.catalogHeaderDesktop
  if (catalogHeader) {
    window.addEventListener('scroll', () => {
      const { scrollY, } = window

      if (scrollY > catalogCards.elements.header.offsetHeight) {
        catalogHeader.classList.add('scrolled')
      } else {
        catalogHeader.classList.remove('scrolled')
      }
    }, { passive: true, })
    if (isMediaAboveLaptop()) {
      catalogHeader.style.overflow = 'unset'
      catalogHeader.style.top = catalogCards.elements.header.offsetHeight + 'px'
    }
  }

  new Details({
    preferButtonIfExist: true,
    selectors: {
      details: '.catalog-filter',
      summary: '.catalog-filter-summary',
      button: '.catalog-filter-button',
      content: '.catalog-filter-body',
      scrollbars: { vertical: 'has-vertical-scrollbar', },
    },
    onlyUnderLaptop: true,
  }).init()
  const catalogSelects = new Select({
    selectors: {
      select: '.catalog-filter',
      current: '.catalog-filter-summary',
      value: '.catalog-filter-selected',
      button: '.catalog-filter-button',
      options: '.catalog-filter-body',
      option: '.catalog-filter-label',
    },
  })
  catalogSelects.init()
  const formFilters: HTMLElement = document.body.querySelector('[data-catalog=filters]')
  if (formFilters) {
    formFilters.addEventListener('reset', () => {
      catalogSelects.updateSelects()
    })
  }
}, {
  passive: true,
  once: true,
})
