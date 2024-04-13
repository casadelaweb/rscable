import { menu } from 'src/scripts/menu-instance'

document.addEventListener('DOMContentLoaded', () => {
  menu.init()
}, {
  passive: true,
  once: true,
})
