<style>
body{
    background-image: url('images/careers.png');
    background-repeat: no-repeat;
    background-size:cover;
    
    /* width:600px; */
    /* overflow: scroll; */
  width: 100%;
  min-width: 800px;
}

#talnt, #talent {
  padding: 5px;
  text-align: center;
}
#talnt{
    color:#d6b37c;
    font-weight:bold;
    font-size:17px;
    font-family:kalista serif;
    margin-top:5px;
}
#talent {
  text-align:center; 
  padding: 10px;
  display: none;
  color:white;
  font-family:poppins, sans serif;
}
/* 2nd value */
#motive, #flip2{
  padding: -5px;
  text-align: center;
}
#motive{
    color:#d6b37c;
    font-weight:bold;
    font-size:17px;
    font-family:kalista serif;
    margin-top:5px;
}
#motivation{
  text-align:center; 
  padding: 5px;
  display: none;
  color:white;
  font-family:poppins, sans serif;
}

/* 3rd value */
#attitude, #attit{
  padding: -5px;
  text-align: center;
}
#attit{
    color:#d6b37c;
    font-weight:bold;
    font-size:17px;
    font-family:kalista serif;
    margin-top:5px;
}
#attitude{
  text-align:center; 
  padding: 5px;
  display: none;
  color:white;
  font-family:poppins, sans serif;
}
.line
{
    margin-top:-1%;
    margin-left:-70px;
    stroke:#d6b37c;
    stroke-width:2;  
}
#positions{
    text-align:center; 
    color:#d6b37c;
    font-family: 'Poppins', sans-serif; 
    margin-left: 42%;
    background-color:transparent;
    border:none;
}
#career_m model-viewer {
  height: 700px;
  width: 700px;
  margin-left:40%;
  margin-top:-460px
}
#model_car model-viewer{
  height: 500px;
      width: 600px;
      margin-left:40%;
  margin-top:-250px
}
.navbar-brand{
  padding: 0px!important;
    
}
</style>
<body>
<?php include 'meta_data.php';?>
<div class="container">
      <div class="row"> <?php include('menu_bar.php');?>  </div>
</div>

<div class="container">
 <div class="row">
        <div class="col-3 overflow-hidden" style="margin-top: 15%;">
            <div id="talnt">Talent</div>
                <div id="talent"><p>Determines what you can DO.</p></div>
                <br>
            <div id="motive">Motivation</div>
                <div id="motivation" style="color:white;"><p>Determines How Much You Are Willing To Do.</p></div>
                <br>
            <div id="attit">Attitude</div>
                <div id="attitude" style="color:white;"><p>Determines How Will You Do it.</p></div>
        <div>
        <svg height="110" width="600"class="line" >
            <line x1="-300" y1="600" x2="350" y2="0" >
        </svg>
  </div>
</div>
</div>
    <div class="col-9">
        <div class="col-6-sm" id="career_m"><model-viewer src="models/logo.glb" alt="Baksh" auto-rotate  ar ios-src="models/logo.glb"></div> <br>
        <!-- <div class="col-6-sm" id="model_car"><model-viewer src="models/text.glb" alt="Baksh" ar ios-src="models/text.glb"></div> -->
    </div>
</div>

<div class="row" style="margin-left:100px;">
<div class="col p-3" style="font-family:Kalista Serif;color:#d6b37c;"><h1> Regular reviews </h1>
  <p style="color:#f5f5f5; font-size:16px; font-family: 'Poppins', sans-serif;">Two-ways performance reviews, to 
make a balance and measure evolution 
together.
</p></div>
<div class="col p-3" style="font-family:Kalista Serif;color:#d6b37c;"><h1> Office on a great location   </h1>
  <p style="color:#f5f5f5; font-size:16px; font-family: 'Poppins', sans-serif;"> Our beautiful office is right in the heart 
of Bahria Town
</p></div>
<div class="col p-3" style="font-family:Kalista Serif;color:#d6b37c;"><h1> Sell & Buy Faster  </h1>
  <p style="color:#f5f5f5; font-size:16px; font-family: 'Poppins', sans-serif;">At Baksh International we use the advanced technology, marketing tools and industry knowledge to sell your property 80% faster than properties listed by other companies. </p></div>
  </div>
</div>

<div class="row" style="margin-left:100px;">
    <div class="col p-3" style="font-family:Kalista Serif;color:#d6b37c;"><h1> Financial Expertise  </h1>
    <p style="color:#f5f5f5; font-size:16px; font-family: 'Poppins', sans-serif;"> Real estate is an attractive investment right now people <br> have been invested in both commercial and residential <br> real estate. Which means that there is a substantial sector <br>of the market that needs financial planner to help them manage their assets.</p></div>

    <div class="col p-3" style="font-family:Kalista Serif;color:#d6b37c;"><h1> Right Advice  </h1>
    <p style="color:#f5f5f5; font-size:16px; font-family: 'Poppins', sans-serif;"> Buying or selling a property is a complex dealing. At <br> Baksh International , we can help you buy and sell <br> real estate with confidence and full knowledge of the <br> law , which will make it easier for you to make the right decisions.
</p></div>
    <div class="col p-3" style="font-family:Kalista Serif;color:#d6b37c;"><h1> Unlimited Options  </h1>
    <p style="color:#f5f5f5; font-size:16px; font-family: 'Poppins', sans-serif;"> You can sell it, buy it or rent it. We have unlimited <br> options for your great investment in real estate <br>because you have more options than with other type <br> of investments.
 </p></div>
  </div>
<!-- open position section -->
<div class="container mt-5">
 <div class="row"><?php include 'careers1.php'?></div>
</div>
 <script> 
$(document).ready(function(){
  $("#talnt").mouseenter(function(){
    $("#talent").slideDown("slow");
  });
});

// 2nd value
$(document).ready(function(){
  $("#motive").mouseenter(function(){
    $("#motivation").slideDown("slow");
  });
});

// 3rd value
$(document).ready(function(){
  $("#attit").mouseenter(function(){
    $("#attitude").slideDown("slow");
  });
});
</script>
</body>