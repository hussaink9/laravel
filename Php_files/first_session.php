<style>
/* whole page font family css */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@100&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Cinzel&display=swap');
/* our mission & vision lines css */
p{
  font-size: 14px;
  color: white;
}
/* A legacy of trust css */
.paragraph
{
  font-family:Kalista Serif; 
  font-size:60px; 
  text-align:right;
  color:white;
  margin-top:9%;
  margin-left:6%;
  line-height:1;
  position:absolute;
}
/* svg golden line css */
.SVG-line
{
  margin-top: 350px;
  margin-left:-10px;
  stroke:#d6b37c;
  stroke-width:2;
}
/* Logo Model css */
/* #aSide model-viewer {
  height: 100vh;
  width: 100vh;
  padding: 0;
  margin: 0;
  position: fixed;
  top:0;
  margin-left: 40%;
  z-index: -1;
} */
/* text model css */
#aSide1 model-viewer{
  height: 100vh;
  width: 100vh;
  padding: 0;
  margin: 0;
  position: fixed;
  top:300px;
  z-index: -1;
}

/***** Global Slide *****/
.slide-right {
  width: 100%;
  margin-left:75%;
  margin-top: 10px;
}
.slide-left {
  width: 100%;
  margin-left:3%;
  margin-top: 10px;
}
/***** Slide Right *****/
.slide-right {
  animation: 3s slide-right;
}
@keyframes slide-right {
  from {
    margin-left: -100%;
  }
  to {
    margin-right: 0%;
  }
}
/***** Slide Left *****/
 .slide-left {
  animation: 3s slide-left;
}
@keyframes slide-left {
  from {
    margin-left: 100%;
  }
  to {
    margin-right: 70%;
  }
 
}
/* background particles section css (for the time being just comment this as its not looking good) */
#snowflakeContainer {
  position: absolute;
  left: 0px;
  top: 0px;
  display: none;
}
.snowflake {
  position: fixed;
  background-color: #d6b37c;
  color: #d6b37c;
  user-select: none;
  z-index: 1000;
  pointer-events: none;
  border-radius: 50%;
  width: 10px;
  height: 10px;
}
/* 3d Model css animation section */
#modelanit{
  margin-top:6%;
  background-color:transparent;
  color:transparent;
  left: 25%;
  width:100vh;
  position: fixed;
  animation-name: rainbow;
  /* animation-delay:3s; */
  animation-duration: 60s;
  animation-iteration-count:infinite;
  animation-fill-mode: forwards;
}
@keyframes rainbow {
0% {
  /* background-color: blue; */
  top: 0px;
  width:90vh;
  height: 90vh;
  opacity:0.1;
}
25%{
  top:0px;
  width:90vh;
  height: 90vh;
  opacity:0.1;
}
50% {
  top: 0px;
  width:100vh;
  height: 100vh;
  opacity:0.1;
}
75%{
  top: 0px;
  width:100vh;
  height: 90vh;
  opacity:0.1;
}
100%{
  top: 0px;
  width:100vh;
  height: 100vh;
  opacity:0.2;
}
}
.stroke_line{
  stroke:#d6b37c;
  stroke-width:2;
  margin-left: 6%;
  margin-top: -400px;
}
</style>
<!-- A legacy of trust section -->
<div class="container">
  <div class="row p-0 m-0">
  <!-- <span style="text-align:center; color:#d6b37c;margin-top:15px;font-size:20px; font-family: 'Montserrat', sans-serif;"> Baksh Brings the Philosophy of Trust , Innovation, Leadership and Growth to the Real Estate Industry.</span> -->
    <div class="col-12-sm"> <p dir="rtl" style="font-family:Kalista Serif; font-size:60px;margin-left: 20px;" class="paragraph sm-12"> A Legacy <br> <br> of Trust</p>
    
    <svg height="110" width="600"class="SVG-line" > <line x1="-300" y1="600" x2="350" y2="0" ></svg>
  </div>
</div>
<!-- 3D Model section -->
<div class="row p-0 m-0">
  <div class="col-6-sm" id="aSide"><model-viewer  id="modelanit"  src="models/logo.glb" alt="Baksh"  auto-rotate ar ios-src="models/logo.glb"></div> <br>
  <!-- <div class="col-6-sm" id="aSide1"><model-viewer src="models/text.glb" alt="Baksh" ar ios-src="models/text.glb"></div> -->
</div>  
<!-- our mission section -->
<div class="slide-right"> <h6 style="font-family: 'Cinzel', serif;color:#d6b37c;line-height: 150%;"> When We Focus on The Good <br> The good Gets Better </h6>
<p style="color:#f5f5f5; !important;font-weight: normal !important;font-family: 'Montserrat', sans-serif;font-size:12px;">Our Mission is to Set Standards of Commitment, <br> Trust and Professionalism to Empower Our <br> Clients With High Standards of Living Financially <br> and Morally .</p>
</div>
<!-- for our mission & vision animation "empty div" -->
<div class="line fade-in"></div>
<!-- our vision section -->
<div class="slide-left"> <h6 style="font-family: 'Cinzel', serif;color:#d6b37c;"> Our Vision </h6>
<p style="color:#f5f5f5; !important;font-weight: normal !important;font-family: 'Montserrat', sans-serif;font-size:12px;">We Believe in Dedicated Services and Revolutionary <br> Technology to Accelerate the Real Estate Industry <br> Through Proven Systems. We Aim to Reshape the  <br> Industry That Inspires and Fulfills Your Property <br> Investment Aspirations..</p>
</div>

