import { iMenuElements, iMenuSelectors } from './menu.types'
import { isMediaAboveLaptop } from 'src/scripts/helpers'

export class Menu {
  public elements: iMenuElements
  private readonly onResize: () => void
  private readonly selectors: iMenuSelectors

  constructor() {
    this.elements = {
      overlay: null,
      header: null,
      menu: null,
      buttonsDesktopClose: [],
      buttonDesktopOpen: null,
    }
    this.selectors = {
      header: 'header',
      menu: '[data-modal=menu]',
      buttonDesktopOpen: '[data-menu=desktop-open]',
      buttonsDesktopClose: ['a', 'button',],
      overlay: '[data-modal-overlay]',
    }

    this.onResize = this.handleResize.bind(this)
  }

  public init(): void {
    this.updateElements()
    //this.updateMenuStyles()
    this.listen()
  }

  private handleResize(): void {
    this.updateElements()
    //this.updateMenuStyles()
  }

  private listen(): void {
    const { buttonsDesktopClose, buttonDesktopOpen, menu, } = this.elements

    buttonsDesktopClose.forEach((button) => {
      button.addEventListener('mouseenter', () => {
        if (isMediaAboveLaptop()) {
          menu.classList.remove('active')
        }
      })
    })
    buttonDesktopOpen.addEventListener('mouseenter', () => {
      if (isMediaAboveLaptop()) {
        // header.classList.add('active')
        menu.classList.add('active')
      }
    })
    menu.addEventListener('mouseleave', () => {
      if (isMediaAboveLaptop()) {
        // header.classList.remove(('active'))
        menu.classList.remove('active')
      }
    })
    window.addEventListener('resize', this.onResize)
  }

  private updateElements(): void {
    const { body, } = document
    const { selectors, } = this

    this.elements.overlay = body.querySelector(selectors.overlay)
    this.elements.header = body.querySelector(selectors.header)
    this.elements.menu = body.querySelector(selectors.menu)

    this.elements.buttonsDesktopClose = []
    selectors.buttonsDesktopClose.forEach((selector: string) => {
      const buttons: HTMLElement[] = Array.from(this.elements.header.querySelectorAll(selector))

      buttons.forEach((button: HTMLElement) => {
        if (!button.matches(selectors.buttonDesktopOpen)) {
          this.elements.buttonsDesktopClose.push(button)
        }
      })
    })

    this.elements.buttonDesktopOpen = body.querySelector(selectors.buttonDesktopOpen)
  }
}
