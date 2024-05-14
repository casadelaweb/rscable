import 'restyle.css/dist/restyle.css'
import 'restyle.css/dist/checkboxes.css'

import '@fancyapps/ui/dist/fancybox/fancybox.css'
import 'swiper/scss'
import 'swiper/scss/a11y'

import 'nouislider/dist/nouislider.css'
import 'src/styles/ui/noUISlider.scss'

import { modals } from 'src/scripts/globalModals'
import { globalScrollController } from 'src/scripts/globalScrollController'
import { Details } from 'src/modules/details/details'
import { Masks } from 'src/modules/masks/masks'
import 'src/modules/images'
import 'src/modules/dropdown'

import 'src/styles/main.scss'
import 'src/components'
import LazyLoad from 'vanilla-lazyload'

document.addEventListener('DOMContentLoaded', () => {
    globalScrollController.init()
    modals.init()

    const details = new Details()
    details.init()
    new Masks().init()
    new LazyLoad()
  },
  {
    passive: true,
    once: true,
  })
