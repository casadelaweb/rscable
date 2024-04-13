// import { globalScrollController } from 'src/scripts/global-scroll-controller'
import { isMediaAboveLaptop } from 'src/scripts/helpers'

class InfoAside {
  private header: HTMLElement
  private nav: HTMLElement
  private button: HTMLElement
  private list: HTMLElement
  private overlay: HTMLElement
  private selectors: {
    header: string,
    nav: string,
    button: string,
    list: string,
    overlay: string,
  }
  private readonly onClick: (event: MouseEvent) => any

  constructor() {
    this.selectors = {
      header: '.info-nav-header',
      nav: '.info-nav',
      button: '.info-nav-button',
      list: '.info-nav-list',
      overlay: '.info-nav-overlay',
    }
    this.onClick = this.handleClick.bind(this)
  }

  public init(): void {
    this.updateElements()
    this.updateListeners()
  }

  private toggle(): void {
    if (this.isActive()) this.deactivate()
    else this.activate()
  }

  private activate(): void {
    this.header.classList.add('active')
    this.nav.classList.add('active')
    this.button.classList.add('active')
    this.list.classList.add('active')
    this.overlay.classList.add('active')
  }

  private deactivate(): void {
    this.header.classList.remove('active')
    this.nav.classList.remove('active')
    this.button.classList.remove('active')
    this.list.classList.remove('active')
    this.overlay.classList.remove('active')
  }

  private handleClick(event: MouseEvent): void {
    const target = event.target as HTMLElement

    if (isMediaAboveLaptop()) return

    if (target.closest(this.selectors.header)) {
      this.toggle()
    } else if (this.isActive() && !target.closest(this.selectors.nav)) {
      this.deactivate()
    } else if (target.closest(this.selectors.overlay)) {
      this.deactivate()
    }
  }

  private isActive(): boolean {
    let result: boolean = false
    if (this.header) result = this.header.classList.contains('active')

    return result
  }

  private updateElements(): void {
    const body = document.body as HTMLElement

    this.header = body.querySelector(this.selectors.header)
    this.nav = body.querySelector(this.selectors.nav)
    this.button = body.querySelector(this.selectors.button)
    this.list = body.querySelector(this.selectors.list)
    this.overlay = body.querySelector(this.selectors.overlay)
  }

  private updateListeners(): void {
    document.removeEventListener('click', this.onClick)
    document.addEventListener('click', this.onClick)
  }
}

document.addEventListener('DOMContentLoaded', () => {
  const aside = new InfoAside()
  aside.init()
}, {
  passive: true,
  once: true,
})