<!-- background particles section -->
<div id="snowflakeContainer"> <span class="snowflake"></span> </div>

<script>
  // Array to store our Snowflake objects
  var snowflakes = [];

  // Global variables to store our browser's window size
  var browserWidth;
  var browserHeight;

  // Specify the number of snowflakes you want visible
  var numberOfSnowflakes = 50;

  // Flag to reset the position of the snowflakes
  var resetPosition = false;

  // Handle accessibility
  var enableAnimations = false;
  var reduceMotionQuery = matchMedia("(prefers-reduced-motion)");

  // Handle animation accessibility preferences 
  function setAccessibilityState() {
    if (reduceMotionQuery.matches) {
      enableAnimations = false;
    } else { 
      enableAnimations = true;
    }
  }
  setAccessibilityState();

  reduceMotionQuery.addListener(setAccessibilityState);

  //
  // It all starts here...
  //
  function setup() {
    if (enableAnimations) {
      window.addEventListener("DOMContentLoaded", generateSnowflakes, false);
      window.addEventListener("resize", setResetFlag, false);
    }
  }
  setup();

  //
  // Constructor for our Snowflake object
  //
  function Snowflake(element, speed, xPos, yPos) {
    // set initial snowflake properties
    this.element = element;
    this.speed = speed;
    this.xPos = xPos;
    this.yPos = yPos;
    this.scale = 1;

    // declare variables used for snowflake's motion
    this.counter = 0;
    this.sign = Math.random() < 0.5 ? 1 : -1;

    // setting an initial opacity and size for our snowflake
    this.element.style.opacity = (.1 + Math.random()) / 3;
  }

  //
  // The function responsible for actually moving our snowflake
  //
  Snowflake.prototype.update = function () {
    // using some trigonometry to determine our x and y position
    this.counter += this.speed / 5000;
    this.xPos += this.sign * this.speed * Math.cos(this.counter) / 40;
    this.yPos += Math.sin(this.counter) / 40 + this.speed / 30;
    this.scale = .5 + Math.abs(10 * Math.cos(this.counter) / 20);

    // setting our snowflake's position
    setTransform(Math.round(this.xPos), Math.round(this.yPos), this.scale, this.element);

    // if snowflake goes below the browser window, move it back to the top
    if (this.yPos > browserHeight) {
      this.yPos = -50;
    }
  }

  //
  // A performant way to set your snowflake's position and size
  //
  function setTransform(xPos, yPos, scale, el) {
    el.style.transform = `translate3d(${xPos}px, ${yPos}px, 0) scale(${scale}, ${scale})`;
  }

  //
  // The function responsible for creating the snowflake
  //
  function generateSnowflakes() {

    // get our snowflake element from the DOM and store it
    var originalSnowflake = document.querySelector(".snowflake");

    // access our snowflake element's parent container
    var snowflakeContainer = originalSnowflake.parentNode;
    snowflakeContainer.style.display = "block";

    // get our browser's size
    browserWidth = document.documentElement.clientWidth;
    browserHeight = document.documentElement.clientHeight;

    // create each individual snowflake
    for (var i = 0; i < numberOfSnowflakes; i++) {

      // clone our original snowflake and add it to snowflakeContainer
      var snowflakeClone = originalSnowflake.cloneNode(true);
      snowflakeContainer.appendChild(snowflakeClone);

      // set our snowflake's initial position and related properties
      var initialXPos = getPosition(50, browserWidth);
      var initialYPos = getPosition(50, browserHeight);
      var speed = 5 + Math.random() * 40;

      // create our Snowflake object
      var snowflakeObject = new Snowflake(snowflakeClone,
        speed,
        initialXPos,
        initialYPos);
      snowflakes.push(snowflakeObject);
    }

    // remove the original snowflake because we no longer need it visible
    snowflakeContainer.removeChild(originalSnowflake);

    moveSnowflakes();
  }

  //
  // Responsible for moving each snowflake by calling its update function
  //
  function moveSnowflakes() {

    if (enableAnimations) {
      for (var i = 0; i < snowflakes.length; i++) {
        var snowflake = snowflakes[i];
        snowflake.update();
      }      
    }

    // Reset the position of all the snowflakes to a new value
    if (resetPosition) {
      browserWidth = document.documentElement.clientWidth;
      browserHeight = document.documentElement.clientHeight;

      for (var i = 0; i < snowflakes.length; i++) {
        var snowflake = snowflakes[i];

        snowflake.xPos = getPosition(50, browserWidth);
        snowflake.yPos = getPosition(50, browserHeight);
      }

      resetPosition = false;
    }

    requestAnimationFrame(moveSnowflakes);
  }

  //
  // This function returns a number between (maximum - offset) and (maximum + offset)
  //
  function getPosition(offset, size) {
    return Math.round(-1 * offset + Math.random() * (size + 2 * offset));
  }

  //
  // Trigger a reset of all the snowflakes' positions
  //
  function setResetFlag(e) {
    resetPosition = true;
  }
</script>

</div>


