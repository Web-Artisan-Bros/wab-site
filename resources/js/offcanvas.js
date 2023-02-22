window.addEventListener('DOMContentLoaded', function () {
  const mobileMenuCanvas = document.getElementById('mobileMenuRight')
  const mobileMenuCanvasBtn = document.querySelector('[data-bs-target="#mobileMenuRight"]')
  const contactsCanvas = document.getElementById('offcanvasContacts')
  
  mobileMenuCanvas.addEventListener('show.bs.offcanvas', function (e) {
    console.log(mobileMenuCanvasBtn.classList.toString())
    mobileMenuCanvasBtn.classList.add('show')
    
    window.navbar.classList.add('scrolled')
    window.navbar.forceScrolled = true
  })
  
  mobileMenuCanvas.addEventListener('hide.bs.offcanvas', function (e) {
    console.log(mobileMenuCanvasBtn.classList.toString())
    mobileMenuCanvasBtn.classList.remove('show')
    
    if (!window.navbar.scrolled) {
      window.navbar.classList.remove('scrolled')
    }
    
    window.navbar.forceScrolled = false
  })
  
  contactsCanvas.addEventListener('show.bs.offcanvas', function (e) {
    const headHeight = contactsCanvas.querySelector('.offcanvas-header').scrollHeight
    const bodyHeight = contactsCanvas.querySelector('.offcanvas-body').scrollHeight
    
    this.style.setProperty('--bs-offcanvas-height', `${headHeight + bodyHeight}px`)
  })
})
