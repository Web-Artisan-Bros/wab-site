window.addEventListener('load', function () {
  const textareas = document.querySelectorAll('textarea')
  
  window.Livewire.hook('message.processed', (message) => {
    const textarea = message.component.el.elements.messageFormInput
  
    if (textarea) {
      if (textarea.scrollHeight > textarea.initialSize) {
        textarea.style.height = textarea.scrollHeight + 2 + 'px'
        textarea.offcanvasBody.scrollTop = textarea.offcanvasBodyScroll
  
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
