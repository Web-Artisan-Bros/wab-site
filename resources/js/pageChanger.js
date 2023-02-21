import axios from 'axios'

/**
 * By adding class .route-link to a link, it will be handled by this script
 */
window.addEventListener('DOMContentLoaded', function () {
  const links = document.querySelectorAll('.route-link')
  
  links.forEach(link => {
    link.addEventListener('click', async function (e) {
      e.preventDefault()
      
      const href = this.getAttribute('href')
      const pageContent = await axios.get(href)
      
      let newHtml = pageContent.data
      
      // extract the body tag
      const body = newHtml.match('<body[^>]*>((.|[\n\r])*)<\/body>')[0]
      // extract title tag
      const title = newHtml.match('<title[^>]*>((.|[\n\r])*)<\/title>')[0]
      // extract data-bs-theme attribute from the loader div
      const loaderTag = newHtml.match('<div[^>]*loader[^>]*data-bs-theme[^>]*((.|[])*)>')[0]
      const loaderTheme = loaderTag.match('data-bs-theme="([^"]*)"')[1]
      
      document.querySelector('title').outerHTML = title
      
      // before pushing the new body, show the loader page
      window.pageLoader.show(loaderTheme)
      
      window.pageLoader.addEventListener('transitionEnd', () => {
        window.history.pushState({}, '', href)
        document.body.innerHTML = body
        
        window.dispatchEvent(new CustomEvent('DOMContentLoaded'))
        window.dispatchEvent(new CustomEvent('load'))
      })
    })
  })
  
})
