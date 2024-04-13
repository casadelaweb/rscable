/** Dispatches custom event with given name and detail object */
export function throwEvent(element: HTMLElement, name: string, detail?: object) {
  const event = new CustomEvent(name, {
    bubbles: true,
    detail: detail,
  })
  element.dispatchEvent(event)
}

export function isMediaAboveLaptop(): boolean {
  return window.matchMedia('(min-width: 1280px)').matches
}

type currentMedia = 'mobile' | 'tablet' | 'tabletBg' | 'laptop' | 'desktop'

/** Определяет текущий медиа брейкпоинт  */
export function getCurrentMedia(): currentMedia {
  const { matchMedia, } = window
  let result: currentMedia = 'mobile'

  if (matchMedia('(min-width: 768px) and (max-width: 1023px)').matches) {
    result = 'tablet'
  } else if (matchMedia('(min-width: 1024px) and (max-width: 1279px)').matches) {
    result = 'tabletBg'
  } else if (matchMedia('(min-width: 1280px) and (max-width: 1919px)').matches) {
    result = 'laptop'
  } else if (matchMedia('(min-width: 1920px)').matches) {
    result = 'desktop'
  }

  return result
}

/** Определяет есть ли мышь или другое устройство наведения */
export function isAnyPointerFine(): boolean {
  return window.matchMedia('(any-pointer: fine)').matches
}
