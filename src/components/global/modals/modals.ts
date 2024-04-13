import 'src/components/global/modals/modals.scss'
import { Hooks, Options, Parameters } from 'src/components/global/modals/modals.types'
import { throwEvent } from 'src/scripts/helpers'

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
  private readonly hooks: Hooks
  private readonly onOpen: any
  private readonly onClose: any
  private readonly onBeforeOpen: any
  private readonly onBeforeClose: any
  private readonly onClick: (event: MouseEvent) => any
  private readonly onKeyUp: (event: KeyboardEvent) => any
  private readonly onScroll: (event: Event) => any

  constructor({ hooks, }) {
    this.options = {
      selectors: {
        modal: '[data-modal]',
        buttonOpen: '[data-modal-open]',
        buttonClose: '[data-modal-close]',
        buttonToggle: '[data-modal-toggle]',
        header: 'header',
        overlay: '[data-modal-overlay]',
      },
      transition: {
        duration: 333,
        style: () => {
          return 'all ' + this.options.transition.duration + 'ms'
        },
      },
    }
    this.hooks = {
      // eslint-disable-next-line @typescript-eslint/no-empty-function
      beforeOpen() {
      },
      // eslint-disable-next-line @typescript-eslint/no-empty-function
      open() {
      },
      // eslint-disable-next-line @typescript-eslint/no-empty-function
      beforeClose() {
      },
      // eslint-disable-next-line @typescript-eslint/no-empty-function
      close() {
      },
      ...hooks,
    }

    this.onOpen = this.hooks.open.bind(this)
    this.onClose = this.hooks.close.bind(this)
    this.onBeforeOpen = this.hooks.beforeOpen.bind(this)
    this.onBeforeClose = this.hooks.beforeClose.bind(this)
    this.onClick = this.handleClick.bind(this)
    this.onKeyUp = this.handleKeyUp.bind(this)
    this.onScroll = this.handleScroll.bind(this)

    this.parameters = {
      counter: 0,
      all: [],
      current: false,
      lastScrollVerticalPosition: 0,
    }
  }

  public update(): void {
    const { documentElement: html, } = document
    html.style.setProperty('--modal-transition', this.options.transition.style())
  }

  public activateModal(modal: HTMLElement, trigger?: any): void {
    throwEvent(modal, Modals.events.beforeOpen, { trigger: trigger, })
    this.onBeforeOpen()

    modal.classList.add('active')

    if (!this.parameters.all.includes(modal)) {
      this.parameters.all.push(modal)
      this.parameters.counter++
    }

    this.parameters.current = modal
    this.parameters.all.forEach((modal) => modal.classList.remove('current'))
    this.parameters.current.classList.add('current')

    if (this.parameters.current === modal) {
      this.overlay.classList.add('active')
    }
    this.onOpen()

    throwEvent(modal, Modals.events.open, { trigger: trigger, })
  }

  public deactivateModal(modal: HTMLElement, trigger?: any): void {
    // если модальное окно не активно
    // выходим из метода
    if (!modal.classList.contains('active')) return

    throwEvent(modal, Modals.events.beforeClose, { trigger: trigger, })
    this.onBeforeClose()

    modal.classList.remove('active')

    new Promise<void>((resolve) => {

      setTimeout(() => {
        this.parameters.all.forEach((modal) => modal.classList.remove('current'))
        this.parameters.all = this.parameters.all.slice(0, -1)
        const lastModal = this.parameters.all[this.parameters.all.length - 1]
        this.parameters.current = lastModal ? lastModal : false
        if (this.parameters.current instanceof HTMLElement) {
          this.parameters.current.classList.add('current')
        } else {
          this.parameters.all.forEach((modal) => modal.classList.remove('current'))
        }
        this.parameters.counter--
        resolve()
      }, this.options.transition.duration)

    }).then(() => {
      if (this.parameters.counter === 0) {
        this.overlay.classList.remove('active')
      }
      this.onClose()
      return throwEvent(modal, Modals.events.close, { trigger: trigger, })
    })
  }

  public toggleModal(modal: HTMLElement, trigger?: any): void {
    if (this.parameters.counter > 0) {
      this.deactivateModal(modal, trigger)
    } else {
      this.activateModal(modal, trigger)
    }
  }

  public init(): void {
    this.update()

    const { body, } = document
    const { selectors, } = this.options

    const activeModals = body.querySelectorAll(selectors.modal + '.active')
    if (activeModals.length > 0) {
      activeModals.forEach((modal: HTMLElement) => {
        this.activateModal(modal)
      })
    }

    // if (this.overlay) {
    this.overlay = body.querySelector(this.options.selectors.overlay)
    // } else {
    //   const overlay: HTMLElement = document.createElement('div')
    //   overlay.classList.add('modal-overlay')
    //   overlay.setAttribute('data-modal-overlay', '')
    //   body.appendChild(overlay)
    //   this.overlay = overlay
    // }


    this.listen()
  }

  private listen(): void {
    document.removeEventListener('click', this.onClick)
    document.removeEventListener('keyup', this.onKeyUp)
    window.removeEventListener('scroll', this.onScroll)

    document.addEventListener('click', this.onClick, { passive: true, })
    document.addEventListener('keyup', this.onKeyUp, { passive: true, })
    window.addEventListener('scroll', this.onScroll, { passive: true, })
  }

  private handleClick(event: MouseEvent): void {
    const { body, } = document
    const { selectors, } = this.options

    const target = event.target as HTMLElement
    const conditions = {
      buttonOpen: target.closest(selectors.buttonOpen),
      buttonClose: target.closest(selectors.buttonClose),
      buttonToggle: target.closest(selectors.buttonToggle),
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

    if (target.closest(selectors.overlay) && this.parameters.current) {
      const isElement = this.parameters.current instanceof HTMLElement
      if (isElement && this.parameters.current.matches(selectors.modal)) {
        this.deactivateModal(this.parameters.current)
      }
    }
  }

  private handleKeyUp(event: KeyboardEvent): void {
    if (event.code === 'Escape' &&
      this.parameters.all.length > 0 &&
      this.parameters.current instanceof HTMLElement
    ) {
      const { body, } = document

      this.deactivateModal(this.parameters.current, {
        type: 'keyup',
        key: 'Escape',
        element: false,
        boundedWith: body.querySelector('[data-modal-open]'),
      })

    }
  }

  private handleScroll(event: Event): void {

  }
}

export default Modals
