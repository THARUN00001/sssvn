<?php include 'header.php'; ?>
<style>
    .w3l-inner-page-main .breadcrumb-infhny {
        background: url('img/about_us.jpg') no-repeat center;
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
        padding-top: 105px;
    }

    .w3l-inner-page-main h2.hny-title {
        font-size: 58px;
        color: #fff;
        margin-bottom: 0;
        font-weight: 700;
        font: Roboto;

    }

    .hny-title {
        font-weight: 500;
        color: #1664cd;
        font-size: 51px;
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

       .unit_ssdst .ssd {
            font-size: 35px;
        }

        .hny-title {
            font-size: 45px;
        }

        .content-gd .mission {
            font-size: 45px;
        }
    
.w3l-content-5 .content-info-in .content-gd p {
    font-size: 32px;
}


    }

    @media screen and (max-width: 991px) {
        .w3l-inner-page-main .breadcrumb-infhny {
            min-height: 260px;
        }
    }

    @media screen and (max-width: 767px) {
        .w3l-inner-page-main h2.hny-title {
            font-size: 45px;
        }

        .w3l-inner-page-main nav.breadcrumb-info {
            padding-top: 20px;
        }

        .w3l-inner-page-main .breadcrumb-infhny {
            min-height: 200px;
        }

        .unit_ssdst p{
            align-items: center;
            text-align: start;
            
        }
        .hny-title {
            font-size: 35px;
        }

        .content-gd .mission {
            font-size: 40px;
            text-align: center;
        }
    

    .w3l-content-5 .content-info-in .content-gd p {
        font-size: 25px;
        text-align: center;
    }
  }

  @media screen and (max-width: 300px) {
    .unit_ssdst p{

            font-size: 15px;
  }
  }

    /* our inspiration */
    .w3l-wecome-content-6 .ab-content-6-mian {
        background: #fff;
    }

    .pb-5,
    .py-5 {
        padding-bottom: 3rem !important;
    }

    .pt-5,
    .py-5 {
        padding-top: 3rem !important;
    }

    div {
        display: block;
    }

    .mb-5,
    .my-5 {
        margin-bottom: 3rem !important;
    }

    .col-1,
    .col-2,
    .col-3,
    .col-4,
    .col-5,
    .col-6,
    .col-7,
    .col-8,
    .col-9,
    .col-10,
    .col-11,
    .col-12,
    .col,
    .col-auto,
    .col-sm-1,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm,
    .col-sm-auto,
    .col-md-1,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md,
    .col-md-auto,
    .col-lg-1,
    .col-lg-2,
    .col-lg-3,
    .col-lg-4,
    .col-lg-5,
    .col-lg-6,
    .col-lg-7,
    .col-lg-8,
    .col-lg-9,
    .col-lg-10,
    .col-lg-11,
    .col-lg-12,
    .col-lg,
    .col-lg-auto,
    .col-xl-1,
    .col-xl-2,
    .col-xl-3,
    .col-xl-4,
    .col-xl-5,
    .col-xl-6,
    .col-xl-7,
    .col-xl-8,
    .col-xl-9,
    .col-xl-10,
    .col-xl-11,
    .col-xl-12,
    .col-xl,
    .col-xl-auto {
        position: relative;
        width: 100%;
        padding-right: 15px;
        padding-left: 15px;
    }

    .py-5 .col-lg-6 p {
        /* font-weight: bold; */
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        padding-top: 30px;
        text-align: start;
    }

    .img-fluid {
        width: 480px;
        height: 270px;
        left: 805px;
        top: 787px;
        border-radius: 20px;
        margin-left: 20px;
    }

    /* vission */
    .w3l-specification-6 .grids-inn-ab {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 30px;
        padding-right: 20px;
    }

    .w3l-specification-6 .mission-sec-gd img {
        margin-bottom: 30px;
    }

    .img-fluid {
        max-width: 100%;
        height: auto;
    }

    img {
        vertical-align: middle;
        border-style: none;
    }

    .w3l-specification-6 .sub-mission.one-top {
        margin-top: 50px;
    }

    .mission-gd-right p {
        /* font-weight: bold; */
        font-size: 20px;
        font-family: Roboto;
        font-weight: 400;
        line-height: 28.13px;
        font-family: "Roboto", sans-serif;


    }

    /* our mission  */

    .w3l-content-5 .content-5-main {
        background: url('img/mission.jpg') no-repeat bottom;
        background-size: cover;
        background-position: center;
        z-index: 0;
        position: relative;
        padding: 100px 0;
    }
   
    .w3l-content-5 .content-5-main::before {
        content: "";
        background: rgba(6, 14, 21, 0.55);
        
        position: absolute;
        top: 0;
        min-height: 100%;
        left: 0;
        right: 0;
        z-index: -1;
    }

    .mission {
        color: white;
        font-size: 60px;
        overflow: hidden;
    }

    .w3l-content-5 .content-5-main h4 {
        font-size: 35px;
        line-height: 45px;
        color: #252b33;
    }

    .w3l-content-5 .content-info-in p {
        line-height: 25px;
        font-size: 38px;
        color: #fff;
        opacity: 0.9;
        font-weight: 500px;
    
    }

    .w3l-content-5 .content-info-in {
        align-items: center;
    }

    .two {
        color: white;
    }

    /* ssdt  */
    .h3 {
        font-weight: bolder;
        font-size: 50px;
        font-family: "Roboto";
        text-align: center;
        color: white;
        padding-top: 20px;
    }

    .ssdtp {
        padding: 25px;
        text-align: justify;
        /* font-weight: bold; */
        font-size: 20px;
        font-family: "Roboto", sans-serif;
        color: white;

    }

    .unit_ssdst {
        background: url('img/ssdst1.jpg') no-repeat center;
        background-position: cover;
        background-size: cover;


        align-items: center;
        margin: 40px;

        border-radius: 20px;
        top: 2387px;
    }

    /* trustees  */
    .trustee {
        font-weight: bolder;
        font-size: 50px;
        font-family: "Roboto", sans-serif;
        text-align: center;
        color: #1664cd;
        padding-top: 40px;
    }

    /* .row .trust {
        padding-top: 40px;
        margin-left: 10%;
    }

    .col-lg-4 h2 {
        padding-top: 20px;
        padding-left: 25px;
        color: #da2945;

    }

    .trust-2 {
        padding-top: 30px;
        margin-left: 19%;
    } */


    .trust {
        margin-left: 50px;
        margin-right: 50px;
        padding-top: 50px;
        width: 300px;
        text-align: center;
        align-items: center;
        align-content: center;
        border-radius: 5px;
    }

    .trust1 {
        margin-left: 240px;
    }

    .trust4 {
        margin-left: 400px;
    }

    @media only screen and (max-width: 1390px) {

        /* .trust{

            margin-left: 50px;
            margin-right: 30px;
            width: 250px;
        }

        .trust1{
            margin-left: 50px;
        } */
        .trust {
            /* margin-left: 40px; */
            width: 250px;
        }
    }

    @media only screen and (max-width: 1253px) {
        .trust {
            margin-left: 50px;
            width: 250px;
        }

        .trust1 {
            margin-left: 130px;
        }

        .trust4 {
            margin-left: 250px;
        }
    }

    @media only screen and (max-width: 1253px) {
        .trust {
            margin-left: 0px;
            width: 230px;
        }

        .trust1 {
            margin-left: 100px;
        }

        .trust4 {
            margin-left: 250px;
        }

    }

    @media only screen and (max-width: 958px) {
        .trust {
            margin-left: 0px;
            width: 190px;
        }

        .trust1 {
            margin-left: 80px;
        }

        .trust4 {
            margin-left: 150px;
        }
    }

    @media only screen and (max-width: 800px) {

        .trust {
            margin-left: 0px;
            width: 280px;
        }

        .trust1 {
            margin-left: 0px;
        }

    }
    @media only screen and (max-width: 400px) {
        .trust{
            margin-left: 40px;
        }
       .counsil .coun1{
            margin-left: 50px;
        }
       .counsil .team-circle{
            margin-left: 40px;

        }

.coun2{
    margin-left: 50px;
}
    }






    /* cpunsil */
    .counsil {
        margin-top: 100px;

        font-weight: bolder;
        font-size: 40px;
        font-family: "Roboto", sans-serif;
        text-align: center;
        color: #1664cd;
        padding-top: 20px;
    }

    .gc {
        padding-top: 20px;
        padding-bottom: 100px;
        margin-left: 30px;
    }

    .rounded-circle {
        width: 160px;
        height: 160px;
    }

    @media only screen and (max-width:1200px) {

        .rounded-circle {
            width: 80px;
            height: 80px;
        }

        .trust-2 {
            margin-left: 0%;
        }
    }

    .coun {
        margin-left: 50px;
        margin-right: 50px;
        padding-top: 50px;
        width: 300px;
        padding-bottom: 10px;
        border-radius: 5px;
    }

    .coun4 , coun5 , coun6{
        margin-bottom: 50px;
    }

    .counsil .coun {
        align-items: center;
    }

    .coun1,
    .coun4 {
        margin-left: 200px;
    }

    @media only screen and (max-width:1350px) {

        .coun1,
        .coun4 {
            margin-left: 180px;
        }

        .coun {
            width: 250px;
        }
    }


    @media only screen and (max-width:1180px) {

        .coun1,
        .coun4 {
            margin-left: 120px;
        }

        .coun {
            width: 200px;
        }
    }

    @media only screen and (max-width:970px) {

        .coun1,
        .coun3,
        .coun5 {
            margin-left: 120px;
        }

        .coun4 {
            margin-left: 50px;
        }

        .coun {
            width: 280px;
        }
    }

    @media only screen and (max-width: 958px) {
        .coun {
            margin-left: 0px;
            width: 190px;
        }

        .coun1 {
            margin-left: 80px;
        }

        .coun4 {
            margin-left: 80px;
        }
    }

    @media only screen and (max-width:800px) {

        .coun1,
        .coun3,
        .coun5,
        .coun4 {
            margin-left: 0px;
        }

        .coun {
            margin-left: 0px;
            justify-items: center;
            width: 300px;
        }
    }

    /* edit  */
    .team-circle {
        position: relative;
        text-align: center;
        border: 1px solid #eee;
        background: #fff;
        border-radius: 30px;
        padding: 15px 0px;
        margin: 15px 0px;
        -webkit-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.1);
        -moz-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.1);
        box-shadow: 6px 8px 20px rgba(0, 0, 0, 0.27);
        -webkit-transition-duration: .4s;
        transition-duration: .4s;
    }

    .team-circle:hover {
        -webkit-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
        -moz-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
        box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
    }

    .team-circle-img img {
        border-radius: 50%;
        width: 60%;
        height: 60%;
        margin-top: 20px;
    }

    .team-circle-text h4 {
        color: #6d6e71;
        font-size: 22px;
     
        margin-top: 15px;
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
        padding-top: 20px;
        padding-bottom: 10px;
    }

    .team-circle-text h4 a {
        color: #6d6e71;
        padding-top: 10px;
        font-size: 22px;
        
        margin-top: 15px;
        -webkit-transition-duration: .3s;
        transition-duration: .3s;
    }

    .team-circle-text h4 a:hover {
        color: #71bf45;
    }

    .team-circle-text h5 {
        color: #999;
        font-size: 15px;
        /* font-weight: 500; */
        margin-top: 7px;
    }

    .team-circle-social {
        margin-top: 10px;
    }

    .team-circle-social li {
        display: inline-block;
        margin: 5px 0px 0px 0px;
    }

    .team-circle-social li a i {
        color: #999;
        font-size: 14px;
        padding: 10px;
        -webkit-transition-duration: .4s;
        transition-duration: .4s;
    }

    .team-circle-social li:hover a i {
        color: #71bf45;
    }

    .w3l-content-5 .content-5-main .content-info-in  p{
      line-height: 0.9;
  }

    @media only screen and (max-width: 990px) {
        -inner-page-main h2.hny-title {
            font-size: 45px;
        }


        @media only screen and (max-width: 400px) {
        .trust{
            margin-left: 40px;
        }
       
        .coun{
            margin-left: 40px;
        }
    
    }

    }
    @media only screen and (max-width: 300px) {
        .coun{
            margin-left: 20px;
            padding-left: 0px;
        }
        .trust{
            margin-left: 20px;
            padding-left: 0px;
        }
        .team-circle {
            width: 230px;
        }
    }
