document.addEventListener('DOMContentLoaded', () => {
  const { body, } = document

  const cookieDate = localStorage.getItem('cookieDate')
  const cookie = body.querySelector('[data-cookie=window]')

  if (!cookieDate || (+cookieDate + 31536000000) < Date.now()) {
    cookie.classList.add('active')

    document.addEventListener('click', (event: MouseEvent) => {
      const target = event.target as HTMLElement

      if (target.closest('[data-cookie=accept]')) {
        // const button: HTMLElement = target.closest('[data-cookie=accept]')
        // const cookie: HTMLElement = button.closest('[data-cookie=window]')

        localStorage.setItem('cookieDate', Date.now().toString())
        cookie.classList.remove('active')
      }
    }, { passive: true, })
  } else {
    cookie.classList.remove('active')
  }
}, {
  passive: true,
  once: true,
})
