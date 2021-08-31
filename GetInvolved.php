<?php include 'header.php'; ?>
<style>
    .w3l-inner-page-main .breadcrumb-infhny {
        background: url('img/get_involved.jpg') no-repeat ;

        background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        -moz-background-size: cover;
        z-index: 1;
        position: relative;
        min-height: 480px;
    }

    .w3l-inner-page-main .breadcrumb-infhny::before {
        content: "";
        background: rgba(6, 14, 21, 0.55);
        position: absolute;
        top: 0;
        min-height: 100%;
        left: 0;
        right: 0;
        z-index: -1;
    }

    .w3l-inner-page-main nav.breadcrumb-info {
        padding-top: 30px;
    }

    .w3l-inner-page-main h2.hny-title {
        font-size: 48px;
        color: #fff;
        margin-bottom: 0;
        font-weight: 700;

    }

    .hny-title {
        font-weight: bolder;
        color: #1664cd;
    }

    .w3l-inner-page-main .breadcrumb {
        display: flex;
        flex-wrap: wrap;
        padding: 0.75rem 1rem;
        margin-bottom: 1rem;
        list-style: none;
        background-color: transparent;
        border-radius: 0.25rem;
        justify-content: center;
    }

    .w3l-inner-page-main li.breadcrumb-item a {
        color: #ddd;
        font-size: 20px;
    }

    .w3l-inner-page-main .breadcrumb-item.active {
        color: #fff;
        font-size: 20px;

    }

    @media screen and (max-width: 1080px) {
        .w3l-inner-page-main h2.hny-title {
            font-size: 42px;
        }
    }

    @media screen and (max-width: 991px) {
        .w3l-inner-page-main .breadcrumb-infhny {
            min-height: 260px;
        }
    }

    @media screen and (max-width: 767px) {
        .w3l-inner-page-main h2.hny-title {
            font-size: 32px;
        }

        .w3l-inner-page-main nav.breadcrumb-info {
            padding-top: 90px;
        }

        .w3l-inner-page-main .breadcrumb-infhny {
            min-height: 200px;
        }
    }

    .column {
        float: left;
        width: 50%;
    }

    /* Clear floats after the columns */
    .row:after {
        content: "";
        display: table;
        clear: both;
    }



    .heading1 {

        text-align: center;
        color: #1664cd;
    }

    .heading1 h3 {
        font-size: 42px;
        line-height: 48px;
        font-weight: bolder;
        font-family: "Roboto", sans-serif;
        margin-top: 30px;
        margin-bottom: 60px;

    }

    .subhead {
        text-align: center;
        font-size: 26px;
    }



    .cp img {
        height: 200px;
        padding: 5px;
        width: auto;

    }

    .h1 {
        font-size: 22px;
        color: #1664cd;
        font-weight: 500;
    }

    .row span {
        margin-top: 50%;
        font-size: 18px;
        font-weight: 500;
        color: black;
    }

    .row select {
        width: 80%;
        height: 30px;
        font-size: 15px;
        padding: 5px;
        background-color: rgba(226, 226, 226, 0.6);
    }

    .row select option {
        font-size: 15px;
        padding-top: 50px;
        padding-bottom: 50px;

    }

    .row select option a {
        color: #1664cd;
    }

    @media only screen and(min-width:770px) {

        .cp img {
            height: 180px;
            padding: 5px;
            width: 80px;
            margin-top: 20px;

        }

        .h1 {
            font-size: 1px;
        }
    }







    button.accordion{
        font-size:16px;
	text-align:center;
	transition: 0.5s;
}

.accordion {
	border-radius:20px;
  background-color: white;
  color: #da2945;
  cursor: pointer;
 
  padding: 10px;
  width: 100%;
  text-align: left;
  border-width: 0.1px;
  border-color: grey;
  border-radius:5px;
  /* margin:2.8px; */
  
  background-image: url(assets/css/more.svg);
  background-size: 25px 25px;
	background-repeat: no-repeat;
	background-position: right;
	transition: transform .2s ease-in-out;
	
  
 } 



 /* Add a background color to the button if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
 .active, .accordion:after {
  background-color:#1664cd;
  color: white;
  background-image: url(assets/css/less.svg);
    transform: rotate(0deg);
	background-repeat: no-repeat;
	background-position: right;
	transition: transform .2s ease-in-out;
 }

 /* Style the accordion panel. Note: hidden by default */
 .panel {
  padding: 10px;
  width: 100%;
font-size:15px;
background: rgba(203, 203, 203, 0.43);
text-align:left;
align-items:left;
  display: none;
  overflow: hidden;
  transition:max-height 0.3s ease-out; 
    height:auto;
  max-height:100%; 
 }



 .accordion-button{
  
	background-image: url(assets/css/less.svg);
    transform: rotate(0deg);
	background-repeat: no-repeat;
	background-position: center;
	background-color:white !important;
	color:#1664cd;
	text-align:center !important;
 }



