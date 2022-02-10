<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- navbar links -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:300" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Dosis:300" rel="stylesheet">

<!-- fonstawsome -->
  <link rel="stylesheet" href="css/all.min.css">

<!-- bootstap & W3css links -->
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- icons links -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">

<!-- model viewer links -->
  <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>
  <script nomodule src="https://unpkg.com/@google/model-viewer/dist/model-viewer-legacy.js"></script>

<!-- jquery cdn link -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- bootsrap folder link -->
<!-- <link rel="stylesheet" href="style.css"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<!-- coming soon animation link -->
  <link href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" rel="stylesheet">

<!-- google fonts link -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

<!-- Vanilla JS link -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vquery/5.0.1/v.min.js"></script>
</head>

<style>
body {
  background-image: url("images/main_page.png");
  background-repeat: no-repeat, repeat;
  background-size: cover;
  width: 100%;
  min-width: 800px;
  z-index: -1;
}
/* intro video section css */
video#bgvid { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -100;
    -ms-transform: translateX(-50%) translateY(-50%);
    -moz-transform: translateX(-50%) translateY(-50%);
    -webkit-transform: translateX(-50%) translateY(-50%);
    transform: translateX(-50%) translateY(-50%);
    background: url(polina.jpg) no-repeat;
    background-size: cover; 
}

@media screen and (max-device-width: 800px) {
html {
    background: url(polina.jpg) #000 no-repeat center center fixed;
}
#bgvid {
    display: none;
}
}
video#bgvid {
    transition: 1s opacity;
}
.stopfade { opacity: .5; }
</style>
<!-- intro video section -->
<div >
<audio autoplay>
  <source src="Videos/beautiful_relaxing_music_romantic_music_piano_music_guitar_music_instrumental_music_73_-6958600952126034955.mp3" type="audio/mp3">
  <source src="Videos/beautiful_relaxing_music_romantic_music_piano_music_guitar_music_instrumental_music_73_-6958600952126034955.ogg" type="audio/ogg">
  <p>Your browser doesn't support HTML5 audio. Here is a <a href="viper.mp3">link to the audio</a> instead.</p>
</audio>
</div>
<video playsinline autoplay loop muted poster="Logo-01.png" id="bgvid">
    <source src="Videos/Baksh_logo_reveal.mp4" type="video/mp4" 
    onload ="document.location.href='main_page.php';">
</video>

<div class="audio" style="display:none;">
<audio controls>
  <source src="Videos/intro_audio.mp3" type="audio/mp3">
</audio>
</div>
<body>



<div class="container">
<!-- menubar section -->
<nav class="navbar navbar-expand-lg ">
  <div class="container-fluid">
    <img class="navbar-brand" src="images/Logo-01.png" width="80px" alt="" style="height:77px;">
    <button class="navbar-toggler bd-transparent" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
            
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li></li>
    </ul>

    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item"><a class="nav-link active"  href="main_page.php" >HOME</a></li>
      <li class="nav-item"><a class="nav-link" href="about_us.php">ABOUT US</a></li>
      <li class="nav-item"><a class="nav-link" href="projects.php" >PROJECTS</a></li>
      <li class="nav-item"><a class="nav-link" href="blogs.php">BLOGS</a></li>
      <li class="nav-item"><a class="nav-link" href="careers.php">CAREERS</a></li>
      <li class="nav-item"><a class="nav-link" href="Gallery.php">GALLERY</a></li>
      <li class="nav-item"><a class="nav-link" href="contact_us.php">CONTACT US</a></li>
    </ul>

<form class="d-flex justify-content-center">
  <button class="btn btnedit" style="font-family: poppins, sans serif;margin-top:7px;">CONNECT</button>
</form>
  </div>
    </div>
</nav>
        
    <!-- navbar end -->

</div>


<!-- intro video JS -->
<script>
    var vid = document.getElementById("bgvid"),
pauseButton = document.getElementById("vidpause");
if (window.matchMedia('(prefers-reduced-motion)').matches) {
    vid.removeAttribute("autoplay");
    vid.pause();
    pauseButton.innerHTML = "Paused";
}
</script>

<script>
    function vidFade() {
    vid.classList.add("stopfade");
}
vid.addEventListener('ended', function() {
    // only functional if "loop" is removed 
     vid.pause();
	// to capture IE10
	vidFade();
});
pauseButton.addEventListener("click", function() {
    vid.classList.toggle("stopfade");
	if (vid.paused) {
vid.play();
    pauseButton.innerHTML = "Pause";
} else {
    vid.pause();
    pauseButton.innerHTML = "Paused";
}
})
</script>

<script type="text/javascript">
    window.onload = function () {
    setTimeout('delayer()', 12000);
    }
    function delayer() {
    window.location = 'full.php';
    }
</script>
</body>