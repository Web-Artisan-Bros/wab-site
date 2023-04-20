import * as bs from 'bootstrap'

// import './follow'
import './pageLoader'
import './pageChanger'
import './navbarScroller'
import './offcanvas'
import './neonGraphic'
import './dynamicTextarea'
import './fabButtons'

window._bs = bs

window.isInViewport = function (el) {
  const rect = el.getBoundingClientRect()
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  )
}

