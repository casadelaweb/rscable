document.addEventListener('click', () => {
  const body = document.body

  const dropdowns: HTMLElement[] = Array.from(body.querySelectorAll('.dropdown'))
  const dropdownBodyAll: HTMLElement[] = Array.from(body.querySelectorAll('.dropdown-body'))

  dropdowns.forEach((dropdown) => {
    const dropdownHead: HTMLElement = dropdown.querySelector('.dropdown-head')
    const dropdownBody: HTMLElement = dropdown.querySelector('.dropdown-body')

    dropdownHead.addEventListener('mouseenter', () => {
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

  // dropdownBodyAll.forEach((dropdownBody) => {
  //   dropdownBody.addEventListener('mouseenter', ()=>{
  //
  //   })
  // })
}, {
  passive: true,
  once: true,
})
