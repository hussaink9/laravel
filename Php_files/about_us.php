
<style>
body{
  background-image: url('images/aboutus.png');
  background-repeat: no-repeat;
  background-size:cover;
  width: 100%;
  min-width: 800px;
  /* width:600px; */
  /* overflow: scroll; */
}
    
/* .main
{
    background-image: url('images/main_page.png');
    height: 100vh;
    background-repeat: no-repeat;
    background-size: cover;
} */

.mainright{
display:inline-block;
height: 100%;
margin-left: 80%;
}

.leader{
  height: 100vh;
}

.team{
  margin-top:0px;
  margin-left:60px;
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
.line
{ 
   margin-top:-1%;
    margin-left:-70px;
    stroke:#d6b37c;
    stroke-width:2; 
}
/* our leader images settings */
.imgsetng img{
  width:220px;
  height:350px;
  /* margin-left:110px; */
  /* box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  border-radius: 10px; */
}
.imgsetng h4{
  text-align:center;
  margin-top:20px;
  color:#d6b37c;
  font-family: 'Cinzel', serif;
  font-size:20px;
}
.imgsetng p{
  text-align:center;
  color:white;
  font-family: 'Montserrat', sans-serif;
  font-size:12px;
}
/* our team image settings css */
.image_setng img{
  width:200px;
  margin-left:130px;
  /* box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
  border-radius: 10px; */
}
.image_setng h4{
  text-align:center;
  margin-top:20px;
  color:#d6b37c;
  font-family: 'Cinzel', serif;
  font-size:20px;
}
.image_setng p
{
  text-align:center;
  color:white;
  font-family: 'Montserrat', sans-serif;
  font-size:12px;
}
#modelanit{
  left: 35%;
  width:100vh;
  position: fixed;
  animation-name: rainbow;
  animation-delay:3s;
  animation-duration: 60s;
  animation-iteration-count:infinite;
  animation-fill-mode: forwards;
}
@keyframes rainbow {
0% {
  /* background-color: blue; */
  top: 0px;
  height: 90vh;
  width: 90vh;
  opacity:0.5;
}
25%{
  top:0px;
  width:90vh;
  height: 90vh;
  opacity:0.5;
}
50% {
  top: 0px;
  width:100vh;
  height: 100vh;
  /* opacity:0.1; */
}
75%{
  top: 0px;
  width:100vh;
  height: 90vh;
}
100%{
  top: 0px;
  width:100vh;
  height: 100vh;
  opacity:0.1;
}
}
</style>

<!-- header section -->
<?php include 'meta_data.php';?>
<div class="container">
      <div class="row"> <?php include('menu_bar.php');?>  </div>
</div>
<div class="container">
    <div class="row">
    <div class="col-4 overflow-hidden" style="margin-top: 8%;">
        <h1 class=" mt-5" style="font-family:Kalista Serif; font-size:60px;line-height:200%;color:#d6b37c;direction: rtl;margin-left: 20px;"> Our <br> Brand <br> Mantra <br> 
      </h1>
        <div>
        <svg height="110" width="600"class="line" >
        <line x1="-300" y1="600" x2="350" y2="0" >
      </svg>
        </div>
</div>
<div class="col-6" style="margin-top: 8%;">
<h2 class=" mt-5" style="font-family:Kalista Serif; font-size:60px;line-height:200%;color:#f5f5f5;margin-left: 25px;">
<span > Think</span><br>
<span>Globally</span><br>
<span> Act Locally</span>
</div>
        <!-- 3D Model section -->
<div class="row p-0 m-0">
  <div class="col-2-sm" id="aSide"><model-viewer  id="modelanit"  src="models/logo.glb" alt="Baksh"  auto-rotate ar ios-src="models/logo.glb"></div> <br>
  <!-- <div class="col-6-sm" id="aSide1"><model-viewer src="models/text.glb" alt="Baksh" ar ios-src="models/text.glb"></div> -->
</div>
    </div>
  </div>
<!-- Who we are Section  -->
  <div class="row mt-5" style="margin-left:25px;">
    <div class="col-4 mt-5"> <h1 style="font-family:Kalista Serif;line-height:200%;color:#d6b37c;text-align:center;margin-top:70px;margin-left:30px;">Who <br> We <br> Are?</h1></div>
  <div class="col-12" style="margin-left:3%;margin-top:-200px;">
<p style="text-align:center;color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;line-height:200%;">
    Baksh international transforms real estate into a real advantage through global perspective , leading mindset <br> and proven expertise. We offer an unwavering commitment to our projects and clients. Baksh international  <br> story  started in 2020 with an aim to deliver trust and exceptional real estate services to its customers.  Since <br> the early days of Baksh the organization has continually received recognition for its contribution to the investment <br> management profile. Having now received multiple clients and commendations for everything from high-rise <br> construction  to interior design in residential and commercial communities . Baksh only goes from heart-to-heart  <br> and strength-to-strength.We add value to customer needs by ensuring operational excellence and strategic <br>innovation across the globe. Trust comes before any achievement that’s why we put trust at the centre  of <br>everything  we do. We don’t just recognize dreams , we thrive on them , our work focus on commitment ,<br>collaboration, convenience and building LEGACY OF TRUST.</p>
  </div>
