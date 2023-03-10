window.addEventListener('load', function() {
  const neons = document.querySelectorAll('.neon-text');
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        // if it's in the viewport, add the neon class
        entry.target.classList.add('neon-on');
      } else {
        // if it's not in the viewport, remove the neon class
        entry.target.classList.remove('neon-on');
      }
    })
  }, {
    threshold: .5,
  })
  
  // for each neon add an intersection observer to watch for when it enters the viewport
  neons.forEach(neon => {
    observer.observe(neon);
  })
})
