import Atropos from 'atropos'
import 'atropos/scss'

document.addEventListener('DOMContentLoaded', () => {
  const myAtropos = Atropos({
    el: '.my-atropos',
    activeOffset: 10,
    shadowScale: 1.05,
    rotate: true,
    rotateXMax: 4,
    rotateYMax: 4,
    rotateXInvert: true,
    rotateYInvert: true,
    alwaysActive: true,
  })
}, {
  passive: true,
  once: true,
})


