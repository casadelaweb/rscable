document.addEventListener('DOMContentLoaded', () => {
  const body = document.body

  const form: HTMLFormElement = body.querySelector('form.catalogFilters')

  if (!form) return

  const inputs = Array.from(form.querySelectorAll('input'))
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

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.catalogFiltersReset')) {
      const buttonReset: HTMLElement = target.closest('.catalogFiltersReset')
    }
    hide()
  }, { passive: true, })
  window.addEventListener('scroll', hide, { passive: true, })
  window.addEventListener('resize', () => {
    hide()
    setLeft()
  }, { passive: true, })

}, {
  passive: true,
  once: true,
})
