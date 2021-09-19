<?php include 'header.php'; ?>

<!-- CSS only -->

<style>
    body {
        margin: 0px;
        padding: 0px;
    }

    .container .py-lg-5 {
        margin-left: 0px;
        margin-right: 0px; 
        padding-left: 0px;
        padding-right: 0px;
    }

    .w3l-inner-page-main .breadcrumb-infhny {
        background: url('sportss/2018-19 Taluk level Handball.jpg') no-repeat center;
        background-size: cover;
        -webkit-background-size: cover;
        -o-background-size: cover;
        -ms-background-size: cover;
        -moz-background-size: cover;
        z-index: 1;
        position: relative;
        min-height: 480px;
        background-position-y: 25%;

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

    .heading7 {

        text-align: center;
        color: #1664cd;
    }

    .heading7 h3 {
        font-size: 42px;
        line-height: 48px;
        font-weight: bolder;
        font-family: "Roboto", sans-serif;
        margin-top: 80px;
        margin-bottom: 40px;

    }

    .heading7 .secondd {
        font-size: 35px;
        margin-bottom: 30px;

    }

   

    .aa {
        align-items: center;
    }

    .aa img {
        align-items: center;
        width: 600px;
        height: 1000px;
        display: block;
        margin-left: auto;
        margin-right: auto;
        width: 50%;
        margin-bottom: 30px;
    }

    @media screen and (max-width:778px) {
        .aa img {
            width: 400px;
            height: 600px;

        }
    }

    @media screen and (max-width:415px) {
        .aa img {
            width: 300px;
            height: 500px;
        }

        @media screen and (max-width:300px) {
            .aa img {
                width: 250px;
                height: 400px;
            }
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

        .heading7 h3 {
            font-size: 40px;
            margin-bottom: 10px;

        }

        .heading7 .secondd {
            font-size: 30px;
            margin-bottom: 2px;
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

        .heading1 h3 {
            font-size: 32px;
            margin-bottom: 10px;
        }

        .heading7 .secondd {
            font-size: 25px;
            margin-bottom: 5px;
        }
    }

    @media screen and (max-width: 400px) {
        .heading7 h3 {
            font-size: 25px;
            margin-bottom: 2px;
        }
    }

    .testimonial-item {
        background-size: 100% 100%;
        background-repeat: no-repeat;
        height: 110vh;
        justify-content: center;
        align-items: center;
        padding-top: 7rem;
        
    }
    @media screen and (max-width: 780px) {
        .testimonial-item {
            height: 50vh;

        }

    }
    .sportsgame{
        
    object-fit: cover;
    align-items: center;
    text-align: center;
    height: 600px;
    width: 70% !important;
    object-position: center;
    margin-left:15% ;

    }
    .testimonial-item{
        height: 600px;
    }
    
    .sports{
        object-fit: cover;
    align-items: center;
    text-align: center;
    height: 600px;
    width: 70% !important;
    object-position: center;
    margin-left:15% ;
    }
.sports img{
    height: 900px;
}

    @media screen and (max-width: 725px) {
        .sportsgame{
        height: 60vh;
        width: 100% !important;
        padding-right: 0px;
        margin-right: 0px;
        margin-left:0px ;
    
        }
    .sports{
        height: 60vh;
        width: 100% !important;
        padding-right: 0px;
        margin-right: 0px;
        margin-left:0px ;
    }
        .game1{
            height: 500px;
        }
        .sports img{
    height: 420px;

}

    }
    @media screen and (max-width: 450px) {
        .sportsgame{
        height: 50vh;
        width: 100% !important;
        padding-right: 0px;
        margin-right: 0px;
        margin-left:0px ;
    
        }
    .sports{
        height: 50vh;
        width: 100% !important;
        padding-right: 0px;
        margin-right: 0px;
        margin-left:0px ;
    }
        .testimonial-item{
        height: 420px;
    }
.sports img{
    height: 420px;

}

    }
@media screen and (max-width: 390px) {

    .sports img{
    height: 370px;

}

}
@media screen and (max-width: 300px) {
    .sports{
        height: 40vh;

    }
    .testimonial-item{
        height: 350px;

    }
    .sports{
        height: 40vh;

    }
.sports img{
    height: 260px;

}
}
.sports{
height: 900px;
}  
@media screen and (max-width: 400px) {
    .testimonial-item {
    height: 300px;
}
.sportsgame{
height: 70vw;
}
.sports{
height: 400px;
}  
.carousel-item .item5{
    height: 262px;
    object-fit:cover;
  
}

}
  
</style>
<title>Sri Sathya Sai Vidyaniketan | Achievement</title>


<section class="w3l-banner-slider-main w3l-inner-page-main" data-aos="fade-right">
    <div class="breadcrumb-infhny">
        <header class="top-headerhny">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <div class="container-fluid">
        </header>
        <!-- /breadcrumbs-->
        <div class="container" data-aos="fade-left">
            <nav aria-label="breadcrumb" class="breadcrumb-info">
                <h2 class="hny-title text-center" style="font-weight: 500;">Achievements</h2>
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

<section id="Sports&Games">
    <div>

        <div class="heading7" >
            <h3>Sports & Games</h3>
        </div>
        <div id="carousel" class="carousel slide carousel-fade sportsgame" data-ride="carousel" data-interval="6000">
           
            <div class="carousel-inner" role="listbox">
              
                <div class="carousel-item active">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/2018-19 Taluk level Handball.jpg'); background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Division Level Handball 2019-20.jpg'); background-size:cover; background-position-x:40%;">
                        </div>
                    </a>
                </div>


                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Inter school State Level Handball Under 14 2019-20.jpg'); background-size:cover; background-position-x:40%;">
                        </div>
                    </a>
                </div>

                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('img/achievement.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Inter school State Level Handball under 17.2018-19.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item item55">
                    <a href="#">
                        <div class="testimonial-item item5" style="color:white;width:100%; background: url('sportss/National Level2019-200.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/State Level Athletcs Running 200mt 2018-19.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/State Level Handball Trophy Recived2019-20..jpg'); background-size:cover; background-position-x:40%;">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Taluk Level Handball 2018-19.jpg');background-size:cover; background-position-x:40%;">
                        </div>
                    </a>
                </div>
                    <div class="carousel-item">
                        <a href="#">
                            <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Division Level Handball2019-20.jpg');background-size:cover; background-position-x:40%; ">
                            </div>
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="#">
                            <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Division Level Handball 2019-20..jpg'); background-size:cover; background-position-x:40%;">
                            </div>
                        </a>
                    </div>
                
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Taluk Level 2018-19.jpg'); background-size:cover; background-position-x:40%;">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/District1 Level Athletcs Running 100mts 2018-19.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/Division Level 2019-20..jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/National Level 2018-19.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
                <div class="carousel-item">
                    <a href="#">
                        <div class="testimonial-item" style="color:white;width:100%; background: url('sportss/state level handball 2019-20.jpg');background-size:cover; background-position-x:40%; ">
                        </div>
                    </a>
                </div>
               

                <!-- /.carousel-item -->
            </div>
            <!-- /.carousel-inner -->
            <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
</section>
<br>

<section id="Co-CurricularActivities">
    <div>

        <div class="heading7" data-aos="fade-right">
            <h3>Co-Curricular Activities</h3>

            <h2 class="secondd" style="color: #da2945;;">Bhagavad Gita Competition</h2>
        </div>
        
      <center>
      <img style="height:90%; width:90%;" src="img/co.png" alt="" srcset="">
      </center>
       
</section>
<br>

<section id="Accreditations">
    <div>

        <div class="heading7" data-aos="fade-right" data-aos="fade-right">
            <h3>Accreditations</h3>

            <h2 class="secondd" style="color: #da2945;;">Accreditation Certificate</h2>

        </div>
        <div class=" aa" data-aos="fade-right">
            <img src="collage/Acceriditation.jpg" alt="" srcset="">
        </div>
</section>
<br>
<br>


<?php include 'footer.php'; ?>
<!-- JavaScript Bundle with Popper -->
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>