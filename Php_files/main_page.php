<!DOCTYPE html>
<html lang="en">

  <?php include('meta_data.php');?>

<style> 
body {
  background-image: url("images/main_pagefinal.png");
  background-repeat: no-repeat, repeat;
  background-size: cover;
  width: 100%;
  min-width: 1200px;
  z-index: -1;
}

@media only screen and (max-width: 1200px){
    /*Tablets [601px -> 1200px]*/
body {
  background-image: url("images/main_page.png");  
  background-repeat: no-repeat, repeat;
  background-size: cover;
  /* width: 100%; */
  /* min-width: 800px; */
  z-index: -1;
}
}
@media only screen and (max-width: 600px){
	/*Big smartphones [426px -> 600px]*/
  body {
  background-image: url("images/main_page.png");
  background-repeat: no-repeat, repeat;
  background-size: cover;
  /* width: 100%; */
  /* min-width: 800px; */
  z-index: -1;
}
}
@media only screen and (max-width: 425px){
	/*Small smartphones [325px -> 425px]*/
  body {
  background-image: url("images/main_page.png");
  background-repeat: no-repeat, repeat;
  background-size: cover;
  /* width: 100%; */
  /* min-width: 800px; */
  z-index: -1;
}
}
</style> 
<body>
<!-- background music -->
  
<!-- Navbar section -->
<div class="container">
  <div class="row"> <?php include('menu_bar.php');?>  </div>
  <!-- first section -->
  <div class="row"> <?php include('first_session.php');?> </div>
  <!-- ceo section -->
  <div class="row"> <?php include('CEO_section.php');?> </div>
  <!-- second section -->
  <div class="row"> <?php include('second_section.php');?> </div>
  <!-- third section  -->
  <div class="row"> <?php include('3rd_section.php');?> </div>
  <!-- testimonial section -->
  <div class="row"> <?php include ('testimonial.php');?> </div>
  <!-- footer section -->
  <div class="row"> <?php include('respnsive_footer.php');?> </div>

</div>


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/61c9ab9180b2296cfdd3f228/1fntscck7';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
</body>
</html>