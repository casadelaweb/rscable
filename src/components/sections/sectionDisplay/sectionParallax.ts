import Swiper from 'swiper'
import { Navigation, Pagination, EffectCoverflow, EffectCube, Autoplay } from 'swiper/modules'

document.addEventListener('DOMContentLoaded', () => {
  const odrag: HTMLElement = document.querySelector('#drag-container')
  const ospin: HTMLElement = document.querySelector('#spin-container')
  if (odrag && ospin) {
    setTimeout(init, 500)
    let radius: number = 240 // how big of the radius
    const autoRotate = true  // auto rotate or not
    const rotateSpeed = -60 // unit: seconds/360 degrees
    const imgWidth: number = 150 // width of images (unit: px)
    const imgHeight: number = 150 * 5 / 4 // height of images (unit: px)

    const aImg = Array.from(ospin.querySelectorAll('img'))
    const aVid = Array.from(ospin.querySelectorAll('video'))
    const aEle = [...aImg, ...aVid] // combine 2 arrays

    ospin.style.width = imgWidth + 'px'
    ospin.style.height = imgHeight + 'px'

    const ground: HTMLElement = document.querySelector('#ground')
    ground.style.width = radius * 3 + 'px'
    ground.style.height = radius * 3 + 'px'

    function init(delayTime) {
      for (let i = 0; i < aEle.length; i++) {
        aEle[i].style.transform = 'rotateY(' + (i * (360 / aEle.length)) + 'deg) translateZ(' + radius + 'px)'
        aEle[i].style.transition = 'transform 1s'
        aEle[i].style.transitionDelay = delayTime || (aEle.length - i) / 4 + 's'
      }
    }

    function applyTransform(obj) {
      // Constrain the angle of camera (between 0 and 180)
      if (tY > 180) tY = 180
      if (tY < 0) tY = 0

      // Apply the angle
      obj.style.transform = 'rotateX(' + (-tY) + 'deg) rotateY(' + (tX) + 'deg)'
    }

    function playSpin(yes) {
      ospin.style.animationPlayState = (yes ? 'running' : 'paused')
    }

    let desX = 0,
      desY = 0,
      tX = 0,
      tY = 10

    if (autoRotate) {
      var animationName = (rotateSpeed > 0 ? 'spin' : 'spinRevert')
      ospin.style.animation = `${ animationName } ${ Math.abs(rotateSpeed) }s infinite linear`
    }

    document.onpointerdown = function (e) {
      clearInterval(odrag.timer)
      e = e || window.event
      var sX = e.clientX,
        sY = e.clientY

      this.onpointermove = function (e) {
        e = e || window.event
        var nX = e.clientX,
          nY = e.clientY
        desX = nX - sX
        desY = nY - sY
        tX += desX * 0.1
        tY += desY * 0.1
        applyTransform(odrag)
        sX = nX
        sY = nY
      }

      this.onpointerup = function (e) {
        odrag.timer = setInterval(function () {
          desX *= 0.95
          desY *= 0.95
          tX += desX * 0.1
          tY += desY * 0.1
          applyTransform(odrag)
          playSpin(false)
          if (Math.abs(desX) < 0.5 && Math.abs(desY) < 0.5) {
            clearInterval(odrag.timer)
            playSpin(true)
          }
        }, 17)
        this.onpointermove = this.onpointerup = null
      }

      return false
    }
  }

  new Swiper('.mySwiper', {
    modules: [
      EffectCoverflow, Autoplay,
    ],
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 4,
    loop: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: true,
      waitForTransition: true,
    },
    coverflowEffect: {
      rotate: 45,
      stretch: 0.25,
      depth: 150,
      modifier: 1,
      slideShadows: true,
    },
    breakpoints: {
      0: {
        slidesPerView: 1.75,
      },
      540: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
      1180: {
        slidesPerView: 4,
      }
    }
  })
}, {
  passive: true,
})
