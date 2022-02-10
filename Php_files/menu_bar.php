<style>
  /* *{
    box-sizing: border-box;
} */
@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@300&family=Poppins:wght@100&display=swap');
body{
  width: 100%;
  min-width: 800px;
}
/* contact button css */
.d-flex .btnedit{
  color: white;
  background: transparent;
  outline: 1px solid white;
  border-radius: 20px;
}
.d-flex .btnedit:hover{
  color: rgb(255, 183, 0);
  border: 1px solid rgb(255, 183, 0);
}
/* navbar section css */
.navbar-nav .nav-item .nav-link:hover{
  border-bottom: 3px solid rgb(238, 205, 120);
}
.navbar-nav .nav-item .nav-link{
  color:#f5f5f5;
  text-align: center;
  font-family: 'Montserrat', sans-serif;
  padding:20px !important;
  text-decoration:none;
}
.navbar-nav .nav-item .nav-link .active{
  border-bottom: 3px solid white;
}
</style>
<nav class="navbar navbar-expand-sm ">
<div class="container-fluid">
  <img class="navbar-brand" src="images/Asset_10.png" alt="" style="width: 150px;">
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
  <!-- <li class="nav-item"><a class="nav-link" href="contact_us.php">CONTACT US</a></li> -->
</ul>

<form class="d-flex justify-content-center">
  <button class="btn btnedit" style="font-family: poppins, sans serif;margin-top:7px;">CONNECT</button>
</form>
</div>
</div>
</nav>
        
    <!-- navbar end -->