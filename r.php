<?php

?>
<!DOCTYPE html> 
<html> 
<head> 
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com
  /ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src= "https://code.jquery.com/jquery-1.12.4.min.js"> 
  </script> 
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
  <!-----inputicon-->
   <link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<script src="js/jquery-3.5.1.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>

* {box-sizing: border-box}
.outside{
  margin-left: 400px;
}
.out{
width:420px;

border:1px solid lightgrey;
}
.nava{
  height:80px;
  background-color:#339980;
}
/*--------------------dot line---------*/
.mySlides {display:none ;}


/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
li.b{
  font-size: 25px;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 8px;
  padding: 16px;
  font-weight: bold;
 font-size: 20px;
  
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 12px;
  width: 12px;
  margin: 0 2px;
  background-color:#339980;
  border-radius: 50%;
  display: inline-block;
  border: 2px solid lightgrey;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: lightgrey;
}

/* Fading animation */
#hdd{
  height:200px;
  width: 600px;
  border: 1px solid black;
  position:relative;
}
.form-group .icon {
  position: relative;
  float: left;
  margin-left: 8px;
  margin-top: -24px;
  z-index: 2;
  color: #222222;
}

.col .icon {
  position: relative;
  float: left;
  margin-left: 8px;
  margin-top: -24px;
  z-index: 2;
  color: #222222;
}

  .column-left {
  float: left;
  width: 7%;
  padding-top:0px;
}
.column-right{
  padding-top:2px;
   float: left;
  width: 93%;
}
.row{
  width:400px;
  padding-left: 35px;
  padding-right: 10px;
}
/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

.form-group{
padding-top:30px;
}
.form-row{
padding-top:30px;
}

span.a{
display:inline-block;
padding-left: 40px;
padding-top:28px;
}
span.b{
display:inline-block;
padding-left:0px ;
padding-top:;
}



input[type='radio'] {
        -webkit-appearance: none;
        width: 13px;
        height: 13px;
        
        border-radius: 50%;
        border: 2px solid grey;
        outline: none;
        
    }
 input[type='radio']:checked  :after {
        width: 13px;
        height: 13px;
        border-radius: 15px;
        top: -2px;
        left: -2px;
        position: relative;
        background-color: #339980;
        content: '';
        display: block;
        visibility: visible;
        border: 1px solid white;
    }
 
input[type="checkbox"] {
  visibility:;
}
label {
  cursor: pointer;
}
   input[type="checkbox"]:checked +label:after
    {
     border-​color: red; background-color:red;
      }


sup{
  padding-left:14px;
}
li p{
  padding-left: 45px;
  color:grey;
  font-size: 15px;
}
li p:hover{
  color:black;
}
li span{
  
}
li input[type="text"]{
  border-top: 0;
  border-left: 0;
  border-radius: 0;
  border-right: 0;
  font-size: 22px;
   font-family: Arial, Helvetica, sans-serif;
}

li input[type="text"]:focus{
  border-top:none;
  border-left: none;
  border-right: none;
  outline:none;
}
.p #ll{
  padding-left: 30px;
  color:grey;
  font-size: 15px;
}
.card-body{
  padding:30px 25px 30px 5px;
}
.navbar {
    width: 100%;
    height:85px;
    padding:0px;
    margin:0px;
    background-color: #339980;
    }
    /* Navigation links */
   .aa {
    float: left;
    color: black;
    text-decoration: none;
    font-size: 17px;
    outline:none;
    height:90px;
    width: 50%; 
    padding-top:3px;
    text-align: center; 
    border:none;
    border-bottom: none;
    background-color:#339980;

  }
  
  /* Add a background color on mouse-over */
  
  .aa:hover {
    display:block;
    
  }

  /* Style the current/active link */
  .aa.active {
    box-shadow: 0;
    background-color: #339980;
     border-bottom:none ; 
     display:block;
  }

  
