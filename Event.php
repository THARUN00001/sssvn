<?php include 'header.php'; ?>

<style>

  .w3l-inner-page-main .breadcrumb-infhny {
        background: url('Selected-School-Images/banner.jpeg') no-repeat ;
        background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        -moz-background-size: cover;
        z-index: 1;
        position: relative;
        min-height: 480px;
        background-position: center;
    }
/* .w3l-inner-page-main .breadcrumb-infhny::before {
        content: "";
        background: rgba(6, 14, 21, 0.55);
        position: absolute;
        top: 0;
        min-height: 100%;
        left: 0;
        right: 0;
        z-index: -1;
    } */


    h1 {
        font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 51px;
line-height: 113.19%;
/* or 58px */

text-align: center;

color: #1664CD;
    }


.h3{
    font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 40px;
line-height: 113.19%;
/* or 58px */

text-align: center;

color: #da2945;
}

@media screen and (max-width: 1080px) {
.h3{
  font-size: 30px;
}
h1{
  font-size: 40px;
}
@media screen and (max-width: 767px) {
.h3{
  font-size: 25px;
}
h1{
  font-size: 32px;
  margin-bottom: 0px;
  padding-bottom: 0px;
}
}

}

.counts {
    padding: 30px 0;
  }

  .counts .counters span {
    font-size: 48px;
    display: block;
    color: #0d6efd;
    font-weight: 700;
  }

  .counts .counters p {
    padding: 0;
    margin: 0 0 20px 0;
    font-family: "Raleway", sans-serif;
    font-size: 15px;
    font-weight: 600;
    color: #37423b;
  }
  .testimonials .testimonial-item h1{
    font-size: 50px;
    
     margin-top:50px;
      font-weight:bolder;
  }
  .testimonial-item{
    background-size:100% 100%;
    background-repeat: no-repeat;
    height:100%; 
    justify-content: center;
     align-items:center;
      padding-top:7rem;
  }
  .testimonials .testimonial-item p{
    font-weight:500;
    font-size:35px;
  }
  .overview{
    font-size:20px;

  }
  .p-4 img{
    width:350px;
     padding-top:15px;
  }
  @media only screen and (max-width:770px) {
    .testimonials .testimonial-item h1{
     font-size: 30px;
    }
     .testimonials .testimonial-item p{
      font-size: 22px
     } 
  }
  @media only screen and (max-width:377px) {
.overview{
  font-size:smaller;
}
.txt{
  font-size:x-small;
}
.testimonial{
  font-size: x-small;
}
  }
  @media only screen and (max-width:395px) {
    .p-4 img{
      width:300px;
    }
    }
    @media only screen and (max-width:330px) {
    .p-4 img{
      width:180px;
    }
    }

  @media only screen and (max-width:315px){
    .item .testimonial{
      font-size: 6px;
    }
    .carousel .img-box img{
      width: 2px;
      height: 2px;
    }
  }

button{
  height:50px;
  width: 100%;
  border-radius:4px !important;
  border:1px solid #da2945 !important;
  color:white;
}


.carousel {
    background: none;
}


button.active{

  
   background-color:#da2945 !important; 
}

li{
  padding:5px;
}

.events{
  align-items:center;
  text-align:center;
  height:51vw !important; width:70%;

}

.carousel-control-next{
  position: absolute;
  right: 10%;
}

.carousel-control-prev{
  position: absolute;
  left: 10%;
}

.events_carousel{
  object-fit:cover;
  align-items:center;
  text-align:center;
  height:37vw !important; width:70% !important;

}

#med_camps_prev{
    position: absolute;left: 20%;
  }
  #med_camps_next{
    position: absolute;left: 65%;
  }


@media only screen and (max-width: 900px) {

  .events_carousel{
  object-fit:cover;
  align-items:center;
  text-align:center;
  height:70vw !important; width:100% !important;

}

.carousel-control-next{
  position: absolute;
  right: 0;
}

.carousel-control-prev{
  position: absolute;
  left: 0;
}

   #med_camps_prev{
   position: absolute;
   left: 0;
 }
 #med_camps_next{
   position: absolute;
   left: 79%;
 }


}

.carousel-item{
  --swiper-theme-color: #f7f7f700 !important;
}

