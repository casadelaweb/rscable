import flatpickr from 'flatpickr'
import { Russian } from 'flatpickr/dist/l10n/ru.js'
import 'flatpickr/dist/flatpickr.css'
import 'flatpickr/dist/ie.css'
// import 'flatpickr/dist/themes/airbnb.css'
import './calendar.scss'

export class Calendar {
  private selectors: { inputDate: string, }
  private elements: HTMLInputElement[]
  private calendars: any

  constructor() {
    this.selectors = { inputDate: '[data-calendar=input]', }
    this.elements = []
    this.calendars = []
  }

  public init(): void {
    this.updateElements()
    this.elements.forEach((element) => {
      this.updateFlatpicker(element)
    })

  }

  private updateElements(): void {
    this.elements = Array.from(document.body.querySelectorAll(this.selectors.inputDate))
  }

  private updateFlatpicker(element: HTMLInputElement) {
    const calendar = flatpickr(element, {
      enableTime: false,
      dateFormat: 'd.m.Y',
      locale: Russian,
      minDate: '1.1.1900',
      maxDate: 'today',
      defaultDate: flatpickr.parseDate(flatpickr.parseDate(element.value.toString(), 'Y-m-d'), 'd.m.Y'),
      disableMobile: true,
      mode: 'single',
    })
    this.calendars.push(calendar)
  }
}
