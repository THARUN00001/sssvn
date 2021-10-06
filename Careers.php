<?php include 'header.php'; ?>

<style>
    .w3l-inner-page-main .breadcrumb-infhny {
        background: url('img/carrer.jpeg') no-repeat center;
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

    .heading1 {

        text-align: center;
        color: #1664cd;
    }

    .heading1 h3 {
        font-size: 50px;
        line-height: 48px;
        font-weight: bolder;
        font-family: "Roboto", sans-serif;
        margin-top: 30px;

    }



    .para1 {
        margin-bottom: 10px;
        margin-top: 40px;
        font-size: 20px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;

    }
    .cv{
        color: #da2945;
        padding-bottom: 50px;
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

       

        .hny-title {
            font-size: 50px;
        }
        .heading1 h3 {
            font-size: 40px;
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

        .hny-title {
            font-size: 35px;
        }
        .heading1 h3 {
            font-size: 35px;
        }
    }
</style>

<title>Sri Sathya Sai Vidyaniketan | Careers</title>

<section data-aos="fade-right" class="w3l-banner-slider-main w3l-inner-page-main"  >
    <div class="breadcrumb-infhny">
        <header class="top-headerhny">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <div class="container-fluid">
        </header>
        <!-- /breadcrumbs-->
        <div class="container" data-aos="fade-right" >
            <nav aria-label="breadcrumb" class="breadcrumb-info">
                <h2 class="hny-title text-center" style="font-weight: 500;">Careers</h2>
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

<section >
    <div class="container py-lg-5">
        <div class="heading1 dates"  >
            <h3 data-aos="fade-right">Careers</h3>
        </div>
        <div data-aos="fade-up" class="para1 paralast" style="text-align: center;">
            <p >We dont have any openings/vacancies for now <br> We will notify when required</p>
            <br>
            
            <br>
            <p >You can send your CV to</p>

            <p class="cv" > sssvn561207@gmail.com</p>
        </div>
    </div>
</section>




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

