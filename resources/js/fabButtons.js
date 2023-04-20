let fabContainers

window.addEventListener('DOMContentLoaded', function () {
  fabContainers = document.querySelectorAll('.fab-container')
})

window.addEventListener('pageChanged', function () {
  addIntersectionObserver()
})

function addIntersectionObserver () {
  // recupero le singole sezioni
  const sections = document.querySelectorAll('main > .themed-section, footer ')
  
  // creo un observer
  const observer = new IntersectionObserver(callback, {
    rootMargin: '-95% 0% 0% 0%'
  })
  
  // console.log(sections)
  
  sections.forEach((section, i) => {
    observer.observe(section)
  })
}

function callback (entries, observer) {
  entries.forEach((entry) => {
    if (entry.isIntersecting && fabContainers) {
      fabContainers.forEach((fabContainer) => {
        console.log(fabContainer.dataset)
        const hideOnFooter = fabContainer.dataset.hideOnFooter?.toLowerCase() === 'true'
        const isOverFooter = entry.target.tagName === 'FOOTER'
        
        console.log(hideOnFooter, isOverFooter)
        
        if (hideOnFooter) {
          fabContainer.style.opacity = isOverFooter ? 0 : 1
        }
        
        if (!hideOnFooter || (hideOnFooter && !isOverFooter)) {
          fabContainer.dataset.bsTheme = entry.target.dataset.bsTheme
        }
        
      })
    }
  })
}


// seleziona l'elemento che desideri nascondere
const myComponent = document.querySelector('#my-component')

// nascondi immediatamente l'elemento
myComponent.style.display = 'none'

// crea un observer per rilevare quando l'elemento è visibile
const observer = new IntersectionObserver((entries, observer) => {
  entries.forEach(entry => {
    if (entry.isIntersecting && fabContainers) {
      fabContainers.forEach((fabContainer) => {
        console.log(fabContainer.dataset)
        const hideOnFooter = fabContainer.dataset.hideOnFooter?.toLowerCase() === 'true'
        const isOverFooter = entry.target.tagName === 'FOOTER'
        
        console.log(hideOnFooter, isOverFooter)
        
        if (hideOnFooter) {
          fabContainer.style.opacity = isOverFooter ? 0 : 1
        }
        
        if (!hideOnFooter || (hideOnFooter && !isOverFooter)) {
          fabContainer.dataset.bsTheme = entry.target.dataset.bsTheme
        }
        
      })
    }
  })
})
