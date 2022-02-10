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

<!-- custom stylesheet links -->
  <link rel="stylesheet" href="mystyle.css">

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
</head>


<style>
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
<div >
<audio autoplay>
  <source src="Videos/bgsound.mp3" type="audio/mp3">
  <source src="Videos/Specular Flow Logo Intro With Music.ogg" type="audio/ogg">
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
            window.location = 'main_page.php';
            }
</script>
