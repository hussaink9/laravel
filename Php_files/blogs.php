<?php include 'meta_data.php';?>

<style>
    *{
    box-sizing: border-box;
    
}
body{
  background-image: url('images/blogbg_1.png');
  background-repeat: no-repeat;
  /* background-position:cover; */
  /* width:600px; */
  /* overflow: scroll; */
}
body {
  font-family: Arial, sans-serif;
  background: url(images/Blogs_bg.png) no-repeat;
  background-size: cover;
  height: 100vh;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}

/* .box {
  width: 40%;
  margin: 0 auto;
  background: rgba(255,255,255,0.2);
  padding: 35px;
  border: 2px solid #fff;
  border-radius: 20px/50px;
  background-clip: padding-box;
  text-align: center;
} */

.button img {
  margin-top: 95px;
  border-radius: 20px;
  text-decoration: none;
  cursor: pointer;
  transition: all 0.3s ease-out;
}


.overlay {
    
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: hidden;
  opacity: 0;
}
.overlay:target {
  visibility: visible;
  opacity: 1;
}

.popup { 
  margin: 70px auto;
  padding: 20px;
  background-image: url('images/rounded.png');
  border-radius: 5px;
  width: 60%;
  height: 650px;
  position: relative;
  transition: all 5s ease-in-out;
  overflow-x: hidden:
}

.popup h2 {
  margin-top: 0;
  color: #333;
  font-family: poppins;
}
.popup .close {
  position: absolute;
  top: 20px;
  right: 30px;
  transition: all 200ms;
  font-size: 30px;
  font-weight: bold;
  text-decoration: none;
  color: #333;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 100%;
  overflow-y: scroll; /* Add the ability to scroll */
  color:white;
  text-align:center;
}
.popup .content::-webkit-scrollbar {
    display: none;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

.bottom-right {
    background-color: rgba(0, 0, 0, 0.349);
    color: rgb(253, 253, 253);
    height:40px;
    width:510px;
  position: relative;
  bottom: 40px;
  right: 0;
  padding-left:5px;
 
}
a{
    text-decoration:none;
}
</style>

<body>
<div class="container">
      <div class="row"> <?php include('menu_bar.php');?>  </div>
</div>
    <!-- <h1 style="text-align:center;color:white;">Personal Branding for Real Estate Agents</h1><br>
    <h6 style="text-align:center;color: #d6b37c;">Why is personal brand is necessary for real estate agents?</h6> <br><br>

    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quidem saepe doloremque asperiores nostrum modi similique et nesciunt minus iusto pariatur dolor minima explicabo quisquam, excepturi sint eaque exercitationem delectus? Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quidem saepe doloremque asperiores nostrum modi similique et nesciunt minus iusto pariatur dolor minima explicabo quisquam, excepturi sint eaque exercitationem delectus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quidem saepe doloremque asperiores nostrum modi similique et nesciunt minus iusto pariatur dolor minima explicabo quisquam, excepturi sint eaque exercitationem delectus?Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatum quidem saepe doloremque asperiores nostrum modi similique et nesciunt minus iusto pariatur dolor minima explicabo quisquam, excepturi sint eaque exercitationem delectus?</p> -->
<div class="container">
<!-- 1st div -->
<div class="row">
<div class="col-sm-6 gap-5 ">
<div class="box">
	<a class="button" href="#popup1"><img src="images/1.jpg" width="510px">
    <div class="bottom-right">Bottom Right</div>
</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
        <h2 style="text-align:center;color:white;">Personal Branding for Real Estate Agents</h2>
    <h6 style="text-align:center;color: #d6b37c;">Why is personal brand is necessary for real estate agents?</h6> <br><br>
    <p style="text-align:justify;color:white;font-size:15px; font-family:poppins;">The truth is that a nineteenth-century warehouse exhibits greater craft in its construction than all but the most expensive modern buildings.Every great building once begun as a building plan. That means, sitting in that building plan on the table is a mighty structure not yet seen. It is the same with dreams.</p> <br>
    <p style="text-align:justify;color:white;font-size:15px; font-family:poppins;"> doctor can bury his mistakes but an architect can only advise his clients to plant vines. I believe that the real core of all architectural work lies in the act of construction. At the point in time, concrete materials are assembled and erected, the architecture we have been looking for becomes part of the real world</p>
    <div><img src="images/track.png" width="600px"></div>
		</div>
	</div>
</div>
</div>
<!-- 2nd div -->
<div class="col-sm-6">
<div class="box">
	<a class="button" href="#popup1"><img src="images/1.jpg" width="510px">
    <div class="bottom-right">Bottom Right</div>
</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div>
</div>
</div>

<!-- 3rd div -->

<div class="row mt-sm-5">
<div class="col-sm-6 gap-5 ">
<div class="box">
	<a class="button" href="#popup1"><img src="images/1.jpg" width="510px">
    <div class="bottom-right">Bottom Right</div>
</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div>
</div>
<!-- 4th div -->
<div class="col-sm-6">
<div class="box">
	<a class="button" href="#popup1"><img src="images/1.jpg" width="510px">
    <div class="bottom-right">Bottom Right</div>
</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div>
</div>
</div>
<!-- 5th div -->
<div class="row mt-sm-5">
<div class="col-sm-6 gap-5 ">
<div class="box">
	<a class="button" href="#popup1"><img src="images/1.jpg" width="510px">
    <div class="bottom-right">Bottom Right</div>
</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div>
</div>

<!-- 6th div -->
<div class="col-sm-6 gap-5 ">
<div class="box">
	<a class="button" href="#popup1"><img src="images/1.jpg" width="510px">
    <div class="bottom-right">Bottom Right</div>
</a>
</div>
<div id="popup1" class="overlay">
	<div class="popup">
		<a class="close" href="#">&times;</a>
		<div class="content">
			Thank to pop me out of that button, but now i'm done so you can close this window.
		</div>
	</div>
</div>
</div>
</div>