.form-control{
border-top:0;
border-right: 0;
border-left: 0;
width: 100%; 
border-radius: 0px;
padding: 10px 0px 1px 10px;
             
}
.form-control:focus {
  
  border-top::0px;
  border-left: 0px;
  border-right: 0px;
  box-shadow: none;
  border-bottom: 4px solid green;
}
.form-control:focus::placeholder {
  
  color: transparent;
}
input[type="text"]:focus::placeholder {
  
  color: transparent;
}
span.r{
  display:inline-block;
  border: 2px solid black;
}
.form-control input[type="text"]::placeholder {
color:red;
}
.form-row input[type="text"]{

}
.cardimg{
  padding-top: 30px;
  padding-left: 90px;
}
 #bttn{
      width:350px;
      height:100px;
      padding-top: 40px;
      padding-left: 50px;
  border-radius: 25px;
    border-bottom-left-radius: 25px;
  }
    .icon-input-btn{
        display: inline-block;
        position: relative;
    }
    .icon-input-btn input[type="submit"]{
        padding-left: 2em;
    }
    .icon-input-btn .fa{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
        color:lightgrey;
    }
     .icon-input-btn .fas{
        display: inline-block;
        position: absolute;
        left: 0.65em;
        top: 30%;
        color:lightgrey;
    }
   /* Chrome, Safari, Edge, Opera */
input::-webkit-outer-spin-button,
input::-webkit-inner-spin-button {
  -webkit-appearance: none;
  margin: 0;
}

label {
  margin:0px 0;
  position:relative;
  
}
  
span.pp {
  padding:10px;
  pointer-events: none;
  position:absolute;
  left:0;
  top:0;
  transition: 0.2s;
  transition-timing-function: ease;
  transition-timing-function: cubic-bezier(0.25, 0.1, 0.25, 1);
  opacity:0.5;
}

input {
  padding:;
}

input:focus + span.pp, input:not(:placeholder-shown) + span.pp {
  opacity:1;
  transform: scale(0.75) translateY(-100%) translateX(-30px);
  color:green;
  padding-left:25px ;
}

/* For IE Browsers*/
input:focus + span, input:not(:-ms-input-placeholder) + span {
  opacity:1;
  transform: scale(0.75) translateY(-100%) translateX(-30px);
}
#don{
  width:330px;height:60px;
                                    padding-left:24px;
                                     border-bottom: 3px solid grey;border-top:0px;
                                     color: white; font-size: 21px;
  border-left: 0px;
  border-right: 0px;
  border-radius:6px;
  background-color: #339980;
  outline:none;
}

        </style>

        <!--input icon-->
<script>
$(document).ready(function(){
  $(".icon-input-btn").each(function(){
        var btnFont = $(this).find(".btn").css("font-size");
        var btnColor = $(this).find(".btn").css("color");
        $(this).find(".fa").css({'font-size': btnFont, 'color': btnColor});
  }); 
});
</script>

</head> 

<body> 
  <div class="outside">
<!--outside-->
<div class="out">
<!--chooseamount block-->
<!--chooseamount block-->
<div class="nava">
   
<a class="prev" onclick="plusSlides(-1)"><i class='fa fa-arrow-left' id="pr" style="display:none;color:white;font-size: 14px;padding-top: 10px" ></i></a>

<a class="next" onclick="plusSlides(1)"><i class='fa fa-arrow-right' style="color:white;" ></i></a>
<span class="a" style="font-size: 18px;color:white;padding-left: 65px">
  <p class="a1">Choose amount</p>
  <p class="a2" style="display:none">Donate</p>
</span>
<span class="a " style="padding-left: 13px"><i class="fa fa-lock" style="font-size:20px;color: lightgrey;"></i></span>
<span class="a" style="padding-left:8px">
    <div style="padding-left:8px">
        <span class="dot " onclick="currentSlide(1)" ></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span> 
      </div>
    </span>

<span class="a" style="padding-left: 63px"><i class='fas fa-arrow-right' style="color:white; width:20px;" ></i></span> 
</div>  <!-- Nava end-->
    
