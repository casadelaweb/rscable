class Header {
  public header: HTMLElement
  private headerHeight: number
  private readonly onResize: (event?: Event) => void
  private readonly onScroll: (event?: Event) => void

  constructor() {
    this.header = undefined
    this.headerHeight = undefined
    this.onResize = this.handleResize.bind(this)
  }

  public init(): void {
    this.updateElements()
    this.updateHeaderHeight()
    this.updateListeners()
  }

  private updateListeners(): void {
    this.updateGlobalListeners()
  }

  private updateGlobalListeners(): void {
    window.removeEventListener('resize', this.onResize)
    window.removeEventListener('scroll', this.onScroll)
    window.addEventListener('resize', this.onResize, { passive: true, })
    window.addEventListener('scroll', this.onScroll, { passive: true, })
  }

  private handleResize(): void {
    this.updateHeaderHeight()
  }

  private updateElements(): void {
    const { body, } = document
    this.header = body.querySelector('.header') ?? body.querySelector('header')
    this.headerHeight = this.header.offsetHeight
  }

  private updateHeaderHeight(): void {
    this.headerHeight = this.header.offsetHeight
    const value = this.headerHeight + 'px'
    document.documentElement.style.setProperty('--headerHeight', value)
  }
}

document.addEventListener('DOMContentLoaded', () => {
  new Header().init()
}, {
  passive: true,
  once: true,
})