</div>
<br> <br><br>
<h1 style="text-align:center;font-family:Kalista Serif;color:#d6b37c; ">We Provide All The Essentials</h1> <br>
<div class="row mt-5" style="margin-left:100px;">
  
<div class="col p-3" style="font-family: 'Cinzel', serif;font-size:20px;color:#d6b37c;"><h1> Easy Transfer </h1>
  <p style="color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;">A typical real estate agents will be able to assist you <br> with the property transfer . At Baksh International, we <br> will inform you of the correct way to get your deed. We <br> will also inform you of any requiremnets that you need <br> to meet for the transfer</p></div>
<div class="col p-3" style="font-family: 'Cinzel', serif;font-size:20px;color:#d6b37c;"><h1> Sell & Buy With Ease  </h1>
  <p style="color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;"> From listing to sold , we make sure your real estate experience <br> move more swiftly and smoothly with less stress because we <br> bring it all together.</p></div>
<div class="col p-3" style="font-family: 'Cinzel', serif;font-size:20px;color:#d6b37c;"><h1> Sell & Buy Faster  </h1>
  <p style="color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;">At Baksh International we use the advanced technology, <br>marketing tools and industry knowledge to sell your property <br> 80% faster than properties listed by other companies. </p></div>
  </div>
</div>

<div class="row" style="margin-left:100px;">
    <div class="col p-3" style="font-family: 'Cinzel', serif;font-size:20px;color:#d6b37c;"><h1> Financial Expertise  </h1>
    <p style="color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;"> Real estate is an attractive investment right now people <br> have been invested in both commercial and residential <br> real estate. Which means that there is a substantial sector <br>of the market that needs financial planner to help them manage their assets.</p></div>

    <div class="col p-3" style="font-family: 'Cinzel', serif;font-size:20px;color:#d6b37c;"><h1> Right Advice  </h1>
    <p style="color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;"> Buying or selling a property is a complex dealing. At <br> Baksh International , we can help you buy and sell <br> real estate with confidence and full knowledge of the <br> law , which will make it easier for you to make the right decisions.
</p></div>
    <div class="col p-3" style="font-family: 'Cinzel', serif;font-size:20px;color:#d6b37c;"><h1> Unlimited Options  </h1>
    <p style="color:#f5f5f5; font-family: 'Montserrat', sans-serif;font-size:12px;"> You can sell it, buy it or rent it. We have unlimited <br> options for your great investment in real estate <br>because you have more options than with other type <br> of investments.
 </p></div>
  </div>
<!-- core values section -->
<section class="core_values" style="margin-top:80px;">
  <div class="row" >
    <div class="col"> <h1 style="text-align:center; color:white;font-family:poppins, sans serif;">Our Core Values</h1> </div>
  </div>
  <div class="row">
  <?php include('core_values.php');?>
  </div>

</section>

<br>
<!-- our leaders section -->
<section class="leader mt-5">
<div class="leaderheading display-4 text-center" style="color:#d6b37c; margin-bottom: 15vh;font-family:Kalista Serif;">Our Leaders <br>
<p style="text-align: center;color:#f5f5f5;font-size:20px;color:#f5f5f5;margin-top:20px;font-family: 'Cinzel', serif;">Our Leaders and Offer Exceptional Expertise and Proficiency in the Real Estate Industry</p>
</div>
<div class="container mt-3">
  <div class="row imgsetng">
  <div class="col p-3"><img src="images/first_leader.png"> <br>
    <h4>Col.(Rt.) Ch. Mehmood</h4>
    <p>DIRECTOR OPERATIONS</p>
</div>
<div class="col p-3 "><img src="images/second_leader.png" >
  <h4>Col.(Rt.) Zia Ullah Abbasi</h4>
  <p>DIRECTOR COMPANY AFFAIRS</p>
</div>
<div class="col p-3 "><img src="images/sir_shakoor.png">
  <h4>Sheikh Hassan Shakoor</h4>
  <p>DIRECTOR PUBLIC RELATIONS</p>
</div>
<div class="col p-3 "><img src="images/sir_umar.png">
  <h4>Dr.Muhammad Umar</h4>
  <p>MARKETING CONSULTANT</p>
</div>
</div>
</div>
</section>

<!-- Our team section -->
<section class="team">
<div class="leaderheading display-4 text-center" style="color:#d6b37c; margin-bottom: 15vh;font-family:Kalista Serif;fontsize:60px;">Our Team
<p style="text-align: center;font-size:20px;color:#f5f5f5;margin-top:20px;font-family: 'Cinzel', serif;"> We are the Team With Best Preparation, Deepest Passion, Biggest Heart and Will to Succeed</p></div>
<div class="row image_setng">
  <div class="col-4 p-3"><img src="images/sir_iftekhar.png"> <br>
  <h4>Iftekhar Ahmad</h4>
  <p style="">MANAGER FINANCE</p>
  </div>
  <div class="col-4 p-3 "><img src="images/sir_faizan.png">
    <h4>Faizan Bukhari</h4>
  <p>HR MANAGER</p>
  </div>
    <div class="col-4 p-3 "><img src="images/sir_saad.png">
    <h4>Saad Munir</h4>
  <p>LEGAL OFFICER</p>
  </div>
    
  </div>
  </div>
</div>
</section>