<div class="mySlides ">
    <div class="card1"> 
          <div class="card-body" >
   
       <ul style="list-style-type:none;padding-right: 15px;padding-left: none;">
           <li><label><input type="radio" id="other" name="euro1" value="10">
              <span style="font-size: 25px"> <sup style="font-size: 16px;color : darkgrey">&#x20A4</sup style="color:black">10</span>
              <p>Give one child a week of life saving nutrition.</p></label>
           </li>
           <hr style=>
           <li>
            <label><input type="radio" id="other" name="euro1" value="10">
               <span style="font-size: 25px"> <sup style="font-size: 16px;color : darkgrey">&#x20A4</sup>20</span>
              <p>Supply crisis support to immediately increase a families quality of life.</p>
            </label>
           </li>
           <hr>
           <li>
            <label>
              <input type="radio" id="other" name="euro1" value="10">
            
              <span style="font-size: 25px"> <sup style="font-size: 16px;color : darkgrey">&#x20A4</sup>50</span>
              <p>Set up a family with a business that provides ongoing income.</p>
</label>
          </li>
          <hr>
           <li>
            <label><input type="radio" id="other" name="euro1" value="10">
             <span style="font-size: 25px"> <sup style="font-size: 16px;color : darkgrey">&#x20A4</sup>60</span>
              <!-- do using relative and absolute positioning-->
               <p >Provide nutrition and empowerment to an entire family for a month
               </p>
             </label>
          </li>
          <hr>
         
          <li>
            <label>
              <input type="radio" id="other" name="euro1" value="10">
              <sup style="font-size: 17px;color : darkgrey">&#x20A4</sup>
              <input type="text" name="custamt" id="custamt"  placeholder="Custom Amount"  >
               
              <p id="ll">Please input an amount</p>
            </label>
          </li>
       </ul>
       

    

          <div style="padding-left: 31px">
               <input type="checkbox" id="myCheck" onclick="myFun()">
               <label for="myCheck" style="color:grey;padding-left: 3px ">Write us a comment</label> 
                    <div id="text" style="display:none">
                     <label style="color:grey">Your Comment</label>
                     <input type="text" class="form-control" id="cno" placeholder="">
              </div>
          
<br>
       <img src="gift2.png" style="height:90px;width:180px;padding-top:20px;padding-left:1px" alt="giftaid">    
       </div>
      </div>
        <div class="cardfoo" style="background-color :white;" >
         <b style="font-size: 15px;padding-left:35px">Boost your donation by 25% at no cost to you!</b>   
         <div class="form-check">
         <br>
         <br>

<!-- style=";padding-left: 5px;font-size: 12px"--> 
<div class="row">
  <div class="column-left">
    <input type="checkbox" id="myCheck2" style="height:15px;width:15px;" onclick="funct()">
  
  </div>
  <h2 class="column-right" style="font-size:15px;font-family:Arial,Helvetica, sans-serif;">Yes, I am a UK taxpayer and I would like the Forever Angels to reclaim the tax on all
qualifying donations I have made, as well as any future donations, until I notify them otherwise. </></h2>             
          
        </div><!--div end row-->

         </div>
          <div class="grr" style="padding:15px 45px 15px 67px;">
              <p style="color:grey;font-size: 12px;">
 I understand that if I pay less Income Tax and/or Capital Gains Tax than the amount of Gift Aid claimed on all my donations in that tax year it is my responsibility to pay any difference.
 
              </p>
          </div>


          <div class="text-center" style="padding-bottom: 20px">
              <button type="button" style="width:350px; height:52px;border-bottom: 3px solid grey;background-color: #339980;border-top:0px;
  border-left: 0px;outline: none;
  border-right: 0px;border-radius:6px;">
                  <p style="text-align: center;padding-top:7px;color:white;font-size: 20px" onclick="currentSlide(2)" >Next <i class='fas fa-arrow-right' style="color:white; width:20px;padding-left: :7px;" ></i></p>
              </button>
              <div class="text-info"style="text-decoration: underline;font-size:12px;padding-top: 30px;color:#339980" >
                  Powered by Donorbox 
              </div>
           </div>

        </div>
      </div>
</div>

