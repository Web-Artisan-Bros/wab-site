import './bootstrap';

import Alpine from 'alpinejs';
import focus from '@alpinejs/focus'

import './shadow'
import 'bootstrap/dist/js/bootstrap.bundle.min'

import './follow'
import './pageChanger'
import './pageLoader'
import './navbarScroller'

// window.Alpine = Alpine;
//
// Alpine.plugin(focus);
//
// Alpine.start();

window.isInViewport = function (el) {
  const rect = el.getBoundingClientRect()
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  
  )
}

