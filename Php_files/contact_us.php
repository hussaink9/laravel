<?php include 'meta_data.php';?>
<style>
  body{
    background-image: url('images/contact_us.png');
    background-repeat: no-repeat;
    background-size:cover;
    /* width:600px; */
    /* overflow: scroll; */
}  

.line
{
    
   margin-top:-1%;
    margin-left:-70px;
    stroke:#d6b37c;
    stroke-width:2;
    
}
#aSide model-viewer {
  height: 700px;
      width: 700px;
  margin-left:7%;
  margin-top:-10px
}
#aSide1 model-viewer{
  height: 500px;
      width: 600px;
      margin-left:16%;
  margin-top:-270px
}
.embed-responsive-100x400px{
  padding-bottom: 400px;

}
.contact{
    margin-left:20px;
}
.contct span{
    color:grey;
    font-family: 'Poppins', sans-serif;
}
.botm_line{
    margin-top:-7%;
    margin-left:74%;
    stroke:#d6b37c;
    stroke-width:2;   
}
table, th, td{
    width:500px;
border:1px solid grey;
}


.form {
  border-radius: 5px;
  /* background-color: #f2f2f2; */
  padding: 20px;
  width: 60%;
  margin-left:220px;
}

</style>
<div class="container">
      <div class="row"> <?php include('menu_bar.php');?>  </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-3 overflow-hidden" style="margin-top: 15%;">
        <h1 class="text-end mt-5 text-white" style="font-family: 'Poppins', sans-serif;">Your Network Is <br> Your Networth, <br> Lets Talk</h1>
        <div>
        <svg height="110" width="600"class="line" >
        <line x1="-300" y1="600" x2="350" y2="0" >
      </svg>
        </div>
    </div>
    <div class="col-9 justify-content-center align-items-center">
    <div class="col-6-sm" id="aSide"><model-viewer src="models/logo.glb" alt="Baksh" auto-rotate  ar ios-src="models/logo.glb"></div> <br>
<div class="col-6-sm" id="aSide1"><model-viewer src="models/text.glb" alt="Baksh" ar ios-src="models/text.glb"></div>
    </div>

<div class="row">
    <div class="col-6 p-3 embed-responsive embed-responsive-100x400px">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3326.172075204917!2d73.0936442151572!3d33.52291148075326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x38dfed33aeaa9e2f%3A0xb03befc02e3f85fb!2sBaksh%20international!5e0!3m2!1sen!2s!4v1641279362498!5m2!1sen!2s" width="400" height="400" style="border:0;" allowfullscreen="" loading="lazy" width="300" height="450" frameborder="0" style="border:0;" allowfullscreen></iframe>
    </div>

    <div class="col-6 p-3 text-center contct">
    <h2 style="text-align:center; color:white;font-family: 'Poppins', sans-serif;margin-top:100px;margin-left:-80px;">GET IN TOUCH</h2>
    <h6 style="color:#d6b37c;text-align:center;margin-left:-95px;">HEAD OFFICE</h6>

    <span>Building no.50 business bay, Sector-F, DHA Behria Expressway,</span> <br>
    <span>Islamabad</span> <br>
    <span>info@bakshint.com</span> <br>
    <span>(UAN) 051 111 789 111</span> <br>
    <span>Monday to Friday: 10am to 6:00pm</span>
    </div>
  </div>

  <div>
        <svg height="110" width="600"class="botm_line" >
        <line x1="-300" y1="600" x2="350" y2="0" >
      </svg>
<br><br>
<!-- feedback section -->
<div class="row mt-5 feedback">
    <div class="col p-3 text-white">
        <h1 style="margin-left:40px;">Leave A Message</h1>
    </div>
  </div>

  <div class="row mt-5">
    <div class="col p-3 text-white text-center">
        <h1 style="margin-left:40px;color:#d6b37c;">We Love to hear from you</h1>
    </div>
  </div>

  <div class="col p-3 form text-white">


 <table class="table text-light form ">
    <tbody>
    <tr>
        <td style="padding-left:25px;">Your Name</td>
      </tr>
      <tr>
        <td style="padding-left:25px;">Email</td>
      </tr>
      <tr>
        <td style="padding-left:25px;">Subject</td>
      </tr>
      <tr>
        <td style="height:100px;padding-left:25px;">Comments</td>
      </tr>
    </tbody>
  </table>
  </div>
  </div>