.panel.collapsed {
  max-height:0;
 } 

 #arrow {
	position: absolute;
   right: 18%;
	font-size:15px;

	width:10px;
	height:10px;
 color:rgba(0, 0, 0, 1);
 font-weight: 1000 !important;
 }

 @media screen and (max-width: 400px) {
.make_a_difference{
    margin-top: 35px;
}
 }
 @media screen and (max-width: 1080px) {
        .w3l-inner-page-main h2.hny-title {
            margin-top: 0px;
            font-size: 48px;
            padding-top: 0px;
            text-align: center;
            margin-top: 120px;
            margin-bottom: 240px;
        }

        .w3l-inner-page-main nav.breadcrumb-info {
            padding-top: 20px;
        }
    }
</style>

<title>Sri Sathya Sai Vidyaniketan | Get Involved</title>


<section class="w3l-banner-slider-main w3l-inner-page-main">
    <div class="breadcrumb-infhny">
        <header class="top-headerhny">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <div class="container-fluid">
        </header>
        <!-- /breadcrumbs-->
        <div class="container">
            <nav aria-label="breadcrumb" class="breadcrumb-info">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
                <h2 class="hny-title text-center" style="font-weight: 500;">Get Involved</h2>
                <!-- <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol> -->
            </nav>
        </div>
        <!-- //breadcrumbs-->
    </div>
    <!--//banner-slider-->
</section>



<section>
    <div class="container col-log-12">
        <div class="heading1">
            <h3>Get Involved</h3>
        </div>
        <h4 style="color:#da2945" class="subhead">You Can Choose To</h4>
        <br>
        <br>
        <br>

</section>










<section>
 <center> 
<div class="container col-log-12">
<div class="row"> 
<div class="col-lg-6 col-sm-6 ">
<h2 style="color: #1664cd;">Make A Difference in the life of a child</h2> <br>
<img style="height: 80%; width: 80%; border-radius:20px;" src="img/gi1.jpg" alt="">  
 </div>
<div class="col-lg-6 col-sm-6 ">

<h2 style="color: #1664CD;" class="make_a_difference">Make A Difference in the Learning Environment</h2>  <br>
<img style="height: 80%; width: 80%; border-radius:20px;" src="img/gi2.jpg" alt="">

</div>

</div>
</center>
</section>









<center> 

<section>
 
<div class="container col-log-12">
<div class="row"> 
<div class="col-lg-6 col-sm-6 ">
<br>

<br>
<h4 class="subhead"> Sponsor a child for a year </h4>
<br>
<br>

<button class="accordion " >  Select Class  </button>

<div class="panel" >
<br>

<script type="text/javascript">
    function ShowHideDiv(chkPassport) {
        var dvPassport = document.getElementById("dvPassport");
        dvPassport.style.display = chkPassport.checked ? "block" : "none";
    }
</script>

<form action="recieve.php" method="POST">

<input  onclick="ShowHideDiv(this)" class="lkg_&_ukg" type="radio" id="html1" name="v" value="LKG & UKG: Rs. 10,000">
  <label for="html">LKG & UKG: Rs. 10,000</label>
<br>
<input  onclick="ShowHideDiv(this)" class="class1–4" type="radio" id="html2" name="v" value="Class 1 – 4: Rs. 18,000">
  <label for="html">Class 1 – 4: Rs. 18,000</label>
<br>

<input  onclick="ShowHideDiv(this)" class="class5–7" type="radio" id="html3" name="v" value="Class 5 – 7: Rs. 19,000">
  <label for="html">Class 5 – 7: Rs. 19,000</label>
<br>

<input  onclick="ShowHideDiv(this)" class="class8–9" type="radio" id="html4" name="v" value="Class 8 – 9: Rs. 21,500">
  <label for="html">Class 8 – 9: Rs. 21,500</label>
<br>
<input  onclick="ShowHideDiv(this)" class="class10" type="radio" id="html5" name="v" value="Class 10: Rs. 22,000">
  <label for="html">Class 10: Rs. 22,000 </label>
