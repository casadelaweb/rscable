import './select.scss'
import { iSelectors } from 'src/modules/select/select.types'

interface iElement {
  button: HTMLElement,
  current: HTMLElement,
  option: HTMLElement,
  options: HTMLElement,
  select: HTMLElement,
  value: HTMLElement,
}

interface iOptions {
  selectors: iSelectors
}

export class Select {
  private static readonly optionsDefault: iOptions = {
    selectors: {
      select: '.select',
      current: '.select-current',
      value: '.select-current-value',
      button: '.select-current-button',
      options: '.select-options',
      option: '.select-option',
    },
  }
  public elements: iElement[]
  private readonly onClick: (event: MouseEvent) => void
  private parameters: {
    current: HTMLElement | HTMLElement[]
  }
  private selectors: iSelectors

  constructor(optionsCustom?: iOptions) {
    this.selectors = {
      ...Select.optionsDefault.selectors,
      ...optionsCustom?.selectors,
    }
    this.parameters = { current: [], }
    this.elements = []
    this.onClick = this.handleClick.bind(this)
  }

  public init(): void {
    this.updateClickListeners()
    this.update()
  }

  public updateSelects(): void {
    // если не массив, выходим сразу
    if (!Array.isArray(this.elements)) return

    // небольшая задержка, чтобы компенсировать задержку после события reset
    setTimeout(() => {
      this.elements.forEach((element: iElement) => this.updateTextSelected(element.select))
    }, 100)
  }

  private deactivate(select: HTMLElement): void {
    const options: HTMLElement = select.querySelector(this.selectors.options)
    const button: HTMLElement = select.querySelector(this.selectors.button)

    select.classList.remove('active')
    options.classList.remove('active')
    button.classList.remove('active')
  }

  private handleClick(event: MouseEvent): void {
    const target = event.target as HTMLElement

    if (target.closest(this.selectors.current)) {
      const select: HTMLElement = target.closest(this.selectors.select)
      const options: HTMLElement = select.querySelector(this.selectors.options)
      const button: HTMLElement = select.querySelector(this.selectors.button)

      if (this.parameters.current instanceof HTMLElement && this.parameters.current !== select) {
        this.deactivate(this.parameters.current)
      }
      this.parameters.current = select
      select.classList.toggle('active')
      options.classList.toggle('active')
      button.classList.toggle('active')
    }

    if (target.closest(this.selectors.option)) {
      const select: HTMLElement = target.closest(this.selectors.select)
      this.updateTextSelected(select)
    }

    if (!target.closest(this.selectors.select)) {
      if (this.parameters.current instanceof HTMLElement) this.deactivate(this.parameters.current)
    }
  }

  private update(): void {
    this.updateElements()
    this.updateSelects()
  }

  private updateClickListeners(): void {
    document.removeEventListener('click', this.onClick)
    document.addEventListener('click', this.onClick)
  }

  private updateElements(): void {
    const { body, } = document

    const selects: HTMLElement[] = Array.from(body.querySelectorAll(this.selectors.select))

    selects.forEach((select: HTMLElement) => {
      this.updateTextSelected(select)
      const element: iElement = {
        select: select,
        current: select.querySelector(this.selectors.current),
        value: select.querySelector(this.selectors.value),
        button: select.querySelector(this.selectors.button),
        options: select.querySelector(this.selectors.options),
        option: select.querySelector(this.selectors.option),
      }

      this.elements.push(element)
    })
  }

  private updateTextSelected(select: HTMLElement): void {
    const options: HTMLElement[] = Array.from(select.querySelectorAll(this.selectors.option))
    const optionsActive = options.filter((option: HTMLElement) => {
      const input = option.querySelector('input')
      return input && input.checked
    })
    const valueContainer: HTMLElement = select.querySelector(this.selectors.value)
    let valueContent: string = ''

    if (valueContainer.hasAttribute('data-select') && valueContainer.getAttribute('data-select').trim().toLowerCase() === 'no-overwrite') {
      return
    } else {
      if (optionsActive.length > 0) {
        optionsActive.forEach((option, index) => {
          if (index + 1 === optionsActive.length) {
            valueContent = valueContent + option.textContent
          } else {
            valueContent = valueContent + option.textContent + ', '
          }
        })

        valueContent = valueContent.trim().replace(/\s+/gmi, ' ').replace(/\s+,\s+/gmi, ', ')
      }
      valueContainer.setAttribute('title', valueContent)
      valueContainer.textContent = valueContent
    }
  }
}
