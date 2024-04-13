import { Tab } from 'src/components/global/tab/tab'
// import { modals } from 'src/scripts/modals-instance'

document.addEventListener('DOMContentLoaded', () => {
  new Tab().init()
  // const { body, } = document

  // document.addEventListener('modalOpen', (event) => {
  //   const modal: HTMLElement = event.target as HTMLElement
  //   if (modal.matches('[data-modal=login]')) {
  //     const modalRegistration: HTMLElement = body.querySelector('[data-modal=registration]')
  //     modals.deactivateModal(modalRegistration)
  //   }
  //
  //   if (modal.matches('[data-modal=registration]')) {
  //     const modalLogin: HTMLElement = body.querySelector('[data-modal=login]')
  //     modals.deactivateModal(modalLogin)
  //   }
  // })
}, {
  passive: true,
  once: true,
})
