const pendingToShow = []

window.addEventListener('pageChanged', function () {
  const neons = document.querySelectorAll('.neon-text')
  
  addObservers(neons)
  animateNeonLetters(neons)
})

window.addEventListener('load', function () {
  window.pageLoader.addEventListener('padeLoaderHidden', function () {
    pendingToShow.forEach(el => {
      el.classList.add('neon-on')
    })
    
    pendingToShow.length = 0
  })
})

function addObservers (neons) {
  const observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        if (window.pageLoader.active) {
          pendingToShow.push(entry.target)
          return
        }
        // if it's in the viewport, add the neon class
        entry.target.classList.add('neon-on')
      } else {
        // if it's not in the viewport, remove the neon class
        // because the animation is more complex avoid removing the class
        // entry.target.classList.remove('neon-on')
      }
    })
  }, {
    threshold: .5
  })
  
  // for each neon add an intersection observer to watch for when it enters the viewport
  neons.forEach(neon => {
    observer.observe(neon)
  })
}

function animateNeonLetters (neons) {
  
  neons.forEach((neon, i) => {
    // create spans
    const spans = neon.textContent.split('').map(letter => {
      const span = document.createElement('span')
      span.textContent = letter
      
      return span
    })
    
    neon.innerHTML = ''
    
    // for each span,
    spans.forEach(span => {
      animateEl(span)
      
      neon.appendChild(span)
    })
    
    animateEl(neon)
  })
}

function animateEl (span) {
  let randomRestartTimer
  const randomDuration = () => (Math.random() * 4) + 's'
  
  // add a random duration to the animation
  span.style.animationDuration = randomDuration()
  
  const restartAnimation = () => {
    // temporary remove the animation
    span.style.animationName = 'none'
    span.style.animationDuration = randomDuration()
    
    // add a timeout to restart the animation
    setTimeout(() => {
      // restore default animation
      span.style.animationName = ''
    }, 200)
  }
  
  const addRandomRestart = () => {
    const timer = randomSeconds(5, 30)
    
    // console.log('restarting in ', timer / 1000, 'seconds')
    
    randomRestartTimer = setTimeout(() => {
      restartAnimation()
      addRandomRestart()
    }, timer)
  }
  
  // add random restarts to the animation
  addRandomRestart()
  
  // add click event listener
  span.addEventListener('click', () => {
    clearTimeout(randomRestartTimer)
    
    restartAnimation()
    addRandomRestart()
  })
}

function randomSeconds (min, max) {
  min = min * 1000
  max = max * 1000
  
  return Math.random() * (max - min) + min
}