.carousel-item{ 
  --swiper-theme-color: #f7f7f700 !important;
}

  .carousel-item .testimonial-item center h1{
    font-size:60px; 
  
  }
  .carousel-item .testimonial-item center p{
    font-size:30px; 
  }
  @media only screen and (max-width:1050px) {
    .carousel-item .testimonial-item center h1{
      font-size: 50px;
    }
  .carousel-item .testimonial-item center p{
  font-size: 25px;
  }
  }
  @media only screen and (max-width:430px) {
    .carousel-item .testimonial-item center h1{
      font-size: 35px;
    }
  .carousel-item .testimonial-item center p{
  font-size: 20px;
  }
  }


.carousel-control-next{
  position: absolute;
  right: 10%;
}

.carousel-control-prev{
  position: absolute;
  left: 10%;
}

.events_carousel{
  object-fit:cover;
  align-items:center;
  text-align:center;
  height:42vw !important; width:70% !important;

}

@media only screen and (max-width: 900px) {

  .events_carousel{
  object-fit:cover;
  align-items:center;
  text-align:center;
  height:70vw !important; width:100% !important;

}

.carousel-control-next{
  position: absolute;
  right: 0;
}

.carousel-control-prev{
  position: absolute;
  left: 0;
}

.events{
  align-items:center;
  text-align:center;
  height:75vw !important; width:100%;

}

  }



@media screen and (max-width: 768px) {
   .nav{  flex-direction: column  
   }
   .button{
     width:100%;
   }
   .button.active{
     width:100%
   }
  }
@media screen and (max-width: 308px) {
  .nav .nav-link{
    font-size: 12px;
  }
}

</style>
<title>Sri Sathya Sai Vidyaniketan | Events</title>


<section style="background:url(Selected-School-Images/banner.jpeg); min-height:480px;" class="w3l-inner-page-main .breadcrumb-infhny w3l-inner-page-main .breadcrumb-infhny::before" data-aos="fade-right" >
    <div class="breadcrumb-infhny">
        <header class="top-headerhny">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <div class="container-fluid">
        </header>
        <br>
        <br>
        <br>
        <br>
       

        <!-- /breadcrumbs-->
        <div  class="container" data-aos="fade-left" >
            <nav aria-label="breadcrumb" class="breadcrumb-info">
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
         
            <br>
            <center>
            <h2 data-aos="fade-right" style="font-size:43px; color:white;">Events</h2>
            </center>    
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
<br>
<br>
<br>
<br>
<br>
<center>
<section>
<div class="container" style="width:80%; height:auto; padding:30px;   font-size:19px; border:2px solid #da2945; border-radius:10px;" > 





<center> 

<ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button style="  float:left;" class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Special Events</button>
  </li>
  <li class="nav-item" role="presentation">
    <button   class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Annual Events</button>
  </li>
  <li class="nav-item" role="presentation">
    <button style=" float:right;" class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Other Events</button>
  </li>
</ul>
</center>
<br>

<div class="tab-content" id="pills-tabContent" style="text-align: left;">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  

<li>
<a href=" #2001 "> <b> Swami's Visit - 2001 </b> </a>
</li>

<li>
<a href="#2002 "> <b> Swami's Visit - 2002 </b> </a>
</li>

<li>
<a href="#2007"> <b> Shirdi Nivasa Sai Drama at Prashanti Nilayam - 2007 </b> </a>
</li>



  
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
  
  
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
  
<div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12">



  <li>
  <a href=" #environment_Day "> <b> Environment Day </b> </a>
  </li>
  
  <li>
  <a href="#school_Inauguration_Day "> <b> School Inauguration Day 2021 </b> </a>
  </li>
  
  <li>
  <a href="#Krishna_Janmastami"> <b>Krishna Janmastami</b> </a>
  </li>

  <li>
  <a href="#Raksha_Bhandan"> <b>Raksha Bhandan</b> </a>
  </li>

  <li>
  <a href="#Independence_Day"> <b>Independence Day</b> </a>
  </li>
  <li>
  <a href="#Ganesh_Chaturthi"> <b>Ganesh Chaturthi</b> </a>
  </li>
  <li>
  <a href="#Teachers_Day"> <b>Teachers Day</b> </a>
  </li>
  <li>
  <a href="#Gandhi_Jayanthi"> <b>Gandhi Jayanthi</b> </a>
  </li>
  <li>
  <a href="#Childrens_Day"> <b>Childrens Day</b> </a>
  </li>


<ul> 
  