</style>

<title>Sri Sathya Sai Vidyaniketan | About Us</title>


<section class="w3l-banner-slider-main w3l-inner-page-main" data-aos="fade-right" id="ussdst">
    <div class="breadcrumb-infhny">
        <header class="top-headerhny">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <div class="container-fluid">
        </header>
        <!-- /breadcrumbs-->
        <div class="container" data-aos="fade-right">
            <nav aria-label="breadcrumb" class="breadcrumb-info">
                <h2 class="hny-title text-center" style="font-weight:500;">About Us</h2>
                <!-- <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Contact</li>
                </ol> -->
            </nav>
        </div>
        <!-- //breadcrumbs-->
    </div>
    <!--//banner-slider-->
</section>

<!-- ssdst  -->

<section class="w3l-content-5 unit_ssdst" data-aos="fade-front" id="SSDST">
    <!-- <div class="content-5-main"> -->
    <div class="container">
        <div>
            <h3 class="h3 ssd"> A Unit of SSDS Trust</h3>
            <p class="ssdtp">"Inspired by Bhagavan Baba's teachings and service activities which broadly fall under 3 categories: Sociocare, Educare and Medicare; Sri Sarva Dharma Samanvaya Trust was established in 1992 by the devotees at Bagepalli.
                <br><br> Sri Sathya Sai Vidyaniketan was established in 2001 as a unit of SSDST focusing on Educare. The school is one among the chosen few education institutions to have been physically established by Baba and enjoyed the fortune of His guidance at every stage. "
            </p>
        </div>
    </div>
