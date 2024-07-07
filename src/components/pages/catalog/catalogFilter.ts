import { Details } from 'src/modules/details/details'
import { Select } from 'src/modules/select/select'

document.addEventListener('DOMContentLoaded', () => {
  const body = document.body

  const details = new Details({
    preferButtonIfExist: true,
    selectors: {
      details: '.catalogFilter',
      summary: '.catalogFilterSummary',
      button: '.catalogFilterButton',
      content: '.catalogFilterBody',
      scrollbars: { vertical: 'has-verticalScrollbar', },
    },
    onlyUnderLaptop: true,
  })
  details.init()

  const catalogSelects = new Select({
    selectors: {
      select: '.catalogFilter',
      current: '.catalogFilterSummary',
      value: '.catalogFilterSelected',
      button: '.catalogFilterButton',
      options: '.catalogFilterBody',
      option: '.catalogFilterLabel',
    },
  })
  catalogSelects.init()

  const formFilters: HTMLElement = body.querySelector('[data-catalog=filters]')
  if (formFilters) {
    formFilters.addEventListener('reset', () => {
      catalogSelects.updateSelects()
    })
  }

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.catalogFiltersReset')) {
      catalogSelects.updateSelects()
    }
  }, {
    passive: true,
  })
}, {
  passive: true,
  once: true,
})