<div class="mySlides ">
   <!------------------------------------------------------------------------->  
   <div class="card2  " > 
  <form style="padding:40px 35px 20px 35px">
    <div class="form-row">
      <div class="col ">
        <label>
        <input type="text" class="form-control" id="" placeholder="     " name="cardnumber" style="font-size: 15px;padding-left: 33px;"><span class="pp" style="font-size: 15px;padding-left: 35px;">First Name</span>
        <span class="icon fa fa-user fa-lg" style="color:grey"></span>
      </label>
      </div>
      <div class="col">
        <label>
        <input type="text" class="form-control" placeholder="   " name="pswd" style="font-size: 15px;padding-left: ;">
        <span class="pp" >Last Name</span>
      </label>
      </div>
    </div>
    <div class="form-group">
    <label>
    <input type="text" class="form-control" placeholder="    " id="email" style="font-size: 15px;padding-left: 35px;width:340px">
     <span class="pp" style="font-size: 15px;padding-left: 35px;">Email</span>
    <span class="icon fa fa-envelope fa-lg" style="color: grey"></span>
</label>
  </div>
  <div class="form-group">
    
    <label style="font-size: 20px;color:#339980;">Choose your Country</label> 
      
      <select class="form-control" id="sel1" style="padding-left:20px">
        <option>India </option>
        <option>Sri Lanka </option>
        <option>USA</option>
        <option>Bhutan</option>
  </select>
  </div>
  <div class="form-group">
   <label>
    <input type="text" class="form-control" placeholder=" " id="email"style="font-size: 15px;padding-left: 35px;width:350px">
      <span class="pp" style="padding-left: 25px">Address
    </span>
     <span class="icon fa fa-map-marker fa-lg" style="color: grey"></span>
  </label>
  
  </div>
  <div class="form-row">
      <div class="col ">
<label>
        <input type="text" class="form-control" id="" placeholder=" " name=""style="font-size: 15px;padding-left: 0">
        <span class="pp">City
    </span>
  </label>
      </div>
      <div class="col">
        <label>
        <input type="text" class="form-control" placeholder=" " name=""style="font-size: 15px;padding-left: 0">
        <span class="pp">Postal Code
    </span>
  </label>
      </div>
  </div>
       <div class="form-group">
    <label>
    <input type="email" class="form-control" placeholder="  " id="email" style="font-size: 15px;padding-left: 0;width:350px">
    <span class="pp">State/Province
    </span>
  </label>
  </div>
  <div  class="form-group">
                    <div style="text-align: center;" onclick="currentSlide(3)">
                         <span class="icon-input-btn " >
                            
                                  <input type="submit" value="Next" onsubmit="" style="width:330px;height:60px;padding-left:3px;
                                  border-top:0px;outline:none;
  border-left: 0px;
  border-right: 0px;border-bottom: 3px solid grey;background-color: #339980;color: white;font-size: 22px;border-radius:6px; ">
                                  <i class="fas fa-arrow-right" style="width:30px;padding-left:199px;padding-top:4px; color:white"></i> 
                         </span>
                    </div>
                    <div class="text-center" style="padding-top: 30px">
              
              <div class="text-info"style="text-decoration: underline;font-size:11px;color:#339980" >
                  Powered by Donorbox 
              </div>
          </div>
      </div><!--last formgroup-->

  </form>
</div>
<!--card2a end-->

</div>



<div class="mySlides ">
    <!-------------------------------------------------------------------->
<div class="card3 ">

    <div class="navbar" style="padding: none">
       <button class="aa active" onclick="myFunction()" style="font-size:16px;color:white;outline:none;border-bottom: none;" >
         <i class="fa fa-credit-card" style="font-size:20px;color:white;"></i>
            <br>
            <p style="font-size:20px;color:white;">CARD
            </p>
            <div id="line" style="height:3px;background-color: white;padding-left: 10px;
            padding-right: 10px;border-radius: 20px;"></div>
       </button>    
          <button class="aa"  onclick="myFution()" style="outline:none;border-bottom:none;">
            <i class="fa fa-paypal" style="font-size:16px;color:white;"></i>
            <br>
            <p   style="font-size:20px;color:white;">PAYPAL</p>

           <div id="line2" style="height:3px;background-color: white;padding-left: 10px;
            padding-right:10px;border-radius: 20px;display:none"></div>
          </button>

    </div>

       <div id="myDIV" >
              <div class="cardimg">
                     <img src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/cc-badges-ppppcmcvdam.png" 

                     style="height:25px;"alt="Pay with PayPal, PayPal Credit or any major credit card" />
                        
               </div>
                    
       
        
