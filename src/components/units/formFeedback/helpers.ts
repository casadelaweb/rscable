export const regExps = {
  email: /^[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?$/,
  innSimple: /^\d{10}$|^\d{12}$/,
}

export function handleError(field: HTMLElement, input: HTMLInputElement, errorTooltip: HTMLElement, errorText?: string): void {
  [field, input, errorTooltip].forEach((element) => {
    element.classList.remove('_success')
    element.classList.add('_error')
  })
}

export function handleSuccess(field: HTMLElement, input: HTMLInputElement, errorTooltip: HTMLElement, errorText?: string): void {
  [field, input, errorTooltip].forEach((element) => {
    element.classList.add('_success')
    element.classList.remove('_error')
  })
}

export function validate(input: HTMLInputElement): boolean {
  let errorQuantity: number = 0
  const value: string | number = input.value.trim()
  const scheme: string = input.getAttribute('data-validate')
  const field: HTMLElement = input.closest('[data-form=field]')
  const errorTooltip: HTMLElement = field.querySelector('[data-form=error]')
  if (scheme.includes('human_name')) {
    if (value.length === 0) errorQuantity++
  }
  if (scheme.includes('tel')) {
    if (value.length > 18) {
      input.value = value.substring(0, 18)
      return
    }
    if (value.length !== 18) errorQuantity++
  }
  if (scheme.includes('not_empty')) {
    if (value.length === 0) errorQuantity++
  }
  if (scheme.includes('inn')) {
    if (!regExps.innSimple.test(value)) errorQuantity++
  }
  if (input instanceof HTMLInputElement && input.type === 'checkbox') {
    if (!input.checked) errorQuantity++
  }

  const isValid = errorQuantity === 0
  if (isValid) {
    handleSuccess(field, input, errorTooltip)
  } else {
    handleError(field, input, errorTooltip)
  }
  return isValid
}

export function validateForm(form: HTMLElement): boolean {
  const inputs: HTMLInputElement[] = Array.from(form.querySelectorAll('[required][data-validate]'))
  let errorsQuantity = 0
  inputs.forEach((input) => {
    if (validate(input) === false) errorsQuantity++
  })

  return errorsQuantity === 0
}
