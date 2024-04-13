export class Product {
  private readonly onScroll: (event?: Event) => any
  private selectors: {
    container: string,
    sticky: string,
  }
  private elements: {
    container: HTMLElement
    sticky: HTMLElement,
  }

  constructor() {
    this.selectors = {
      container: '[data-product=container]',
      sticky: '[data-product=sticky]',
    }
    this.onScroll = this.handleScroll.bind(this)
  }

  public init(): void {
    const body = document.body as HTMLElement
    this.elements = {
      container: body.querySelector(this.selectors.container),
      sticky: body.querySelector(this.selectors.sticky),
    }
    window.removeEventListener('scroll', this.onScroll)
    window.addEventListener('scroll', this.onScroll, { passive: true, })
  }

  private handleScroll(event: Event) {
    if (!this.elements.container) return
    const scrolled = window.scrollY
    // const height = this.elements.sticky.offsetHeight
    const heightParent = this.elements.container.offsetHeight


    const { top, height, bottom, } = this.elements.sticky.getBoundingClientRect()


    if (scrolled > height && scrolled < heightParent) {
      //this.elements.sticky.classList.add('sticky')
      //this.elements.sticky.style.transform = `translate3d(0, ${scrolled}px, 0)`
    } else if (scrolled > height && scrolled > heightParent) {
      // this.elements.sticky.classList.remove('sticky')
      //this.elements.sticky.style.transform = `translate3d(0,${scrolled}px, 0)`
      // this.elements.sticky.style.transform = 'none'
    } else {
      // this.elements.sticky.classList.remove('sticky')
    }
  }
}
