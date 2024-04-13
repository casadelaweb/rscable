document.addEventListener('DOMContentLoaded', () => {
  function isSizeSelected(): boolean {
    const buttonActive: HTMLElement = document.body.querySelector('[data-product=size]._active')

    return !!buttonActive
  }

  const notification: HTMLElement = document.body.querySelector('[data-product=no-size-selected]')

  document.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('[data-product=size]')) {
      const button: HTMLElement = target.closest('[data-product=size]')
      const buttons: HTMLElement[] = Array.from(document.body.querySelectorAll('[data-product=size]'))

      if (button.classList.contains('_active')) {
        button.classList.remove('_active')
      } else {
        buttons.forEach((button) => button.classList.remove('_active'))
        button.classList.add('_active')
        notification.classList.remove('_active')
      }
    }

    if (target.closest('[data-product=add-to-cart]')) {
      const buttonAddToCart: HTMLButtonElement = target.closest('[data-product=add-to-cart]')
      // если хотя бы один размер выбран
      if (isSizeSelected()) {
        buttonAddToCart.classList.add('_success')
        buttonAddToCart.disabled = true
        setTimeout(() => {
          buttonAddToCart.classList.remove('_success')
          buttonAddToCart.disabled = false
        }, 1500)
      } else {
        notification.classList.add('_active')
      }
    }
  })
}, {
  passive: true,
  once: true,
})
