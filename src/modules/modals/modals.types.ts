export interface Options {
  selectors: {
    buttonOpen: string,
    buttonToggle: string,
    buttonClose: string,
    header: string,
    modal: string,
    overlay: string,
  },
  transition: {
    duration: number,
    style(): string,
  },
}

export interface Parameters {
  counter: number,
  all: HTMLElement[],
  current: HTMLElement | false,
  lastScrollVerticalPosition: number,
}

export interface Hooks {
  open(): void

  close(): void

  beforeOpen(): void

  beforeClose(): void
}
