document.addEventListener('DOMContentLoaded', () => {
  const body = document.body

  body.addEventListener('click', (event: MouseEvent) => {
    const target = event.target as HTMLElement

    if (target.closest('.productReviewAnswersToggle')) {
      const button: HTMLElement = target.closest('.productReviewAnswersToggle')
      const answers: HTMLElement = target.closest('.productReviewAnswers')
      const answersAll: Array<HTMLElement> = Array.from(answers.querySelectorAll('.productReviewAnswer'))
      answersAll.forEach((element) => {
        button.classList.toggle('_active')
        element.classList.toggle('_active')
      })
    }
  })
}, {
  passive: true,
  once: true,
})