<li>
  <a href="#Hospital_Seva"> <b>Swami Birthday - Hospital Seva</b> </a>
  </li>

 

</div>
<div class="col-lg-6 col-md-12 col-sm-12">


<ul> 
 
<li>
  <a href="#Narayana_Seva"> <b>Swami Birthday - Narayana Seva</b> </a>
  </li>
  <li>
  <a href="#Laksha_Deepotsava"> <b>Swami Birthday - Laksha Deepotsava</b> </a>
  </li>
  
  <li>
  <a href="#Diwali"> <b>Diwali</b> </a>
  </li>

  <li>
  <a href="#Parents_Sports"> <b>Parents Sports</b> </a>
  </li>
  <li>
  <a href="#School_Annual_Day"> <b>School Annual Day</b> </a>
  </li>
  <li>
  <a href="#Republic_Day"> <b>Republic Day</b> </a>
  </li>
  <li>
  <a href="#Sarswathi_Pooja"> <b>Sarswathi Pooja</b> </a>
  </li>
  <li>
  <a href="#Mathru_Vandana"> <b>Mathru Vandana</b> </a>
  </li>
  <li>
  <a href="#Swami_Aradhana_Day"> <b>Swami Aradhana Day</b> </a>
  </li>


  </ul>








</div>
</div>

</div>

  
    </div>
  
  
  
  
  </div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
  











  <div class="container">
<div class="row">
<div class="col-lg-6 col-md-12 col-sm-12">



<ul> 
  
<li>
  <a href="#Science_Talent_Exam"> <b>Science Talent Exam</b> </a>
  </li>
  <li>
  <a href="#Youth_Conference"> <b>Youth Conference</b> </a>
  </li>
  <li>
  <a href="#Grama_Seva"> <b>Grama Seva</b> </a>
  </li>
  <li>
  <a href="#Medical_Camps"> <b>Medical Camps</b> </a>
  </li>
  <li>
  <a href="#EHV_Training_Programs_for_Teachers"> <b>EHV Training Programs for Teachers</b> </a>
  </li>
 
  </ul>
</div>
<div class="col-lg-6 col-md-12 col-sm-12">

<ul> 
<li>
  <a href="#Parenting_Programs"> <b>Parenting Programs</b> </a>
  </li>

<li>
  <a href="#Amrutha_Kalasha"> <b>Distribution of Amrutha Kalasha Ration Kits to Teachers and Staff</b> </a>
  </li>

<li>
  <a href="#bpt"> <b>BPT Vaccine Drive</b> </a>
  </li>

  <li>
  <a href="#kannada_Rajastova"> <b>Kannada Rajastova</b> </a>
  </li>



  <li>
  <a href="#swach_bharath"> <b>Swacha Bharath</b> </a>
  </li>

  <li>
  <a href="#aksharabhyasa"> <b>Aksharabhyasa</b> </a>
  </li>



  
  

  </ul>







</div>
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


<center> 
    <h1>Special Events </h1> 
    <br>

    <br>
    <h3 class="h3" id="2001">Swami's Visit-2001</h3>
    <br>
    <br>
    <img  class="events"  src="Selected-School-Images/2001/2001.jpg" alt="">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 class="h3" id="2002">Swami's Visit-2002</h3>
<br>
<br>
<br>
<img class="events" src="Selected-School-Images/2002/2002.jpg" alt="">
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<br>
<br>
<h3 class="h3" id="2007"> Shirdi Nivasa Sai Drama at Prashanti Nilayam - 2007 </h3>
<br>
<br>
<br>
<br>
</center>
<center> 
<div   id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div  class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/one.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Three.JPG" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Four.JPG" alt="fourth slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Five.JPG" alt="five slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Six.JPG" alt="six slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Seven.JPG" alt="seven slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Eight.JPG" alt="eight slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Shirdi-Nivasa-Sai/Nine.JPG" alt="nine slide">
    </div>
</div>

  <a  class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</center>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <center> 
    <h1>  Annual Events  </h1>
 
    <br>
    <h3 id="environment_Day " class="h3">Environment Day </h3>
<br>
<br>    
    <br>
    <br>
    <img class="events" id="environment_Day"   src="Selected-School-Images/Environment-Day/environmental-day.jpg" alt="">
    <br>
    <br>
    <br>
<br>
<br>
    <br>
    <br>
    <br>
    <h3 id="school_Inauguration_Day" class="h3"> School Inauguration Day 2021 </h3>
