let settingsContainer

window.addEventListener('DOMContentLoaded', function () {
  settingsContainer = document.querySelector('.settings-fab-container')
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
    if (entry.isIntersecting && settingsContainer) {
      settingsContainer.dataset.bsTheme = entry.target.tagName !== 'FOOTER' ? entry.target.dataset.bsTheme : settingsContainer.dataset.bsTheme
      settingsContainer.style.opacity = entry.target.tagName === 'FOOTER' ? 0 : 1
    }
  })
}
