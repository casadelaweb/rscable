document.addEventListener('DOMContentLoaded', () => {

  function open(button: HTMLElement, modal: HTMLElement, overlay?: HTMLElement) {
    const coords = button.getBoundingClientRect()
    modal.style.top = Math.floor(coords.bottom + 8) + 'px'
    modal.style.right = Math.floor(window.innerWidth - coords.right - button.offsetWidth) + 'px'
    modal.classList.add('_active')
    overlay.classList.add('_active')
  }

  function close(button: HTMLElement, modal: HTMLElement, overlay: HTMLElement) {
    modal.classList.remove('_active')
    overlay.classList.remove('_active')
  }

  const body = document
  const buttons: HTMLElement[] = Array.from(body.querySelectorAll('[data-hover]'))
  buttons.forEach((button) => {
    const modalName = button.getAttribute('data-hover').trim()
    const modal: HTMLElement = body.querySelector(`[data-modal=${ modalName }]`)
    const overlay: HTMLElement = body.querySelector(`[data-modal-overlay=${ modalName }]`)
    const buttonClose: HTMLElement = modal.querySelector('.modalCartClose')
    if (modal && overlay && buttonClose) {
      button.addEventListener('mouseenter', () => open(button, modal, overlay))
      // button.addEventListener('mouseleave', () => close(button, modal, overlay))
      overlay.addEventListener('click', () => close(button, modal, overlay))
      buttonClose.addEventListener('click', () => close(button, modal, overlay))
      modal.addEventListener('mouseleave', () => close(button, modal, overlay))
    }
  })
}, {
  passive: true,
  once: true,
})
