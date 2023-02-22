window.addEventListener('DOMContentLoaded', function () {
  const dropdowns = document.querySelectorAll('.dropdown')
  
  dropdowns.forEach(function (dropdown) {
    const dropdownMenu = dropdown.parent.querySelector('.dropdown-menu')
    
    dropdown.addEventListener('show.bs.dropdown', function () {
      console.log('show.bs.dropdown')
    })
    
    dropdown.addEventListener('hide.bs.dropdown', function (e) {
      e.stopPropagation()
      e.preventDefault()
      e.cancelBubble = true
      
      dropdownMenu.classList.remove('animate__fadeInDown')
      dropdownMenu.classList.add('animate__fadeOutUp')
      // console.log('hide.bs.dropdown')
    })
  })
})
