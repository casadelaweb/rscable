export class Tab {

  private readonly onClick: (event: MouseEvent) => void
  private readonly selectors: {
    button: string,
    tab: string,
    content: string
  }

  constructor() {
    this.selectors = {
      button: '[data-tab-button]',
      content: '[data-tab-content]',
      tab: '[data-tab]',
    }
    this.onClick = this.handleClick.bind(this)
  }

  public init(): void {
    document.removeEventListener('click', this.onClick)
    document.addEventListener('click', this.onClick)
  }

  private handleClick(event: MouseEvent): void {
    const target = event.target as HTMLElement

    if (target.closest(this.selectors.button)) {
      const { body, } = document
      const button: HTMLElement = target.closest(this.selectors.button)

      const tabName: string = '[data-tab=' + button.getAttribute('data-tab') + ']'
      //@ts-ignore
      const elements: HTMLElement[] = [...body.querySelectorAll(tabName),]

      const buttonTabContent: string = button.getAttribute('data-tab-button')
      const tabContent: HTMLElement = elements.find((element: HTMLElement) => {
        return element.matches('[data-tab-content=' + buttonTabContent + ']')
      })


      elements.forEach((element: HTMLElement) => element.classList.remove('active'))
      button.classList.add('active')
      tabContent.classList.add('active')
    }
  }
}