<!-- CARD PAYMENT-->
                 <form style="padding:40px 35px 10px 35px" name="cardForm" onsubmit="return donate()">
   
    <div class="form-group" style="padding-top: 29px;">
   <label>
    <input type="text-align" class="form-control" name="cardnumber" placeholder="  "  style="font-size: 15px;padding-left: 37px;width:350px">
     <span class="pp" style="padding-left: 35px">Card Number
    </span>
 
    <span class="icon fa fa-cc-paypal fa-lg" style="color: grey"></span>

    <span class="icon fa fa-credit-card fa-lg float-right" style="color: grey"></span>
     <span id="ecnum" style="color:red; font-size: 10px;"></span>
     </label>
  </div>
 
  <div class="form-row" style="padding-top: 29px;">
      <div class="col ">
<label>
        <input type="text" class="form-control" id="email" placeholder="   " name="cardexp" style="font-size: 12px;
        padding-left: 33px;">
         <span class="pp" style="padding-left: 29px;font-size: 13px">EXPIRATION MM/YY
    </span>
  
     <span class="icon fa fa-calendar fa-lg" style="color: grey"></span>  
             <span id="exp" style="color:red; font-size: 10px;"></span>
              <span id="exp" style="color:red; font-size: 10px;"></span>
               </label>
      </div>
    
      <div class="col">
        <label>
        <input type="text" class="form-control" placeholder="  " name="cardcvv" style="font-size: 12px;padding-left: 35px;">
         <span class="pp" style="padding-left: 25px">CVC Code
    </span>
  
        <span class="icon fa fa-lock fa-lg" style="color: grey"></span>
              <span class="icon fa fa-question-circle fa-lg float-right" style="color: grey"></span>
               <span id="ecvv" style="color:red; font-size: 10px;"></span>
            </div>
              </label>
      
  </div>
  <div class="form-row" style="padding-top: 29px;">
      <div class="col ">
<label>
    <input type="text" class="form-control" placeholder=" " name="cardcode"  id="email" style="font-size:14px;padding-left:30px;width:350px;">
     <span class="pp" style="padding-left: 25px">Billing Postal Code </span>
      <span class="icon fa fa-map-marker fa-lg" style="color: grey"></span>
      <span class="icon fa fa-question-circle fa-lg float-right" style="color: grey"></span>
                <span id="ecode" style="color:red; font-size: 10px;"></span>
               
                </label>
      </div>
 </div>
  <div  class="form-group">
                    <div style="text-align: center;">
                         <span class="icon-input-btn ">
                             <i class="fa fa-lock" style="padding-left: 105px;padding-top: 3px; color:white"></i> 
                                    <input type="submit"  value="DONATE" id="don"/>
                              
                         </span>
                    </div>
                  </div>
                    <div class="text-center">
              
                  <div class="text-info"style="text-decoration: underline;font-size: 10px" >
                  Powered by Donorbox 
              </div>
          </div>
    
</form>
</div><!--,ydiv end-->

   <div id="mydev" style="display:none">
   
       <img  src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/buy-logo-medium.png" alt="Buy now with PayPal" id="bttn" 
       />
          <div class="text-center" style="padding-top:55px;">
             
              <div class=""style="text-decoration: underline; margin-top:35px;font-size:10px;color: #339980" >
                  Powered by Donorbox 
              </div>
           </div>
       
       </div><!--mydev end-->
   
   </div><!--card4 end-->
   
 </div><!--myslide end-->



</div>
</>

   
<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
 
  if(n >= 2){
    document.getElementsByClassName("a2").innerHTML = "Donate";
  }
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if(slideIndex >1 ){
  
  document.getElementById("pr").style.display="block";
  }
  

  if (n > slides.length)
   {
     document.getElementsByClassName("next").style.display="none";

    }    
  if (n < 1) {slideIndex = slides.length;

  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }

  slides[slideIndex-1].style.display = "block";
 
  dots[slideIndex-1].className += " active";
}
</script>
<script type="text/javascript">
              function myFun() {
                var checkBox = document.getElementById("myCheck");
                var text = document.getElementById("text");
                if (checkBox.checked == true){
                  text.style.display = "block";

                } else {
                   text.style.display = "none";
                }
              }