</section>

<!-- our inspiration  -->

<section class="w3l-wecome-content-6" data-aos="fade-right" id="OurInspiration">
    <!-- /content-6-section -->
    <div class="ab-content-6-mian py-5">
        <div class="container py-lg-5">
            <div class="welcome-grids row">
                <div class="col-lg-6 mb-lg-0 mb-5">

                    <h3 class="hny-title">
                        Our Inspiration
                    </h3>
                    <p class="my-4">Bhagavan Sri Sathya Sai Baba has <br> not only been an inspiration to us, <br> but was also physically and personally <br> involved in setting up  this institution and <br> guiding us every step of the way.

                    </p>
                    <!-- <p class="mb-4">Excepteur sint occaecat non proident, sunt in culpa quis. Phasellus lacinia id erat eu ullamcorper. Nunc id ipsum fringilla.</p> -->
                    <!-- <div class="button-4-pink">
                            <div class="eff-4-pink"></div>
                            <a href="services.html"> Read More</a>
                        </div> -->
                </div>
                <div class="col-lg-6 welcome-image">
                    <img src="img/scan0006.jpg" class="img-fluid" alt="" />
                </div>

            </div>

        </div>
    </div>
</section>

<!-- vission-->
<section class="w3l-specification-6" data-aos="fade-right" id="OurVision">
    <div class="specification-content py-5">
        <div class="container py-lg-5">
            <div class="mission-grids-info row">
                <div class="mission-gd-left col-lg-7">
                    <div class="grids-inn-ab">
                        <div class="sub-mission one-top">
                            <div class="mission-sec-gd">
                                <img src="img/scan00133.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mission-sec-gd">
                                <img src="ssimg/2002/scan0013.jpg" alt="" class="img-fluid" />
                            </div>

                        </div>
                        <div class="sub-mission">
                            <div class="mission-sec-gd">
                                <img src="ssimg/2001/2001 d.jpg" alt="" class="img-fluid" />
                            </div>
                            <div class="mission-sec-gd">
                                <img src="img/Our Vision 3i.jpg" alt="" class="img-fluid" />
                            </div>

                        </div>
                    </div>
                </div>
                <div class="mission-gd-right col-lg-5 pl-lg-4">

                    <h3 class="hny-title" style="text-align: center;">Our Vision</h3>
                    <p style="text-align: center;">This is not an ordinary vision but a Divine <br> Vision with assurance<br><br>
                        <a style="font-style: oblique; color:#dc3545;"> "Sadbudhi Sathpravarthana <br>
                            Nerpi, Sathprajalanu chesi<br>
                            Sanganiki Arpitham Cheyi<br>
                            Thakinadi Nenu <br>Choosukuntanu"<br><br>

                            "Teach the students<br>
                            good thoughts,<br> good conduct<br>
                            mould them as good citizens and<br>
                            offer them to the society. <br>
                            The Rest I will take Care"<br></a>
                    </p>
                </div>
            </div>
        </div>
