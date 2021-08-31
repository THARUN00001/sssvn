<?php include 'header.php'; ?>
<style>
    .w3l-inner-page-main .breadcrumb-infhny {
        background: url('img/Admission_banner.jpg') no-repeat center;
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
        padding-top: 105px;
    }

    .w3l-inner-page-main h2.hny-title {
        font-size: 60px;
        color: #fff;
        margin-bottom: 0;
        font-weight: 700;
        text-align: center;

    }

    .hny-title {
        /* font-weight: bolder; */
        font-weight: 0px;
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
    .w3l-inner-page-main h2.hny-title{
        font-size: 55px;
        text-align: center;
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
        font-size: 42px;
        line-height: 48px;
        font-weight: bolder;
        font-family: "Roboto", sans-serif;
        margin-top: 30px;
        margin-bottom: 60px;

    }



    .para1 h3 {
        margin-left: 0px;
        margin-top: 60px;
        font-size: 40px;
        font-weight: 500;
        font-family: "Roboto", sans-serif;
        line-height: 60px;

        margin-bottom: 20px;
        text-indent: 50px;

        color: #DA2945;

    }

    .ul {
     
        font-size: 200px;
        font-weight: bold;
        font-family: "Roboto", sans-serif;
        padding-left: 10rem;

    }
    

    li::marker {
        color: #da2945;
    }

    .ul span {
        color: #1664cd;
        font-weight: bolder;
    }

  .ul li {
        padding-top: 5px;
        padding-bottom: 25px;
        font-size: 22px;     
  }

  h2{
    color: #DA2945;
font-size: 25px;
margin-bottom: 20px;
font-weight: normal;
padding-left: 8rem;
  }
  h4{
    color: #DA2945;
font-size: 22px;
margin-bottom: 20px;
font-weight: normal;
padding-left: 10rem;
  }

  @media  screen and (max-width:778px){
.ul{
    padding-left: 0px;
}
h2{
    padding-left: 0px;
}
h3{
    padding-left: 0px;
}
h4{
    padding-left: 0px;
}
  }



@media  screen and (max-width:770px){
    .para1 h3 {
    font-size: 25px;
    text-align: left;
    margin-left: 0;
    padding-left: 0;
    }
}
    /* online applicants */

    .w3l-content-5 .content-5-main {
        background-color: #E5E5E5;

        z-index: 0;
        position: relative;
        padding: 100px 0;
    }

    .w3l-content-5 .content-5-main::before {
        content: "";
        background-color: #E5E5E5;

        position: absolute;
        top: 0;
        min-height: 100%;
        left: 0;
        right: 0;
        z-index: -1;
    }

    /* .w3l-content-5 .content-5-main h4 {
        font-size: 35px;
        line-height: 45px;
        color: #252b33;
    } */
    .w3l-content-5 .content-5-main h3 {
        text-align: center;
    }

    .w3l-content-5 p {
        text-align: center;
        font-weight: bold;
        /* line-height: 25px; */
        font-size: 26px;
        color: black;
        opacity: 0.9;
    }

    /* dates dadline  */
    .container .dates {
        margin-bottom: 5px;
    }

    .paralast {
        margin-bottom: 80px;
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
            font-size: 45px;
        }
        .heading1 h3{
            font-size: 40px;
        }

        .para1 h3 {
            margin-top: 10px;
            text-align: start;
            align-items: center;
            font-size: 35px;
            
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

        .heading1 h3{
            font-size: 32px;
            margin-bottom: 10px;
        }
        .ul li{
            font-size: 15px;
        }
        h2{
            font-size: 18px;
        }
        .qp{
            font-size: 17px;
        }
        .para1 h3 {
            margin-top: 10px;
            text-align: start;
            align-items: center;
            font-size: 22px;
            margin-left: 0px;
            padding-left: 0px;
            
        }

.w3l-content-5 p{
    font-size: 22px;
}


    /* .w3l-content-5 .content-info-in .content-gd p {
        font-size: 25px;
        text-align: center;
    } */
  }

  @media only screen and (max-width: 990px){
.button-4-pink {
    padding-left: 2px;
}
  }
</style>
<title>Sri Sathya Sai Vidyaniketan | Admission</title>

<section class="w3l-banner-slider-main w3l-inner-page-main" data-aos="fade-right" >
    <div class="breadcrumb-infhny">
        <header class="top-headerhny">
            <!--/nav-->
            <nav class="navbar navbar-expand-lg navbar-light fill">
                <div class="container-fluid">
        </header>
        <!-- /breadcrumbs-->
        <div class="container" data-aos="fade-right" >
            <nav aria-label="breadcrumb" class="breadcrumb-info">
                <h2 class="hny-title text-center" style="text-align: center; font-weight:500;">Admissions</h2>
                <!-- <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Careers</li>
                </ol> -->
            </nav>
        </div>
        <!-- //breadcrumbs-->
    </div>
    <!--//banner-slider-->
</section id="ApplicationGuidelines">

<section >
    <div class="container py-lg-5">
    
        <div class="heading1" data-aos="fade-right" id="Dates&Guidelines">
            <h3>Application Guidelines</h3>
        </div>
        <br>
        <br>
        <div class="para1" data-aos="fade-right" >
            <h3 style="margin-left:0px ;">Dates And Deadlines</h3>
        </div>
        <div class="ul" data-aos="fade-right" style="margin-right: 60px;" >
            <ul>
                <li>Start Date: 15 June 2021.</li>
                <li>End Date: 30 August 2021.</li>

            </ul>
            <!-- <ul>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti illo ipsam enim praesentium. Provident?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti illo ipsam enim praesentium. Provident?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti illo ipsam enim praesentium. Provident?</li>
                <li>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum corrupti illo ipsam enim praesentium. Provident?</li>

            </ul> -->
        </div>
       
        <div class="para1" data-aos="fade-right" >
            <h3>Eligibility Criteria </h3>
            <br>
        </div>
        <div data-aos="fade-right" >
            <h2>Age Limit:</h2>
        </div>
        <div class="ul" data-aos="fade-right" >
            <ul>
                <li>LKG – Minimum Age: 3 years 5 months – Maximum Age: 5 years [Jan 2018 to Jun 2016].</li>
                <li>UKG – Minimum Age: 4 years 5 months – Maximum Age: 6 years [Jan 2017 to Jun 2015].</li>
                <li> 1st Std – Minimum Age: 5 year 5 months – Maximum Age: 7 years [Jan 2016 to Jun 2014].</li>
            </ul>
        </div>
        <div class="para1" data-aos="fade-right" >
            <h3>Documents Required for Admission</h3>
            <br>
        </div>
        <div data-aos="fade-right" >
            <h2>For all Classes: </h2>
        </div>
        <div class="ul" data-aos="fade-right" >
            <ul>
                <li>Student Aadhar – 1 copy.</li>
                <li>Student passport size photos - 3 copies.</li>
                <li> Mother and Father Aadhar – 1 copy each.</li>
                <li> Family photo - 1 copy. </li>
            </ul>
        </div>

        <div data-aos="fade-right" >
            <h2>For LKG, UKG, 1st Std:</h2>
        </div>
        <div class="ul" data-aos="fade-right" >
            <ul>
                <li>Original Birth Certificate.</li>
            </ul>
        </div>

        <div data-aos="fade-right" >
            <h2>2nd Std – 10th Std: </h2>
        </div>
        <div class="ul" data-aos="fade-right" >
            <ul>
                <li>Student Income and Caste Certificate - 1 copy.</li>
                <li>Father / Mother Income and Caste Certificate - 1 copy.</li>
                <li>Student Bank Passbook - 1 copy.</li>
                <li>Previous Class T.C. </li>
            </ul>
        </div>

        <div class="para1" data-aos="fade-right" >
            <h3>Admission Process </h3>
            <br>
        </div>
        <div data-aos="fade-right" >
            <h2>1. Entrance Exams</h2>
        </div>
        <div class="ul"data-aos="fade-right" >
            <ul>
                <li>LKG, UKG ,1st Std: Oral Test Only.</li>
                <li>2nd class onwards: Written Test</li>
            </ul>
        </div>
         <div><h4 class="qp" data-aos="fade-right">Question Paper Pattern:</h4></div>
         <div class="ul" data-aos="fade-right" >
            <ul>
                <li>Short answer questions based on previous class syllabus</li>
                <li>6 subjects each subject 10 marks.</li>
                <li>Total - 60 marks</li>
                <li>Duration - 1 hour.</li>
            </ul>
</div>
        <div data-aos="fade-right" >
            <h2 >2.	Selection </h2>
        </div>
        <div class="ul" data-aos="fade-right" >
            <ul>
                <li>Selection based on performance in oral / written exam.</li>
                <li>If eligible, applicant is admitted to same class else he/she is advised to join one class below.</li>
            </ul>
        </div>

        <div data-aos="fade-right" >
            <h2>3.	Documents Submission & Fee Payment </h2>
        </div>
        <div class="ul" data-aos="fade-right" >
            <ul>
                <li>Submit all the documents listed above along with application.</li>
                <li>Minimum 50% fees to be paid for admission.  </li>
            </ul>
        </div>

        <div data-aos="fade-right" >
            <h2> 4.	Briefing by Principal / Admin </h2>
        </div>
<br>
<br>
        <div data-aos="fade-right" >
            <h2>5. Books Issued to Student </h2>
        </div>



    </div>


</section>

<!-- online applicants  -->

<section class="w3l-content-5" data-aos="fade-right" id="OnlineApplication">
    <!-- /content-6-section -->
    <div class="content-5-main">
        <div class="container">

            <h3 class="hny-title "> Online Application</h3>
        </div>
        <div class="para2">
            <p>To Apply Online Click On The Button Below  </p>
        </div>
        <center>
            <div class="button-4-pink">
                <div class="eff-4-pink"></div>
                <a href="https://admissions.sssvnbagepalli.in/" style="font-weight: bolder; font-size:25px;"> APPLY </a>
            </div>
        </center>


    </div>
</section>

<!-- dates and deadline  -->

<!-- <section>
    <div class="container py-lg-5">
        <div class="heading1 dates">
            <h3>Dates And Deadlines</h3>
        </div>
        <div class="para1 paralast">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam eligendi eveniet maiores sed soluta veniam exercitationem sunt dolor sint aliquam illum repellat iusto, sequi ullam cum quam fugit facilis repellendus.</p>
        </div>
    </div>
</section> -->

<?php include 'footer.php'; ?>