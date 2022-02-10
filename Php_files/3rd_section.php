<style>
  @import url('https://fonts.googleapis.com/css2?family=Montserrat&display=swap');
#col1
{
  display: block;
  text-align: center;
  margin-top: 20vh;
  margin-left: 1vw;
  font-size: 13px;
  visibility: hidden;
}
#col2
{
 display: block;
 margin-top: 50vh;
 margin-inline-start: -31vw;
}
/* #col2 model1
{
  margin-right: 10vw;
} */
#col3{
  display: block;
  margin-top: 50vh;
  padding-left: 17.7vw;
}
.heading {
  position: relative;
  top: 4vh;
  font-size: 30px;
}
.border{
  width:26px;
  height:33px;
  position:absolute; 
  margin-left:270px;
  margin-top:330px;
  background-color:#d9d7d2;
}

</style>
<div class="container-fluid" style="margin-top:10px;">
<div class="row" id="section_third" >
  <div id="col3" class="col col-sm-4">
<!-- empty div for merging two split parts of logo -->
  <div class="border extra"></div>
<!-- 3d model 1st part -->
  <model-viewer class="model2" src="Split_logoR.glb" alt="Baksh Logo" ios-src="Split_logoR.glb" style="width:400px; height:400px;color:#d6b37c;"></model-viewer></div>
<!-- Our Services heading -->
<div id="col1" class="col col-sm-4 text-white">
  <h1 class="heading" style="visibility:visible;font-family:Kalista Serif;  margin-left: 5%;color:#d6b37c;">Our Services</h1> <br><br><br><br>
  <p class="p1" style="font-family: 'Montserrat', sans-serif;font-size:14px;color: #f5f5f5;">Discover the new opportunities and <br> a new path towards success.</p> <br>

  <h4 style="font-family: 'Cinzel', serif;color:#d6b37c;font-size:20px;">Rental</h4>
  <p style="font-family: 'Montserrat', sans-serif;font-size:14px;color: #f5f5f5;">Discover the new opportunities and a new <br> path towards success</p><br>

  <h4 style="font-family: 'Cinzel', serif;color:#d6b37c;font-size:20px;">Property Management</h4>
  <p style="font-family: 'Montserrat', sans-serif;font-size:14px;color: #f5f5f5;">Discover the new opportunities and a new path <br> towards success</p> <br>

  <h4 style="font-family: 'Cinzel', serif;color:#d6b37c;font-size:20px;">Investment management</h4>
  <p style="font-family: 'Montserrat', sans-serif;font-size:14px;color: #f5f5f5;">Discover the new opportunities <br> and a new path towards success.</p> <br>

  <h4 style="font-family: 'Cinzel', serif;color:#d6b37c;font-size:20px;">Real Estate Advice</h4>
  <p style="font-family: 'Montserrat', sans-serif;font-size:14px;color: #f5f5f5;">Discover the new opportunities and a new <br> path towards success</p>
</div>
<!-- 3D model 2nd part -->
<div id="col2" class="col col-sm-4"><model-viewer class="model1" src="Split_logoL.glb" alt="Baksh Logo" ios-src="Split_logoL.glb" style="width:420px; height:400px;"></model-viewer></div>
  </div>
</div>

<script>

let previousTop;
function handleOnScoll() {
  const isScrollUp = this.oldScroll > this.scrollY;
  this.oldScroll = this.scrollY;

  const top = document.body.getBoundingClientRect().top * 0.0001;
  const absTop = Math.abs(top);

  if (absTop <= 0.25) camera.scale.z = 1 + Math.abs(top * 3.5);

  if (absTop >= 0.2 && !isScrollUp) openLogo();
  else if (absTop < 0.25 && isScrollUp) closeLogo();

  if (!(absTop >= 0.1 && absTop <= 0.17)) return;

  const x = camera.position.x,
    y = camera.position.y,
    z = camera.position.z;

  let rotSpeed = 0.2;

  if (isScrollUp) {
    camera.position.x = x * Math.cos(rotSpeed) - z * Math.sin(rotSpeed);
    camera.position.z = z * Math.cos(rotSpeed) + x * Math.sin(rotSpeed);
  } else {
    camera.position.x = x * Math.cos(rotSpeed) + z * Math.sin(rotSpeed);
    camera.position.z = z * Math.cos(rotSpeed) - x * Math.sin(rotSpeed);
  }

  // camera.lookAt(scene.position);

  if (absTop >= 0.1 && !isScrollUp) canvas.classList.add('canvas-transparent');
  else if (absTop < 0.15 && isScrollUp)
    canvas.classList.remove('canvas-transparent');
}

  document.body.onscroll = handleOnScoll;
  function openLogo() {
  $(document).ready(function () {
    $('.extra').hide();
    $('.model1').animate(
      {
        left: '580px',
        width: '300px',
        height: '300px',
      },
      500
    );

    $('.model2').animate(
      {
        right: '280px',
        width: '300px',
        height: '300px',
      },
      500
    );

    $('.heading').animate(
      {
        top: '15px',
        fontSize: '30px',
      },
      500
    );

    $('#col1').css({ visibility: 'visible' });
  });
}

function closeLogo() {
  // console.log('Close Logo!');
}
</script>
// <script>

// $(document).ready(function(){
//   $( "#col2" ).click(function() {
//   $(".extra").hide();
//   $( ".model1" ).animate({
//     left:"480px",
//     // top:"100px",
//     width: "300px",
//     height: "300px",
//     }, 1500 );
// });

//   $( "#col2" ).click(function() {
//   $( ".model2" ).animate({
//   right:"280px",
// // top:"100px",
//   width: "300px",
//   height: "300px",
//   }, 1500 );
// });

//   $( ".col" ).click(function() {
//   $( ".heading" ).animate({
//   top: "15px",
//   // left:"15px",
//   fontSize:"30px",
//   }, 1500 );
//   });
// });

// $(document).ready(function(){
//   $("#col2").click(function(){
//   $("#col1").css({"visibility":"visible"});
// });
// });
// </script>
// <script>
//   AOS.init();
// </script>
  </body>
</html>