<br>

<br>
<br>
<br>
<br>
<img class="events"  src="Selected-School-Images/School-inaugaration-day/SID.jpg" alt="">
<br>

<br>
<br>
<br>
<h3 id="yoga_day" class="h3"> International Yoga Day </h3>
<br>
<br>
<br>
<br>
<img class="events"  src="Selected-School-Images/Yoga-Day/yoga-day.png" alt="">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Krishna_Janmastami" class="h3">Krishna Janmastami</h3>
<br>
<br>
<br>
<br>


<div style="object-fit: cover !important; height:50% !important;" id="carouselExampleFade2" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/one.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/two.jpg" alt="Second slide">
    </div>
    <div  class="carousel-item">
      <img class="events_carousel" style="height:50% !important;"  class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/three.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" style="height:50% !important;" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/four.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" style="height:50% !important;" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/five.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/six.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/seven.jpeg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/eight.jpeg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/nine.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/ten.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/eleven.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Krishna-Janmastami/twelve.jpeg" alt="Third slide">
    </div>
</div>

  <a class="carousel-control-prev" href="#carouselExampleFade2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Raksha_Bhandan" class="h3">Raksha Bhandan</h3>
<br>

<br>
<br>
<div id="carouselExampleFade3" class="carousel slide carousel-fade" data-ride="carousel">
  <div  class="carousel-inner">
    <div  class="carousel-item active">
      <img class="events_carousel"  class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/one.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel " class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel " class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/three.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/four.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/five.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel"  class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/six.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/seven.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Raksha-Bandhan/eight.jpg" alt="Third slide">
    </div>

</div>

  <a class="carousel-control-prev" href="#carouselExampleFade3" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade3" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>


<br>
<br>
<br>
<br>
<br>
<h3 id="Independence_Day" class="h3"> Independence Day </h3>
<br>
<br>

<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Independence-Day/independence-day.jpg" alt="Second slide">
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Ganesh_Chaturthi" class="h3"> Ganesh Chaturthi </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Ganesh-Chaturthi/Ganesha-chaturthi.jpg" alt="Second slide">
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Teachers_Day" class="h3"> Teachers Day </h3>
<br>
<br>
<br>

<div id="carouselExampleFade10" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/One.JPG" alt="One slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Two.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Three.JPG" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Four.JPG" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Five.JPG" alt="Five slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Six.JPG" alt="Six slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Seven.JPG" alt="Seven slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/teachers-Day/Eight.JPG" alt="Eight slide">
    </div>

</div>

  <a class="carousel-control-prev" href="#carouselExampleFade10" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade10" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<br>

<h3 id="Gandhi_Jayanthi" class="h3"> Gandhi Jayanthi </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Gandhi-Jayanthi/gandhi-jayanthi.jpg" alt="Second slide">


<br>
<h3 id="Childrens_Day" class="h3"> Childrens Day </h3>
<br>
<br>
<br>

<div id="carouselExampleFade16" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/one.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/three.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/four.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/five.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/six.jpg" alt="Third slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Childrens-Day/seven.jpg" alt="Third slide">
    </div>


</div>

  <a class="carousel-control-prev" href="#carouselExampleFade16" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade16" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<h3 id="Hospital_Seva"  class="h3">Swami Birthday - Hospital Seva </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Birthday/Hospital-Seva/hospital-seva.jpg" alt="Second slide">
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Narayana_Seva"  class="h3">Swami Birthday - Narayana Seva </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Birthday/ns/ns.jpg" alt="Second slide">


<!-- img -->



<br>
<br>
<br>
<br>
<br>
<h3 id="Laksha_Deepotsava"  class="h3">Swami Birthday - Laksha Deepotsava </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Birthday/Laksha-Deepotsava/Laksha-Deepotsava.jpg" alt="Second slide">
<!-- img -->
<br>
<br>
<br>
<br>
<br>
<h3 id="Diwali" class="h3"> Diwali </h3>
<br>
<br>
<center>  <h2  style="font-size:23px ;color:#106eea;"> Students have saved the money given to them to buy crackers and used it to purchase provisions to distribute to the needy.  </h2>  </center>
 <br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Diwali/diwali.jpg" alt="Second slide">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Parents_Sports" class="h3"> Parents Sports </h3>
<br>
<br>
<br>

