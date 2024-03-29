import * as bs from 'bootstrap'
import { tinymceConfig } from './tinymce'
import axios from 'axios'
import Alpine from 'alpinejs'

import './jscolor.min';

window.axios = axios
window.bootstrap = bs
window.Alpine = Alpine

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

window.addEventListener('DOMContentLoaded', () => {
  const modals = document.querySelectorAll('.modal')
  
  modals.forEach(modal => {
    modal.addEventListener('shown.bs.modal', () => {
      const editors = modal.querySelectorAll('.tinymce')
      
      editors.forEach(editor => {
        window.tinymce.init({
          ...tinymceConfig,
          skin_url: '/skins/ui/tinymce-5-dark',
          toolbar: false,
          selector: null,
          target: editor
        })
      })
    })
  })
  
  Alpine.start()
})

// @see https://jscolor.com/configure/
jscolor.presets.default = {
  format:'rgba'
};
