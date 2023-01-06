window.addEventListener('load', function () {
  const el = document.querySelectorAll('.animated-shadow')
  
  el.forEach(function (item) {
    item.addEventListener('mousemove', function (e) {
      const width = item.offsetWidth
      const height = item.offsetHeight
      const offset = getComputedStyle(document.body).getPropertyValue('--outline-offset').trim()
      
      const x = e.layerX > (width / 2) ? '-' + offset : offset
      const y = e.layerY > (height / 2) ? offset : '-' + offset
      
      item.style.setProperty('--outline-offset-x', x)
      item.style.setProperty('--outline-offset-y', y)
    })
  
    item.addEventListener('mouseout', function (e) {
      const offset = getComputedStyle(document.body).getPropertyValue('--outline-offset').trim()
  
      item.style.setProperty('--outline-offset-x', offset)
      item.style.setProperty('--outline-offset-y', offset)
    })
    
  })
})
