import { validate } from 'src/components/units/formFeedback/helpers'

document.addEventListener('DOMContentLoaded', () => {
  const body = document.body

  const rating: HTMLElement = body.querySelector('.modalReviewFieldRating')
  if (rating) {
    const stars: Array<HTMLElement> = Array.from(rating.querySelectorAll('.icon-star'))
    const input: HTMLInputElement = rating.querySelector('input')

    function process(index: number) {
      stars.forEach((s, i) => {
        if (i <= index) {
          s.classList.add('_active')
        } else {
          s.classList.remove('_active')
        }
      })
      input.value = String(index)
      validate(input)
    }

    stars.forEach((star, index) => {
      star.addEventListener('mouseenter', () => process(index))
      star.addEventListener('click', () => process(index))
    })
  }
}, {
  passive: true,
  once: true,
})
