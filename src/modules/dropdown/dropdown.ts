document.addEventListener('click', () => {
  const body = document.body

  const dropdowns: HTMLElement[] = Array.from(body.querySelectorAll('.dropdown'))
  const dropdownBodyAll: HTMLElement[] = Array.from(body.querySelectorAll('.dropdownBody'))

  dropdowns.forEach((dropdown) => {
    const dropdownHead: HTMLElement = dropdown.querySelector('.dropdownHead')
    const dropdownBody: HTMLElement = dropdown.querySelector('.dropdownBody')

    dropdownHead.addEventListener('mouseenter', () => {
      dropdownBodyAll.forEach((item) => {
        if (item != dropdownBody) item.classList.remove('_active')
      })
      dropdownBody.classList.add('_active')
    })
    dropdownBody.addEventListener('mouseleave', () => {
      dropdownBody.classList.remove('_active')
    })
    dropdownBody.addEventListener('mouseenter', () => {
      dropdownBodyAll.forEach((item) => {
        if (item != dropdownBody) item.classList.remove('_active')
      })
    })
  })

  // document.addEventListener('click', (event: MouseEvent) => {
  //   const target = event.target as HTMLElement
  //
  //   if (!target.closest('.dropdown')) {
  //     dropdownBodyAll.forEach((item) => {
  //       item.classList.remove('_active')
  //     })
  //   }
  // }, {
  //   passive: true,
  // })
}, {
  passive: true,
  once: true,
})
