import IMask from 'imask'

export class Masks {
  private elements: HTMLElement[]
  private patterns: {
    tel: string,
    email: RegExp
  }
  private regExps: { email: RegExp }
  private selectors: {
    tel: string,
    email: string,
  }

  constructor() {
    this.elements = []
    this.selectors = {
      tel: '[data-validate=tel]',
      email: '[data-validate=email]',
    }
    this.patterns = {
      tel: '+7 (000) 000-00-00',
      email: /^\S*@?\S*$/,
    }
    this.regExps = { email: new RegExp(/^[a-zA-Z0-9][-_.+!#$%&'*/=?^`{|]?([a-zA-Z0-9][-_.+!#$%&'*/=?^`{|]?)*[a-zA-Z0-9]@[a-zA-Z0-9][-.]?([a-zA-Z][-.]?)*[a-zA-Z0-9]\.[a-zA-Z0-9]+([.-]?[a-zA-Z])*[a-zA-Z0-9]*$/i), }
  }

  public init(): void {
    const { body, } = document

    const tels: HTMLElement[] = Array.from(body.querySelectorAll(this.selectors.tel))
    const emails: HTMLElement[] = Array.from(body.querySelectorAll(this.selectors.email))
    this.elements = [...tels, ...emails,]
    this.elements.forEach((element: HTMLElement) => {
      if (element.matches(this.selectors.tel)) IMask(element, { mask: this.patterns.tel, })
      if (element.matches(this.selectors.email)) IMask(element, { mask: this.patterns.email, })
    })
  }
}