<div id="ParentsSports" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/one.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/Two.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/three.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/four.jpg" alt="Four slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/five.jpg" alt="Five slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/six.jpeg" alt="Six slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/seven.jpeg" alt="Seven slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="events_carousel" class="d-block w-100" src="Selected-School-Images/Parents-Sports-Day/eight.jpeg" alt="Eight slide">
    </div>
 

</div>

  <a class="carousel-control-prev" href="#ParentsSports" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#ParentsSports" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="School_Annual_Day" class="h3"> School Annual Day</h3>
<br>
<br>
<br>

<div id="carouselExampleFade5" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/one.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/two.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/three.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/four.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/five.jpeg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/six.jpeg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/seven.jpeg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/eight.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Annual-Day/nine.jpeg" alt="Third slide">
    </div>

</div>

  <a class="carousel-control-prev" href="#carouselExampleFade5" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade5" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Republic_Day" class="h3"> Republic Day </h3>
<br>
<br>
<br>

<img class="events" class="d-block w-100" src="Selected-School-Images/Republic-Day/republic-day.jpg" alt="Second slide">

<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Sarswathi_Pooja" class="h3"> Sarswathi Pooja</h3>
<br>
<br>
<br>
<img  class="events" class="d-block w-100" src="Selected-School-Images/Sarswathi-Pooja/saraswathi-pooja.jpg" alt="Second slide">

<br>
<br>
<br>
<h3 id="Mathru_Vandana" class="h3"> Mathru Vandana </h3>
<br>
<br>
<br>

<div id="MathruVandana" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/one.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/three.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/four.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/five.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/six.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/seven.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/eight.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/nine.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img  class="events_carousel" class="d-block w-100" src="Selected-School-Images/Mathru-Vandana/nine.jpg" alt="Third slide">
    </div>

</div>

  <a class="carousel-control-prev" href="#MathruVandana" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#MathruVandana" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>


<br>
<br>
<br>
<h3 id="Swami_Aradhana_Day" class="h3"> Swami Aradhana Day</h3>
<br>
<br>
<br>

<div id="carouselExampleFade7" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/one.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/three.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/four.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/five.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/six.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/seven.jpg" alt="Third slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/eight.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/nine.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Sathya-Sai-Aradhana/nine.jpg" alt="Third slide">
    </div>

</div>

  <a class="carousel-control-prev" href="#carouselExampleFade7" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade7" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<h1> Other Events </h1>
<br>

<br>
<h3 id="Science_Talent_Exam" class="h3"> Science Talent Exam </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/STE/STE.jpg" alt="Second slide">
<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Youth_Conference" class="h3"> Youth Conference </h3>

<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Yuva-Samavesha/Yuva-Samavesha.jpg" alt="Second slide">
<br>
<br>
<br>
<br>
<br>
<br>

<h3 id="Grama_Seva" class="h3"> Grama Seva</h3>
<br>
<br>
<br>

<div id="carouselExampleFade8" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">


    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/One.JPG" alt="1 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Two.JPG" alt="2 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Three.JPG" alt="3 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Four.JPG" alt="4 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Five.JPG" alt="5 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Six.JPG" alt="6 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Seven.JPG" alt="7 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Eight.JPG" alt="8 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Nine.JPG" alt="9 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Ten.JPG" alt="10 slide">
    </div>
    
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Eleven.JPG" alt="11 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Twelve.JPG" alt="12 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Thirteen.JPG" alt="13 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Fourteen.JPG" alt="14 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Fifteen.JPG" alt="15 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Sixteen.JPG" alt="16 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Seventeen.JPG" alt="17 slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Grama-Seva/Eighteen.JPG" alt="18 slide">
    </div>


  
</div>

  <a class="carousel-control-prev" href="#carouselExampleFade8" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade8" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>

<h3 id="Medical_Camps" class="h3"> Medical Camps</h3>
<br>
<br>
<br>

<div id="carouselExampleFade9" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="events_carousel" class="carousel-inner">

  <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/One.JPG" alt="one slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Two.JPG" alt="two slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Three.JPG" alt="three slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Four.JPG" alt="4 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Five.JPG" alt="5 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Six.JPG" alt="6 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Seven.JPG" alt="7 slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Eight.JPG" alt="8 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Nine.JPG" alt="9 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Ten.JPG" alt="10 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Eleven.JPG" alt="11 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Twelve.JPG" alt="12 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Thirteen.JPG" alt="13 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Fourteen.JPG" alt="14 slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Medical-Camps/Fifteen.JPG" alt="15 slide">
    </div>

