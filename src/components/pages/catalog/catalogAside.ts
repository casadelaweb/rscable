import hcSticky from 'hc-sticky'

document.addEventListener('DOMContentLoaded', () => {
  new hcSticky('.catalogAside', {
    stickTo: '.catalogLayout',
    mobileFirst: true,
    // onStart() {
    //   console.log(this)
    // },
    // onResize() {
    //   console.log(this)
    // },
    responsive: {
      0: {
        disable: true,
      },
      1024: {
        disable: false,
        top: 56,
      },
      1180: {
        disable: false,
        top: 100,
      },
      1920: {
        disable: false,
        top: 120,
      },
    }
  })
}, {
  passive: true,
  once: true,
})
