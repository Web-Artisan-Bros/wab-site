window.addEventListener('load', function () {
  const textareas = document.querySelectorAll('textarea')
  
  window.Livewire.hook('message.processed', (message) => {
    const textarea = message.updateQueue.find(el => el.name === 'message')
    
    if (textarea) {
      if (textarea.el.scrollHeight > textarea.el.initialSize) {
        textarea.el.style.height = textarea.el.scrollHeight + 2 + 'px'
        textarea.el.offcanvasBody.scrollTop = textarea.el.offcanvasBodyScroll
  
        textarea.alreadyResized = false
      }
    }
  })
  
  textareas.forEach(textarea => {
    textarea.initialSize = textarea.offsetHeight
    textarea.offcanvasBody = textarea.closest('.offcanvas-body')
    textarea.offcanvasBodyScroll = 0
    
    textarea.addEventListener('input', function (e) {
      if (textarea.scrollHeight > textarea.initialSize) {
        textarea.offcanvasBodyScroll = textarea.offcanvasBody.scrollTop
        
        // textarea.style.height = textarea.scrollHeight + 2 + 'px'
      }
    })
  })
})