</div>





    <a class="carousel-control-prev" id="med_camps_prev"  href="#carouselExampleFade9" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" id="med_camps_next"  href="#carouselExampleFade9" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="EHV_Training_Programs_for_Teachers" class="h3"> EHV Training Programs for Teachers </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Teachers-Training/teachers-training-day.jpg" alt="Second slide">

<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Parenting_Programs" class="h3"> Parenting Programs </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Parenting-Program/parenting-program.jpg" alt="Second slide">

<br>
<br>
<br>
<br>
<br>
<br>
<h3 id="Amrutha_Kalasha" class="h3"> Distribution of Amrutha Kalasha Ration Kits to Teachers and Staff </h3>
<br>
<br>
<br>

<div id="carouselExampleFade11" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">

  <div class="carousel-item active">
      <img  class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/one.jpeg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/two.jpeg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/three.jpeg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/four.jpeg" alt="Fourth slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/fivee.jpeg" alt="Five slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/six.jpeg" alt="Six slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Amrutha-Kalasha-Kits/seven.jpeg" alt="Seven slide">
    </div>


</div>
    <a class="carousel-control-prev" href="#carouselExampleFade11" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade11" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<br>
<br>
<br>
<br>
<br>
<br>
<h3  class="h3" id="bpt">BPT Vaccine Drive </h3>
<br>
<br>
<br>

<div id="carouselExampleFade12" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/BPT-Vaccine-Drive/One.JPG" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/BPT-Vaccine-Drive/Two.JPG" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/BPT-Vaccine-Drive/Three.JPG" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/BPT-Vaccine-Drive/Four.JPG" alt="four slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/BPT-Vaccine-Drive/Five.JPG" alt="five slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/BPT-Vaccine-Drive/Six.JPG" alt="six slide">
    </div>


</div>

  <a class="carousel-control-prev" href="#carouselExampleFade12" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade12" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<br>
<br>
<br>
<br>
<br>
<br>

<br>
<h3  class="h3" id="kannada_Rajastova"> Kannada Rajastova </h3>
<br>
<br>
<br>
<img class="events" class="d-block w-100" src="Selected-School-Images/Kannada-Rajastova/Kannada-Rajastova.jpg" alt="Second slide">

<br>
<br>
<br>
<br>
<br>
<br>


<br>
<h3  class="h3" id="swach_bharath"> Swacha Bharath </h3>
<br>
<br>
<br>


<div id="swachaBharath" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/One.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Three.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Four.jpg" alt="Four slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Five.jpg" alt="Five slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Six.jpg" alt="Six slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Seven.jpg" alt="Seven slide">
    </div>
  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Eight.jpg" alt="Eight slide">
    </div>
  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/swacha-bharath/Nine.jpg" alt="Nine slide">
    </div>

</div>


  <a class="carousel-control-prev" href="#swachaBharath" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#swachaBharath" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>



<br>
<br>
<br>
<br>
<br>
<br>
<h3  class="h3" id="aksharabhyasa">Aksharabhyasa </h3>
<br>
<br>
<br>

<div id="carouselExampleFade14" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img  class="events_carousel" class="d-block w-100" src="Selected-School-Images/Aksharabhyasa/One.jpg" alt="First slide">
    </div>

    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Aksharabhyasa/Two.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Aksharabhyasa/Three.jpg" alt="Third slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Aksharabhyasa/Four.jpg" alt="Four slide">
    </div>
    <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Aksharabhyasa/Five.jpg" alt="Five slide">
    </div>

  <div class="carousel-item">
      <img class="events_carousel" class="d-block w-100" src="Selected-School-Images/Aksharabhyasa/Six.jpg" alt="Six slide">
    </div>


</div>

  <a class="carousel-control-prev" href="#carouselExampleFade14" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade14" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>




<br>
<br>
<br>
<br>

</center>



<?php include 'footer.php'; ?>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/jquer.js"></script>
<script src="assets/js/popup.js"></script>
<script>
  $(document).ready(function() {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: true,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: false,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: true,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: flase,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<script src="assets/js/tracks.js"></script>
<!--//pop-up-box-->
<script src="assets/js/bs4.js"></script>