</script>
<script >
      function donate(){

  var numbr= document.forms["cardForm"]["cardnumber"];
if (numbr.value == "") { 
           document.getElementById("ecnum").innerHTML=" enter your Card Number."; 
          
        }
          var expire= document.forms["cardForm"]["cardexp"];
if (expire.value == "") { 
           document.getElementById("exp").innerHTML=" enter your Card Number."; 
           ;
    
        }
          var cvv= document.forms["cardForm"]["cardcvv"];
if (cvv.value == "") { 
           document.getElementById("ecvv").innerHTML=" enter your Card Number."; 
           
        
        }
            var code= document.forms["cardForm"]["cardcode"];
if (code.value == "") { 
           document.getElementById("ecode").innerHTML=" enter your Card Number."; 
           return false;
        
        }
        if(numbr.value == ""||expire.value == ""||cvv.value == ""||code.value == ""){
          return false;
        }
        
        
}
 </script>
<script>
function funct(){
  var che = document.getElementById("myCheck2");
  var crd2 = document.getElementByClassName("card2");
  var crd4 = document.getElementByClassName("card4");
  if (che.checked == true){
    crd2.style.display = "none";
  
     crd4.style.display = "block";

  }
}
</script>

        <script>
function myCode5() {
  document.getElementById("r").style.display = "block";
  document.getElementById("r1").style.display = "none";
    document.getElementById("r2").style.display = "none";
      document.getElementById("r3").style.display = "none";
}function myCode6() {
  document.getElementById("r1").style.display = "block";
  document.getElementById("r").style.display = "none";
    document.getElementById("r2").style.display = "none";
      document.getElementById("r3").style.display = "none";
}
function myCode7() {
  document.getElementById("r2").style.display = "block";
  document.getElementById("r").style.display = "none";
    document.getElementById("r1").style.display = "none";
      document.getElementById("r3").style.display = "none";
}
function myCode8() {
  document.getElementById("r3").style.display = "block";
  document.getElementById("r1").style.display = "none";
    document.getElementById("r").style.display = "none";
      document.getElementById("r2").style.display = "none";
}



        </script>
  
<script>
function myCode1() {
  document.getElementById("rr").style.display = "block";
  document.getElementById("rra").style.display = "none";
    document.getElementById("rrb").style.display = "none";
      document.getElementById("rrc").style.display = "none";
}
function myCode2() {
  document.getElementById("rra").style.display = "block";
    document.getElementById("rr").style.display = "none";
      document.getElementById("rrb").style.display = "none";
        document.getElementById("rrc").style.display = "none";
}
function myCode3() {
  document.getElementById("rrb").style.display = "block";
    document.getElementById("rra").style.display = "none";
    document.getElementById("rr").style.display = "none";
      document.getElementById("rrc").style.display = "none";
}
function myCode4() {
  document.getElementById("rrc").style.display = "block";
    document.getElementById("rr").style.display = "none";
      document.getElementById("rra").style.display = "none";
        document.getElementById("rrb").style.display = "none";
}
</script>

<script type="text/javascript"> 
    $(document).ready(function() { 
        $('input[type="radio"]').click(function() { 
            var inputValue = $(this).attr("value"); 
            var targetBox = $("." + inputValue); 
            $(".selectt").not(targetBox).hide(); 
            $(targetBox).show(); 
        }); 
    }); 
</script> 
   <script>
           function myFunction() {
               document.getElementById("mydev").style.display = "none";
               document.getElementById("line2").style.display = "none";
                document.getElementById("line").style.display = "block"
               document.getElementById("myDIV").style.display = "block";
               
           }
           function myFution(){


               document.getElementById("mydev").style.display = "block";

              document.getElementById("line").style.display = "none";
               document.getElementById("line2").style.display = "block";
               document.getElementById("myDIV").style.display = "none";

           }
       //     else{
         //       document.getElementById("mydev").style.display = "n";
         //      }  
           </script>
</body> 
</html>
