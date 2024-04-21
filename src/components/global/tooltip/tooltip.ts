// import { iSettings } from 'src/components/global/toolip/tooltip.types'
import './tooltip.scss'

export class Tooltip {
  private static readonly settingsDefault: any
  private readonly onScroll: (event: Event) => any
  private readonly onResize: (event: Event) => any
  private tooltip: HTMLElement
  private lastTarget: HTMLElement

  constructor() {
    this.onResize = this.handleResize.bind(this)
    this.onScroll = this.handleScroll.bind(this)
    // this.elements
    this.tooltip = null
  }

  public create(): void {
    const tooltip: HTMLElement = document.createElement('div')
    tooltip.setAttribute('data-tooltip', 'tooltip')
    tooltip.classList.add('tooltip')
    tooltip.textContent = 'Tooltip has been created'

    // const span: HTMLSpanElement = document.createElement('span')
    // span.textContent = 'Tooltip has been created'
    // tooltip.appendChild(span)

    document.body.querySelector('#app').appendChild(tooltip)

    this.tooltip = tooltip
  }

  public setText(text: string): void {
    this.tooltip.textContent = text
  }

  public show(): void {
    this.tooltip.classList.add('_active')
  }

  public hide(): void {
    this.tooltip.classList.remove('_active')
  }

  public toggle(): void {
    this.tooltip.classList.toggle('_active')
  }

  public init(): void {
    this.updateListeners()
    this.create()
  }

  public position(target: HTMLElement): void {
    const coordinates = target.getBoundingClientRect()

    const top: number = Math.round(coordinates.bottom) + 14
    const left: number = Math.round(coordinates.left)
    //const right: number = Math.round(coordinates.right) + 14

    //if (this.tooltip.offsetWidth > right) {
    //  this.tooltip.style.top = top + 'px'
    //  this.tooltip.style.left = document.documentElement.clientWidth - 14 + 'px'
    //} else {
    this.tooltip.style.top = top + 'px'
    this.tooltip.style.left = left + 'px'
    this.tooltip.style.maxWidth = target.offsetWidth + 'px'
    //}

    this.lastTarget = target
  }

  private updateListeners(): void {
    window.removeEventListener('scroll', this.onScroll)
    window.addEventListener('scroll', this.onScroll, { passive: true, })

    window.removeEventListener('resize', this.onResize)
    window.addEventListener('resize', this.onResize, { passive: true, })
  }

  private handleScroll() {
    if (this.tooltip) this.hide()
  }

  private handleResize() {
    if (this.lastTarget) this.position(this.lastTarget)
  }
}
