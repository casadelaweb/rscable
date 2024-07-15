import { CountUp } from 'countup.js'

document.addEventListener('DOMContentLoaded', () => {

  document.body.querySelectorAll('[data-counter]').forEach((counter: HTMLElement) => {

    const start = parseInt(counter.getAttribute('data-start')) || 0
    const delay = parseInt(counter.getAttribute('data-delay')) || 0
    const duration = parseInt(counter.getAttribute('data-duration')) || 2
    const target = parseInt(counter.getAttribute('data-counter'))
    new CountUp(counter, target, {
      startVal: start,
      duration: duration,
      useIndianSeparators: false,
      enableScrollSpy: true,
      scrollSpyDelay: delay * 1000,
      scrollSpyOnce: true,
      separator: ' '
    })
  })
}, {
  passive: true,
  once: true,
})


