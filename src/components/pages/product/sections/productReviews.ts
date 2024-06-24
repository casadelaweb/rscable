// document.addEventListener('DOMContentLoaded', () => {
//   const body = document.body
//
//   body.addEventListener('click', (event: MouseEvent) => {
//     const target = event.target as HTMLElement
//
//     if (target.closest('.productReviewToggle')) {
//       const button: HTMLElement = target.closest('.productReviewToggle')
//       const container: HTMLElement = target.closest('.productReviewsItem')
//       const answers: HTMLElement = container.querySelector('.productReviewAnswers')
//       const answersAll: Array<HTMLElement> = Array.from(answers.querySelectorAll('.reviewAnswer'))
//       answersAll.forEach((element) => {
//         button.classList.toggle('_active')
//         element.classList.toggle('_active')
//       })
//     }
//   })
// }, {
//   passive: true,
//   once: true,
// })
