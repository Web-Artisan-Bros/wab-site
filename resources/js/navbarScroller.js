let navbar

window.addEventListener('load', function () {
  navbar = document.querySelector('.navbar-container')
  const scrollSpy = document.querySelector('.scroll-spy')
  
  addIntersectionObserver()
  
  window.addEventListener('scroll', function () {
    // get the vertical scroll position
    const scrollFromTop = window.scrollY
    // calc the max scroll height
    const pageHeight = document.body.scrollHeight - window.innerHeight
    // calc the percentage of the scroll
    const perc = scrollFromTop / pageHeight * 100
    
    // if scroll bigger than 100, add class .scrolled and update scrollSpy width
    if (scrollFromTop > 100) {
      navbar.classList.add('scrolled')
      scrollSpy.style.width = Math.round(perc) + '%'
    } else {
      navbar.classList.remove('scrolled')
      scrollSpy.style.width = '0%'
    }
  })
})

function addIntersectionObserver () {
  // recupero le singole sezioni
  const sections = document.querySelectorAll('.themed-section:not(.offcanvas)')
  
  // creo un observer
  const observer = new IntersectionObserver(callback, {
    // root: document.body,
    rootMargin: '-5% 0% -90% 0%'
    // threshold: 0.9
  })
  
  // console.log(sections)
  
  sections.forEach((section, i) => {
    observer.observe(section)
  })
  
}

function callback (entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting) {
      navbar.dataset.bsTheme = entry.target.dataset.bsTheme
    }
    // console.log(entry)
  })
}


