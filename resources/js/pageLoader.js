import anime from 'animejs/lib/anime.es.js'

class PageLoader extends EventTarget {
  loader = null
  tl = null
  
  constructor (loader) {
    super()
    
    this.loader = loader
    
    this.addEventListeners()
  }
  
  show (theme = null) {
    // this.tl = anime.timeline({
    //   easing: 'easeOutExpo',
    //   duration: 750
    // });
    //
    
    if (theme) {
      this.loader.dataset.bsTheme = theme
    }
  
    document.body.classList.add('loading')
  }
  
  hide () {
    document.body.classList.remove('loading')
  }
  
  addEventListeners () {
    this.loader.addEventListener('transitionend', () => {
      this.dispatchEvent(new CustomEvent('transitionEnd'))
    })
  }
}

window.addEventListener('DOMContentLoaded', () => {
  window.pageLoader = new PageLoader(document.querySelector('.loader'))
  
  setTimeout(function () {
    pageLoader.hide()
  }, 1500)
})

