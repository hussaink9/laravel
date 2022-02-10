<style>
.mid_logo{
  margin-top:10%;
}
#secondtext p
{
  display:none;
/* position: absolute; */
/* margin-left:78%; */
}
#thired p
{
  display:none;
  /* position: absolute; */
  margin-left:78%;
}
.firsttext h4{
  color: white;
  margin-left: 75%;
  margin-top: -106px;
}
.mid img{
  position: absolute;
  width: 500px;
  margin-left: 20%;
  margin-top: -300px;
}
h1{
  letter-spacing: 5px;
}
/* svg line part css */
.stroke_line{
  stroke:#d6b37c;
  stroke-width:2;
  margin-left: 66%;
  margin-top: -400px;
}
/* track paragraph css */
.firsttext p{
  margin-left: 75%; 
  font-size:15px;
  margin-top: -3px;
  margin-bottom: 20px;
}
/* hover text css */
h1 {
  letter-spacing: 5px;
}
/* unvisited link */
#heading_1:link {
  color:white;
  font-weight:bolder;
}
/* mouse over link */
#heading_1:hover {
  color: #d6b37c;
  font-size: 42px;
}
/* heading 2 start */
/* unvisited link */
#heading_2:link {
  color: red;
  font-weight:bolder;
}
/* mouse over link */
#heading_2:hover {
  color: #2d96a7;
  font-size: 42px;
}
/* 3rd heading start */
/* unvisited link */
#heading_3:link {
  color: red;
  font-weight:bolder;
}
/* mouse over link */
#heading_3:hover {
  color: #6a2327;
  font-size: 42px;
}
h1 {
  letter-spacing: 5px;
}
/* track, record headings css */
.left_settings {
  margin-left: 10%;
  margin-top: 5px;
}
/* track section line css */
.svgline{
  margin-left: 6rem;
}
/* track image css */
#firstimage {
  position: absolute;
  margin-left: 25rem;
  width: 800px;
  height:450px;
  margin-top: -18%;
  opacity: 0.5;
  display: none;
}
/* record image css */
#secondimage {
  position: absolute;
  margin-left: 25rem;
  width: 800px;
  height:450px;
  margin-top: -22%;
  opacity: 0.5;
  display: none;
}
/* investment image css */
#thiredimage {
  position: absolute;
  margin-left: 25rem;
  width: 800px;
  height:450px;
  margin-top: -22%;
  opacity: 0.5;
  display: none;
}
/* track text css */
.firsttext {
  margin-bottom: 50%;
}
/* record text css */
#secondtext p {
  display:none;
  position: absolute;
  /* margin-left:78%; */
}
/* investment text css */
#thired p {
  display:none;
  position: absolute;
  margin-left:78%;
}
</style>
<!-- start of second section -->
<div class="container mid_logo">
  <div class="row">
  <div style="text-align:center; color:#d6b37c; margin-top: -60px;"> <h3 style="font-family:Kalista Serif;line-height: 300%;"> Don’t Hold Back </h3> 
  <h3 style="font-family:Kalista Serif;line-height: 300%;">Track Record Invest</h3>
  <h3 style="font-family:Kalista Serif;line-height: 300%;">TODAY</h3> </div> <br><br> 
  <br><br><br>  
  <div class="col left_settings">
      <h1 id="heading_1" style="color:#f5f5f5; !important;font-weight: normal !important;font-family: 'Cinzel', serif;">TRACK</h1> <br><br>
      <h1 id="heading_2" style="color:#f5f5f5; !important;font-weight: normal !important;font-family: 'Cinzel', serif;">RECORD</h1> <br> <br>
      <h1 id="heading_3" style="color:#f5f5f5; !important;font-weight: normal !important;font-family: 'Cinzel', serif;">INVEST</h1>
    </div>
  </div>
</div>
<!-- Svg line start -->
<div class="row stroke">
  <div class="col svgline"> 
    <div class="col"><img src="images/record1.png" id="firstimage"> </div>
    <div class="col"><img src="images/track1.png" id="secondimage"> </div>
    <div class="col"><img src="images/invest1.png" id="thiredimage"> </div>  
      <svg height="150" width="1300" class="stroke_line"><line x1="-300" y1="700" x2="400" y2="0"/></svg>
  </div>
</div>
<!-- track, record, investment text section -->
<div class="container" style="margin-left: 89%;">
<div class="row">
  <div class="col text-white" > 
    <p class="firsttext" style="display:none;font-family: poppiins, sans serif;">
      Discover the new opportunities <br>and a new path towards success <br>There is no limit to the number. </p>

    <p id="secondtext" style="display:none;font-family: poppiins, sans serif;">
      Lorem ipsum, dolor sit amet <br> consectetur adipisicing elit. <br> Explicabo accusamus itaque aut</p>

    <p id="thired" style="display:none; color: white; font-family: poppiins, sans serif;">
      Discover the new opportunities <br>and a new path towards success <br>There is no limit to the number</p>
    </div>
  </div> 
</div>
<br>

<script>
// track jquery section
$(document).ready(function(){
  $("#heading_1").mouseover(function(){
  $(".firsttext").show();
  $("#firstimage").show(); 
});

  $("#heading_1").mouseout(function(){
  $(".firsttext").hide();
  $("#firstimage").hide();
  });
});
// Record jquery section
$(document).ready(function(){
  $("#heading_2").mouseover(function(){
  $("#secondtext").show();
  $("#secondimage").show();
});
  $("#heading_2").mouseout(function(){
  $("#secondtext").hide();
  $("#secondimage").hide();
  });
});
// Investment jquery section
$(document).ready(function(){
$("#heading_3").mouseover(function(){
  $("#thired").show();
  $("#thiredimage").show();
});
  $("#heading_3").mouseout(function(){
  $("#thired").hide();
  $("#thiredimage").hide();
  });
});
  </script>