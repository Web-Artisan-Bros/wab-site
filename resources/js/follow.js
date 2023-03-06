window.addEventListener('load', function () {
  //Selecting the arrow div
  let arrow_ref = document.querySelectorAll(".follow-mouse");
  
  //mousemove for devices with mouse aand touchmove for touchcreen devices
  let events = ["mousemove", "touchmove"];
  
  //Check for touch screen
  function isTouchDevice() {
    try {
      document.createEvent("TouchEvent");
      return true;
    } catch (e) {
      return false;
    }
  }
  
  // for each section with an follow-mouse-container class,
  // get it's children with the follow-mouse class
  
  //Same function for both events
  events.forEach((eventType) => {
    document.body.addEventListener(eventType, (event) => {
      arrow_ref.forEach((arrowM) => {
        /* getBoundingClientRect() method returns the position relative to the viewport */
        let arrowX = arrowM.getBoundingClientRect().left + arrowM.clientWidth / 2;
        let arrowY = arrowM.getBoundingClientRect().top + arrowM.clientHeight / 2;
        
        /* ClientX and ClientY return the position of clients cursor from top left of the screen*/
        var x = !isTouchDevice() ? event.clientX : event.touches[0].clientX;
        var y = !isTouchDevice() ? event.clientY : event.touches[0].clientY;
        
        /*
        Subtract x position of mouse from x position of arrow and y position of mouse from y position of arrow.
        Use atan2(returns angle in radians)
        */
        
        let radian = Math.atan2(x - arrowX, y - arrowY);
        //Convert Radians to Degrees
        let rotationDegrees = radian * (180 / Math.PI) * -1 + 45;
        //Rotate the arrow
        arrowM.style.transform = "rotate(" + rotationDegrees + "deg)";
      });
    });
  });
  
})
