document.addEventListener('DOMContentLoaded', () => {

  const field: HTMLElement = document.body.querySelector('.modalRegionField')
  const input: HTMLInputElement = field.querySelector('.modalRegionFieldInput')
  const results: HTMLElement = field.querySelector('.modalRegionFieldResults')

  function handleFocus() {
    results.classList.add('_active')

    handleInput()
  }

  function handleBlur() {
    setTimeout(() => {
      results.classList.remove('_active')
    }, 100)
  }

  function handleInput() {
    const value = input.value.trim().toLowerCase()
    const items: HTMLElement[] = Array.from(results.querySelectorAll('.modalRegionFieldResult'))

    items.forEach((item) => {
      if (item.textContent.trim().toLowerCase().includes(value)) {
        item.classList.add('_active')
      } else {
        item.classList.remove('_active')
      }
    })
  }

  input.addEventListener('focus', handleFocus)
  input.addEventListener('blur', handleBlur)
  input.addEventListener('input', handleInput)

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.modalRegionFieldResult')) {
      const item: HTMLElement = target.closest('.modalRegionFieldResult')
      input.value = item.textContent.trim()
      setTimeout(() => {
        results.classList.remove('_active')
      }, 100)
    }
  })
}, {
  passive: true,
  once: true,
})