</section>

<!-- our mission  -->

<section class="w3l-content-5" data-aos="fade-back" >
    <!-- /content-6-section -->
    <div class="content-5-main">
        <div class="container">
            <div class="content-info-in row">
                <div class="content-gd col-lg-6">
                    <h3 class="hny-title mission" style="font-weight: 500;">

                        Our Mission</h3>
                </div>
                <div class="content-gd col-lg-6 miss">
                    <p>"To Impart Education <br>     <br> To Instil
                        Values<br>    <br> To Ignite Transformation"</p>
                </div>

            </div>

        </div>
    </div>
</section>



<!-- <truste -->
<!-- <section id="trusti">
    <h3 class="trustee" data-aos="fade-right">Trustees</h3>
    <div data-aos="fade-right">
        <div class="col-md-4 col-sm-4 col-lg-4 trust trust1">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">Gopinath G.V.</h4>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 trust trust2">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">Y. Srinivasa Reddy</h4>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 trust trust3">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">Murali Vullaganti</h4>
                
                </div>
            </div>
        </div>
    </div>
    <div data-aos="fade-right">

        <div class="col-md-4 col-sm-4 col-lg-4 trust trust4">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">Ramanjeneyulu</h4>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 trust trust5">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">D.S. Balaji</h4>
                   
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- council -->
<section id="GoverningCounsil">
    <h3 class="counsil" data-aos="fade-right">Governing Council</h3>
    <div data-aos="fade-right">
        <div class="col-md-4 col-sm-4 col-lg-4 coun coun1">
            <div class="team-circle">
                <!-- <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div> -->
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">A. S. Srinivasa Murthy</h4>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 coun coun2">
            <div class="team-circle">
                <!-- <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div> -->
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">Y. Srinivasa Reddy</h4>
                   
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 coun coun3">
            <div class="team-circle">
                <!-- <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div> -->
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;">C. V. Ravindranath Rao</h4>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- <div data-aos="fade-right">

        <div class="col-md-4 col-sm-4 col-lg-4 coun coun4">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;"> C. V. Ravindranath Rao</h4>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 coun coun5">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;"> C. L. Santhosh Kumar</h4>
                    
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4 col-lg-4 coun coun6">
            <div class="team-circle">
                <div class="team-circle-img">
                    <img src="assets/img/team/team-1.jpg" alt="img">
                </div>
                <div class="team-circle-text">
                    <h4 class="light" style="color:#dc3545;"> Vinay Kumar</h4>
                   
                </div>
            </div>
        </div>
    </div> -->
</section> 
<br>
<br>
<br>

<?php include 'footer.php'; ?>

<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>