<br>
<br>
<div id="dvPassport" style="display: none">


<br>

  
<label for="formGroupExampleInput">Enter Your Name: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name" name="s_name">

<br>
    <label for="formGroupExampleInput">Enter Your Phone No: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Phone No." name="s_phoneno">

  <br>
    <label for="formGroupExampleInput">Enter Your Mail ID:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mail ID" name="s_email">

    <div style="width: 100px; ">
              <!-- <div class="eff-4-pink" ></div> -->
              <button class="button-4-pink" type="submit">Submit</button>
            </div>
   </form>
   
    
</div>



</div>




 </div>
<div class="col-lg-6 col-sm-6 ">
<br>

<br>
<h4 class="subhead"> Select Your Choice</h4>
<br>
<br>
<button class="accordion " >  I wish to Donate   </button>
<div class="panel" >
<br>

<script type="text/javascript">
    function ShowHideDiv2(chkPassport2) {
        var dvPassport2 = document.getElementById("dvPassport2");
        dvPassport2.style.display = chkPassport2.checked ? "block" : "none";
     
        var text2 = document.getElementById("otherop");
        var text1 = document.getElementById("amountop");
        if (amountForClass.checked == true){
            text2.style.display = "none";
    text1.style.display = "block";
  } else {
    text2.style.display = "block";
     text1.style.display = "none";
  }


 
    
    }
</script>
<!-- 
<script type="text/javascript">
    function ShowHideDiv3(chkPassport3) {
        var dvPassport3 = document.getElementById("dvPassport3");
        dvPassport3.style.display = chkPassport3.checked ? "block" : "none";

        if(  )
    }
</script> -->



<input  onclick="ShowHideDiv2(this)" id="amountForClass" type="radio" id="html2" name="fav_language2" value="Amount for a Class">
  <label for="html">Amount for a Class <br>
(any amount is welcome)</label>
<br>
<input  onclick="ShowHideDiv2(this)" class="otheroptions" type="radio" id="html2" name="fav_language2" value="Play things">
  <label for="html">Play things</label>
<br>

<input  onclick="ShowHideDiv2(this)" class="otheroptions" type="radio" id="html2" name="fav_language2" value="Furniture: Desks / Chairs / Boards">
  <label for="html">Furniture: Desks / Chairs / Boards</label>
<br>

<input  onclick="ShowHideDiv2(this)" class="otheroptions" type="radio" id="html2" name="fav_language2" value="Techie Stuff: Laptop, Projector etc">
  <label for="html">Techie Stuff: Laptop, Projector etc</label>
<br>
<input  onclick="ShowHideDiv2(this)" class="otheroptions" type="radio" id="html2" name="fav_language2" value="Any other donations">
  <label for="html">Any other donations</label>
<br>
<br>


<div id="dvPassport2" style="display:none;">
<form  action=" ">
  
<label for="formGroupExampleInput">Enter Your Name: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name">

<br>
    <label for="formGroupExampleInput">Enter Your Phone No: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Phone No.">

  <br>
    <label for="formGroupExampleInput">Enter Your Mail ID:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mail ID">

<center> 
    <div style="width: 100px; ">
    <!-- <div class="eff-4-pink" ></div> -->
              <button class="button-4-pink"  type="submit">Submit</button>
            </div>
   </form>
   <br>

   <div>
   <h3 id="amountop"> You Can make 
a UPI transfer to <b>- 70225 37447 </b></h3>
   </div>
   <h3 id="otherop">Thank You – We 
Will Get in Touch 
with You</h3>
   </div>
   </center>
</div>


<div id="dvPassport3" style="display:none;">
<form  action=" ">
  
<label for="formGroupExampleInput">Ente: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Name">

<br>
    <label for="formGroupExampleInput">Enter Your Phone No: </label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your Phone No.">

  <br>
    <label for="formGroupExampleInput">Enter Your Mail ID:</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mail ID">

    <div class="button-4-pink" style="width: 100px; ">
              <div class="eff-4-pink" ></div>
              <button type="submit">Submit</button>
            </div>
   </form>
   
    
</div>
</div>
</div>



</div>




</div>



</section>
</center>


<br>
<br>
<br>
<br>
<br>

<br>



<?php include 'footer.php'; ?>


<script>
	var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");

    /* Toggle between hiding and showing the active panel */
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    }
  });
}
</script>
