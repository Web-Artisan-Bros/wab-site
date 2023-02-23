import * as bs from 'bootstrap'

window.bootstrap = bs

window.isInViewport = function (el) {
  const rect = el.getBoundingClientRect()
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  )
}

window.livewire.on('closeModal', (modalId) => {
  const modal = document.getElementById(modalId)
  
  if (modal) {
    bootstrap.Modal.getInstance(modal).hide()
  }
})
