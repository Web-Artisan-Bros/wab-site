import axios from 'axios'

let toLoadHref = null
let toLoadHtml = null
let toLoadTheme = null

let links
let fromHistory = false

/**
 * By adding class .route-link to a link, it will be handled by this script
 */
window.addEventListener('DOMContentLoaded', function () {
  links = document.querySelectorAll('.route-link')
  
  links.forEach(link => {
    link.addEventListener('click', async function (e) {
      e.preventDefault()
      
      if (e.currentTarget.classList.contains('active')) {
        return
      }
      
      const href = this.getAttribute('href')
      
      try {
        // if the request takes more than 300ms, show the loader
        const loaderTimer = setTimeout(() => {
          window.pageLoader.show()
        }, 300)
        
        const pageContent = await axios.get(href)
        
        clearTimeout(loaderTimer)
        
        let newHtml = pageContent.data
        
        // extract the body tag
        const body = newHtml.match('<main[^>]*>((.|[\n\r])*)<\/main>')[0]
        // extract title tag
        const title = newHtml.match('<title[^>]*>((.|[\n\r])*)<\/title>')[0]
        // extract data-bs-theme attribute from the loader div
        const loaderTag = newHtml.match('<div[^>]*loader[^>]*data-bs-theme[^>]*((.|[])*)>')[0]
        const loaderTheme = loaderTag.match('data-bs-theme="([^"]*)"')[1]
        
        document.querySelector('title').outerHTML = title
        
        toLoadHref = href
        toLoadHtml = body
        toLoadTheme = loaderTheme
        
        // before pushing the new body, show the loader page
        window.pageLoader.show(loaderTheme)
      } catch (e) {
        // in case of error, redirect to the page without ajax
        window.location = href
      }
    })
  })
  
  window.pageLoader.addEventListener('padeLoaderShown', () => {
    if (!toLoadHref && !toLoadHtml) {
      return
    }
  
    console.log('transitionEnd')
  
    fixElementsTheme()
    fixNavbarActive()
  
    if (!fromHistory) {
      window.history.pushState({}, '', toLoadHref)
    } else {
      fromHistory = false
      window.history.replaceState({}, '', toLoadHref)
    }
  
    document.body.querySelector('main').innerHTML = toLoadHtml
    document.body.style.overflow = ''
    document.body.style.paddingRight = ''
  
    toLoadHref = null
    toLoadHtml = null
    toLoadTheme = null
  
    window.scrollTo({ top: 0, behavior: 'auto' })
    
    // window.dispatchEvent(new CustomEvent('DOMContentLoaded'))
    // window.dispatchEvent(new CustomEvent('load'))
    window.dispatchEvent(new CustomEvent('pageChanged'))
  
    setTimeout(() => {
      window.pageLoader.hide()
    }, 300)
  })
  
  // immediately dispatch the event for the first time
  window.dispatchEvent(new CustomEvent('pageChanged'))
})

window.addEventListener('popstate', (event) => {
  const href = event.target.location.href.replace(/\/$/, "")
  let firstLink
  
  links.forEach(link => {
    if (link.getAttribute('href') === href) {
      firstLink = link
    }
  })
  
  if (firstLink) {
    fromHistory = true
    firstLink.click()
  } else {
    debugger
    window.location = href
  }
})

function fixElementsTheme () {
  document.querySelectorAll('body>[data-bs-theme]').forEach(el => {
    el.dataset.bsTheme = toLoadTheme
  })
}

function fixNavbarActive () {
  links.forEach(link => {
    if (link.classList.contains('navbar-brand')) {
      return
    }
    
    link.classList.remove('active', 'wab-highlight')
    
    if (link.getAttribute('href') === toLoadHref) {
      
      if (link.classList.contains('list-group-item') || link.classList.contains('dropdown-item')) {
        link.classList.add('active')
      } else {
        link.classList.add('active', 'wab-highlight')
      }
    }
  })
}
