document.addEventListener('DOMContentLoaded', () => {
  const body = document.body

  const form: HTMLFormElement = body.querySelector('form.catalogFilters')

  if (!form) return

  const inputs = Array.from(form.querySelectorAll('.catalogFilterInput'))
  const tooltip: HTMLElement = body.querySelector('.catalogFiltersTooltip')

  function setLeft() {
    tooltip.style.left = Math.floor(form.getBoundingClientRect().width + form.getBoundingClientRect().left) + 'px'
  }

  function hide() {
    tooltip.classList.remove('_active')
  }

  function handleChange(event: InputEvent) {
    const input = event.target as HTMLInputElement
    tooltip.style.top = Math.floor(input.getBoundingClientRect().top) + 'px'
    setLeft()
    tooltip.classList.add('_active')
  }

  inputs.forEach((input) => {
    input.addEventListener('change', handleChange)
    input.addEventListener('input', handleChange)
    input.addEventListener('blue', handleChange)
  })
  setLeft()
  hide()

  document.addEventListener('click', () => {
    hide()
  }, { passive: true, })
  window.addEventListener('scroll', hide, { passive: true, })
  window.addEventListener('resize', () => {
    hide()
    setLeft()
  }, { passive: true, })

  document.addEventListener('click', (event) => {
    const target = event.target as HTMLElement

    if (target.closest('.catalogSortSummary')) {
      const sort: HTMLElement = target.closest('.catalogSort')
      const list: HTMLElement = sort.querySelector('.catalogSortList')
      list.classList.toggle('_active')
    }
    if (target.closest('.catalogSortItem')) {
      const sort: HTMLElement = target.closest('.catalogSort')
      const list: HTMLElement = sort.querySelector('.catalogSortList')
      const current: HTMLElement = sort.querySelector('.catalogSortCurrent')
      current.textContent = target.closest('.catalogSortItem').textContent.trim().toLowerCase()
      setTimeout(() => {
        list.classList.remove('_active')
      }, 150)
    }
    if (!target.closest('.catalogSort')) {
      const elements: Array<HTMLElement> = Array.from(document.body.querySelectorAll('.catalogSort'))
      elements.forEach((sort) => {
        const list: HTMLElement = sort.querySelector('.catalogSortList')
        sort.classList.remove('_active')
        list.classList.remove('_active')
      })
    }
  })

}, {
  passive: true,
  once: true,
})
