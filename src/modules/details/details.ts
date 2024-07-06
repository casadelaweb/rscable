import { iElementData, iSelectors, iOptions } from 'src/modules/details/details.types'
import './details.scss'
import { isMediaAboveLaptop } from 'src/scripts/helpers'

export class Details {
  private static readonly optionsDefault: iOptions = {
    preferButtonIfExist: true,
    selectors: {
      details: '[data-details=details]',
      summary: '[data-details=summary]',
      button: '[data-details=button]',
      content: '[data-details=body]',
      scrollbars: { vertical: 'has-vertical-scrollbar', },
    },
    onlyUnderLaptop: false,
  }
  public elements: iElementData[]
  public options: iOptions
  public selectors: iSelectors
  private readonly durationMax: number
  private readonly durationMin: number
  private readonly durationPerHeight: number
  private readonly easing: string

  private readonly onClick: (event: MouseEvent) => void
  private readonly onResize: (event?: UIEvent) => void

  constructor(optionsCustom?: iOptions) {
    this.selectors = {
      ...Details.optionsDefault.selectors,
      ...optionsCustom?.selectors,
    }
    this.elements = []
    this.durationMin = 250
    this.durationMax = 500
    this.durationPerHeight = 0.5
    this.easing = 'ease-in-out'
    this.onClick = this.handleClick.bind(this)
    this.onResize = this.handleResize.bind(this)

    this.options = {
      ...Details.optionsDefault,
      ...optionsCustom,
    }
  }

  public init(): void {
    this.updateListeners()
    this.updateElements()
  }

  public updateElements(): void {
    const { body, } = document

    const details: HTMLElement[] = Array.from(body.querySelectorAll(this.selectors.details))
    if (details.length > 0) this.elements = this.updateElementsData(details)
  }

  public openAll() {
    this.elements.forEach((element) => {
      element.parameters.isOpen = element.details.classList.contains('open')
      if (!element.parameters.isOpen) this.expand(element)
    })
  }

  public collapseAll() {
    this.elements.forEach((element) => {
      element.parameters.isOpen = element.details.classList.contains('open')
      if (element.parameters.isOpen) this.shrink(element)
    })
  }

  private calculateDuration(startHeight: number, endHeight: number): number {
    let duration = this.durationMin

    const valueAddedDuration: number = Math.abs(endHeight - startHeight)
    duration = duration + (valueAddedDuration * this.durationPerHeight)

    if (duration > this.durationMax) duration = this.durationMax

    duration = Math.round(duration)

    return duration
  }

  private expand(data: iElementData): void {
    data.parameters.isOpening = true
    data.details.classList.add('is-opening')
    data.content.classList.add('is-opening')

    const startHeight: string = data.details.offsetHeight + 'px'
    const endHeight: string = data.summary.offsetHeight + data.content.offsetHeight + 'px'

    if (data.parameters.animation) data.parameters.animation.cancel()

    data.parameters.animation = data.details.animate({ height: [startHeight, endHeight,], }, {
      duration: this.calculateDuration(data.details.offsetHeight, data.summary.offsetHeight + data.content.offsetHeight),
      easing: this.easing,
    })

    data.parameters.animation.onfinish = () => this.onAnimationFinish(data, true)
    data.parameters.animation.oncancel = () => data.parameters.isOpening = false
  }

  private handleClick(event: MouseEvent): void {
    const target = event.target as HTMLElement
    const condition = target.closest(this.selectors.summary) || target.closest(this.selectors.button)

    if (condition && !target.closest('a[href]')) {
      event.preventDefault()

      const summary = target.closest(this.selectors.summary)
      const data: iElementData = this.elements.find((data: iElementData) => {
        return data.summary === summary ? data : false
      })

      data.details.style.overflow = 'hidden'
      if (data.parameters.isClosing || !data.parameters.isOpen) {
        this.open(data)
      } else if (data.parameters.isOpening || data.parameters.isOpen) {
        this.shrink(data)
      }
    }
  }

  private handleResize(): void {
    this.updateClickListeners()
  }

  private hasVerticalScrollbar(element: HTMLElement): boolean {
    return element.scrollHeight > element.clientHeight
  }

  private onAnimationFinish(data: iElementData, open: boolean): void {
    data.details.open = open
    data.parameters.isOpen = open
    data.parameters.animation = null
    data.parameters.isClosing = false
    data.parameters.isOpening = false
    data.details.style.height = data.details.style.overflow = ''
    this.setupScrollbarStyles(data.details)
    this.updateDetailsStyles(data.details, open)
    this.updateDetailsStyles(data.content, open)
    data.content.classList.remove('is-closing')
    data.content.classList.remove('is-opening')
    data.details.classList.remove('is-closing')
    data.details.classList.remove('is-opening')
  }

  private open(data: iElementData): void {
    data.details.style.height = data.details.offsetHeight + 'px'
    data.details.open = true
    window.requestAnimationFrame(() => this.expand(data))
  }

  private setupScrollbarStyles(element: HTMLElement): void {
    const hasVerticalScrollbar: boolean = this.hasVerticalScrollbar(element)

    if (hasVerticalScrollbar === false) {
      element.classList.remove(this.selectors.scrollbars.vertical)
    } else {
      element.classList.add(this.selectors.scrollbars.vertical)
    }
  }

  private shrink(data: iElementData): void {
    data.parameters.isClosing = true
    data.details.classList.add('is-closing')
    data.content.classList.add('is-closing')

    const startHeight: string = data.details.offsetHeight + 'px'
    const endHeight: string = data.summary.offsetHeight + 'px'

    if (data.parameters.animation) data.parameters.animation.cancel()

    data.parameters.animation = data.details.animate({ height: [startHeight, endHeight,], }, {
      duration: this.calculateDuration(data.details.offsetHeight, data.summary.offsetHeight),
      easing: this.easing,
    })

    data.parameters.animation.onfinish = () => this.onAnimationFinish(data, false)
    data.parameters.animation.oncancel = () => data.parameters.isClosing = false
  }

  private updateClickListeners(): void {
    if (this.options.onlyUnderLaptop) {

      document.removeEventListener('click', this.onClick)
      if (!isMediaAboveLaptop()) document.addEventListener('click', this.onClick)

    } else {
      document.removeEventListener('click', this.onClick)
      document.addEventListener('click', this.onClick)
    }
  }

  private updateDetailsStyles(element: HTMLElement, isOpen: boolean): void {
    if (isOpen) {
      element.classList.add('open')
    } else {
      element.classList.remove('open')
    }
  }

  private updateElementsData(elements: HTMLElement[]): iElementData[] {
    return elements.map((element: HTMLDetailsElement) => {
      const isOpen = element.classList.contains('open') || element.hasAttribute('open')
      const content: HTMLElement = element.querySelector(this.selectors.content)
      if (isOpen) content.classList.add('open')

      return {
        details: element,
        summary: element.querySelector(this.selectors.summary),
        button: element.querySelector(this.selectors.button),
        content,
        parameters: {
          isOpen,
          isClosing: false,
          isOpening: false,
        },
      }
    })
  }

  private updateListeners(): void {
    window.removeEventListener('resize', this.onResize)
    window.addEventListener('resize', this.onResize)

    this.updateClickListeners()
  }
}
