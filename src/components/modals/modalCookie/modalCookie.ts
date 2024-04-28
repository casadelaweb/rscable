document.addEventListener('DOMContentLoaded', () => {
  const { body, } = document

  const cookieDate = localStorage.getItem('cookieDate')
  const cookie: HTMLElement = body.querySelector('[data-cookie=window]')

  if (!cookieDate || (+cookieDate + 31536000000) < Date.now()) {
    cookie.classList.add('_active')

    document.addEventListener('click', (event: MouseEvent) => {
      const target = event.target as HTMLElement

      if (target.closest('[data-cookie=accept]')) {
        localStorage.setItem('cookieDate', Date.now().toString())
        cookie.classList.remove('_active')
      }
    }, { passive: true, })
  } else {
    cookie.classList.remove('_active')
  }
}, {
  passive: true,
  once: true,
})
