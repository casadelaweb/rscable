import 'src/modules/modals/modals.scss'
import { Hooks, Options, Parameters } from 'src/modules/modals/modals.types'
import { throwEvent } from 'src/scripts/helpers'
import { globalScrollController } from 'src/scripts/globalScrollController'

class Modals {
  private static readonly events = {
    beforeOpen: 'modalBeforeOpen',
    open: 'modalOpen',
    beforeClose: 'modalBeforeClose',
    close: 'modalClose',
  }
  public parameters: Parameters
  public options: Options
  public overlay: HTMLElement
  private readonly onBeforeOpen: () => any
  private readonly onOpen: () => any
  private readonly onBeforeClose: () => any
  private readonly onClose: () => any
  private readonly onClick: (event: MouseEvent) => any
  private readonly onKeyUp: (event: KeyboardEvent) => any

  constructor() {
    this.options = {
      selectors: {
        modal: '[data-modal]',
        buttonOpen: '[data-modal-open]',
        buttonClose: '[data-modal-close]',
        buttonToggle: '[data-modal-toggle]',
        header: 'header',
        overlay: (modalName: string) => `[data-modal-overlay=${ modalName }]`,
      },
      transition: {
        duration: 333,
        style: () => {
          return 'all ' + this.options.transition.duration + 'ms'
        },
      },
    }
    this.onBeforeOpen = function () {
      const modalCurrent = this.parameters.current
      if (modalCurrent) {
        this.deactivateModal(modalCurrent)
      }
    }.bind(this)
    this.onOpen = function () {
      const modalCurrent = this.parameters.current
      if (modalCurrent) {
        globalScrollController.lock()
      }
    }.bind(this)
    this.onBeforeClose = function () {
      const modalCurrent = this.parameters.current
      if (modalCurrent) {
      }
    }.bind(this)
    this.onClose = function () {
      setTimeout(() => {
        const modalCurrent = this.parameters.current
        if (modalCurrent) {

        } else {
          globalScrollController.unlock()
        }
      }, this.options.transition.duration)
    }.bind(this)

    this.onClick = this.handleClick.bind(this)
    this.onKeyUp = this.handleKeyUp.bind(this)

    this.parameters = {
      current: null
    }
  }

  public update(): void {
    const { documentElement: html, } = document
    html.style.setProperty('--modal-transition', this.options.transition.style())
    globalScrollController.init()

    document.removeEventListener('click', this.onClick)
    document.removeEventListener('keyup', this.onKeyUp)

    document.addEventListener('click', this.onClick, { passive: true, })
    document.addEventListener('keyup', this.onKeyUp, { passive: true, })
  }

  public activateModal(modal: HTMLElement, trigger?: any): void {
    const modalName = this.getModalName(modal)
    const modalOverlay = this.getModalOverlay(modalName)

    throwEvent(modal, Modals.events.beforeOpen, { trigger: trigger, })
    this.onBeforeOpen()

    this.parameters.current = modal
    modal.classList.add('_active')
    modalOverlay.classList.add('_active')
    this.parameters.current = modal

    this.onOpen()
    throwEvent(modal, Modals.events.open, { trigger: trigger, })
  }

  public deactivateModal(modal: HTMLElement, trigger?: any): void {
    const modalName = this.getModalName(modal)
    const modalOverlay = this.getModalOverlay(modalName)

    throwEvent(modal, Modals.events.beforeClose, { trigger: trigger, })
    this.onBeforeClose()

    modal.classList.remove('_active')
    modalOverlay.classList.remove('_active')
    this.parameters.current = null

    this.onClose()
    throwEvent(modal, Modals.events.close, { trigger: trigger, })
  }

  public toggleModal(modal: HTMLElement, trigger?: any): void {
    const modalCurrent = this.parameters.current

    // если модальное окно уже открыто
    if (modalCurrent && this.getModalName(modal) !== this.getModalName(modalCurrent)) {
      this.deactivateModal(modalCurrent)
      this.activateModal(modal)
    } else if (modalCurrent && this.getModalName(modal) === this.getModalName(modalCurrent)) {
      this.deactivateModal(modal)
    } else {
      this.activateModal(modal)
    }

    // if (modalCurrent && this.getModalName(modalCurrent) === this.getModalName(modal)) {
    //   this.deactivateModal(modalCurrent)
    // }
    //
    // if (this.parameters.current) {
    //   this.deactivateModal(modal, trigger)
    // } else {
    //   this.activateModal(modal, trigger)
    // }
  }

  public init(): void {
    this.update()

    const { body, } = document
    const { selectors, } = this.options

    const activeModals = Array.from(body.querySelectorAll(selectors.modal + '._active'))
    if (activeModals.length > 0) {
      activeModals.forEach((modal: HTMLElement) => this.activateModal(modal))
    }
  }

  private getModalOverlay(modalName: string): HTMLElement {
    const selector = this.options.selectors.overlay(modalName)
    return document.body.querySelector(selector)
  }

  private getModalName(modal: HTMLElement): string {
    return modal.getAttribute('data-modal').trim()
  }

  private handleClick(event: MouseEvent): void {
    const { body, } = document
    const { selectors, } = this.options

    const target = event.target as HTMLElement
    const conditions = {
      buttonOpen: target.closest(selectors.buttonOpen) as HTMLElement,
      buttonClose: target.closest(selectors.buttonClose) as HTMLElement,
      buttonToggle: target.closest(selectors.buttonToggle) as HTMLElement,
    }

    if (conditions.buttonOpen) {
      const { buttonOpen: button, } = conditions
      const attribute = selectors.buttonOpen.slice(1, -1)
      const modal: HTMLElement = body.querySelector('[data-modal=' + button.getAttribute(attribute) + ']')
      if (modal) this.activateModal(modal, button)
    }
    if (conditions.buttonClose) {
      const { buttonClose: button, } = conditions
      let modal: HTMLElement

      if (button.getAttribute(selectors.buttonClose)) {
        const attribute = selectors.buttonClose.slice(1, -1)
        modal = body.querySelector('[data-modal=' + button.getAttribute(attribute) + ']')
      } else {
        modal = button.closest(selectors.modal)
      }

      if (modal) this.deactivateModal(modal, button)
    }
    if (conditions.buttonToggle) {
      const { buttonToggle: button, } = conditions
      const attribute = selectors.buttonToggle.slice(1, -1)
      const modal: HTMLElement = body.querySelector('[data-modal=' + button.getAttribute(attribute) + ']')
      if (modal) this.toggleModal(modal, button)
    }

    if (target.closest('[data-modal-overlay]')) {
      const overlay: HTMLElement = target.closest('[data-modal-overlay]')
      const modalName = overlay.getAttribute('data-modal-overlay').trim()
      const modal: HTMLElement = body.querySelector(`[data-modal=${ modalName }]`)

      this.deactivateModal(modal)
    }

    // if (target.closest('[data-modal-overlay]') && this.parameters.current) {
    //   const isElement = this.parameters.current instanceof HTMLElement
    //   if (isElement && this.parameters.current.matches(selectors.modal)) {
    //     this.deactivateModal(this.parameters.current)
    //   }
    // }
  }

  private handleKeyUp(event: KeyboardEvent): void {
    if (event.code === 'Escape' && this.parameters.current !== null) {
      const { body, } = document
      this.deactivateModal(this.parameters.current, {
        type: 'keyup',
        key: 'Escape',
        element: false,
        boundedWith: body.querySelector('[data-modal-open]'),
      })
    }
  }
}

export default Modals
