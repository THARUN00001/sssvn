<?php include 'header.php'; ?>

<link href="//fonts.googleapis.com/css?family=Muli:300,300i,400,500,600,700,800,900&display=swap" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,500,700,900&display=swap" rel="stylesheet">
<!-- Template CSS -->
<style>
  .w3l-inner-page-main .breadcrumb-infhny {
    background: url('img/Contact_banner.jpg') no-repeat center;
    background-size: cover;
    background-position-y: 25%;
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
    font-size: 55px;
    color: #fff;
    margin-bottom: 0;
    font-weight: 700;
    text-align: center;

  }

  .hny-title {
    font-weight: bolder;
    color: #1664cd;
    font-size: 50px;
    /* line-height: 70.31; */
    font: "Roboto";
    padding-bottom: 20px;
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

  /* contact */
  .w3l-contact-main a {
    display: inline-block;
  }

  .w3l-contact-main .grid {
    display: grid;
    align-items: center;
    padding-right: 140px;
  }

  .w3l-contact-main .grid-column-2 {
    grid-gap: 20px;
  }

  .w3l-contact-main .column2 a {

    line-height: 25px;
    font-style: normal;
    text-decoration: none;
    transition: 0.3s ease;
    padding-top: 5px;
    font-size: 24px;
    font-family: Roboto;
    color: #1664CD;
    font-weight: 200px;
  }

  .w3l-contact-main h4.header {
    color: #252b33;
    font-size: 24px;
    line-height: 34px;
    font-weight: 700;
    margin: 30px 0 20px 0;
  }

  .w3l-contact-main .column2 a:hover {
    color: #f30067;
    text-decoration: underline;
    transition: 0.3s ease;
  }

  .w3l-contact-main .contact-main p {
    line-height: 26px;
    font-size: 25px;
    margin: 0;
    font-family: 'Roboto', sans-serif;
  }

  .w3l-contact-main .contact-para {
    line-height: 25px;
    font-size: 16px;
    font-style: normal;
    font-weight: normal;
  }

  .w3l-contact-main .column2 {
    margin-top: 20px;
  }

  .w3l-contact-main .contact-info-align {
    display: grid;
    grid-template-columns: auto 1fr;
    grid-gap: 15px;
    margin: 26px 0;
  }

  .w3l-contact-main .icon {
    width: 40px;
    height: 40px;

    line-height: 40px;
    background: #da2945;
    text-align: center;
    border-radius: 50%;
    margin-top: 30px;
    color: white;

  }

  .w3l-contact-main .icon span.fa {
    color: #f30067;
    font-size: 18px;
    text-align: center;
  }

  .w3l-contact-main span.compulsary {
    color: red;
  }

  .w3l-contact-main .map iframe {
    width: 100%;
    height: 100%;
    background: #F9FAFB;
    padding-right: 10px;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
    align-content: left;
    margin-top: 0px;
    margin-left: 0px;
    padding-top: 0px;
    padding-left: 0px;
  }

  .w3l-contact-main .column3 img {
    margin-right: 20px;
  }

  .w3l-contact-main .column3 a {
    color: #252b33;
    font-size: 18px;
    transition: 0.3s;
    margin: 0 8px 0 0;
    color: #252b33;
    width: 36px;
    height: 36px;
    background-color: #F9FAFB;
    display: inline-block;
    border-radius: 50%;
    text-align: center;
  }

  .w3l-contact-main .column3 a span.fa {
    line-height: 36px;
  }

  .w3l-contact-main strong.info {
    color: #1664cd;
    display: block;
    margin-bottom: 10px;
    margin-top: 30px;
    font-size: 25px;
    line-height: 30px;
  }

  .w3l-contact-main .column3 a.facebook:hover {
    color: #3b5998;
  }

  .w3l-contact-main .column3 a.twitter:hover {
    color: #1da1f2;
  }

  .w3l-contact-main .column3 a.linkedin:hover {
    color: #0077b5;
  }

  .w3l-contact-main .column3 a.instagram:hover {
    color: #c13584;
  }

  @media (max-width: 1024px) {
    .w3l-contact-main .grid-column-2 {
      grid-gap: 20px;
    }
  }

  @media (max-width: 992px) {
    .w3l-contact-main .grid-column-2 {
      grid-template-columns: 1fr;
    }

    .w3l-contact-main .map iframe {
      height: 350px;
    }

    .w3l-contact-main .head-main {
      max-width: 100%;
    }

    .w3l-contact-main .contact-main {
      grid-template-columns: 1fr;
    }
  }

  @media screen and (max-width: 480px) {
    .w3l-contact-main .column {
      padding: 0;
    }

    .w3l-contact-main .map iframe {
      height: 250px;
    }
  }

  .w3l-contact-main .main-images a {
    display: inline-block;
  }

  .w3l-contact-main .contact-form {
    background: #F9FAFB;
  }

  .w3l-contact-main button.btn-contact {
    font-size: 16px;
    padding: 16px 45px;
    color: #fff;
    background: #f30067;
    border-color: #f30067;
    display: inline-block;
    font-weight: 700;
    text-align: center;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    transition: .3s ease;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
  }

  .w3l-contact-main button.btn-contact:hover {
    background: #00d1cd;
    border-color: #00d1cd;
    transition: .3s ease;
  }

  .w3l-contact-main label.field-info {
    display: block;
    text-transform: capitalize;
    font-size: 16px;
    font-weight: normal;
    color: #da2945;
    margin-bottom: 10px;
    font-weight: 500;
    font-family: 'Roboto', Sans-serif;
  }

  .w3l-contact-main .contact-input,
  .w3l-contact-main .contact-textarea {
    margin-bottom: 30px;
    background: #fff;
    border: none;
    outline: none;
    width: 100%;
    font-size: 16px;
    color: #252b33;
    -webkit-appearance: none;
    padding: 0px 16px;
    border: 1px solid #dedede;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -o-border-radius: 6px;
    -moz-border-radius: 6px;
    padding: 16px 16px;
  }

  .w3l-contact-main .contact-input:focus,
  .w3l-contact-main .contact-textarea:focus {
    border: 1px solid #f30067;
  }

  .w3l-contact-main .contact-textarea {
    min-height: 170px;
  }

  .w3l-contact-main .main-input {
    display: grid;
    grid-template-columns: 1fr 1fr 1fr;
    grid-gap: 15px;
  }

  .w3l-contact-main .line {
    box-sizing: border-box;
    border: 1px solid #8298AB;
    opacity: 0.35;
  }

  @media all and (max-width: 1400px) {
    .w3l-contact-main .contacts12-main {
      max-width: 100%;
    }
  }

  @media screen and (max-width: 991px) {
    .w3l-contact-main .map {
      margin-top: 40px;
    }
  }

  @media screen and (max-width: 768px) {
    .w3l-contact-main .contact-input1 {
      margin-right: 0px;
      margin-bottom: 30px;
      width: 100%;
    }

    .w3l-contact-main .contact-input2,
    .w3l-contact-main .contact-textarea {
      width: 100%;
    }

    .w3l-contact-main .contact-para {
      max-width: 100%;
    }

    .w3l-contact-main .main-input {
      grid-template-columns: 1fr;
      grid-gap: 0;
    }

    .w3l-contact-main button.btn-contact {
      margin: 0px auto 0;
      width: 100%;
    }
  }

  @media screen and (max-width: 480px) {
    .w3l-contact-main .main-input {
      grid-template-columns: 1fr;
      grid-gap: 0px;
    }

    .w3l-contact-main .contacts-12 .contact-input {
      margin-top: 15px;
    }
  }

  .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #da2945;
    color: #fff;
    line-height: 1;
    padding: 8px 0;
    margin-right: 4px;
    border-radius: 4px;
    text-align: center;
    width: 36px;
    height: 36px;
    transition: 0.3s;
  }



  .column2 .contact-para .office {
    padding-top: 5px;
    font-size: 22px;
    font-family: Roboto;
    color: #1664CD;
    font-weight: 200px;
    line-height: 30px;
  }

  @media only screen and (max-width:378px) {
    .column2 .contact-para .office {
      font-size: 20px;
      font-weight: 200px;

    }

    .w3l-contact-main .column2 a {
      font-size: 18px;
      font-weight: 200px;

    }
  }

  @media only screen and (max-width:292px) {

    .column2 .contact-para .office {
      font-size: 15px;
      font-weight: 200px;

    }

    .w3l-contact-main .column2 a {
      font-size: 15px;
      font-weight: 200px;

    }

    .w3l-contact-main strong.info {
      font-size: 20px;
    }

    .w3l-contact-main .icon {
      width: 30px;
      height: 30px;
    }

    .w3l-contact-main .contact-main p {
      font-size: 20px;
    }
  }

  .main-input .email label {
    text-align: right;
  }

  .main-input .email input {

    margin-left: 85%;
  }

  @media screen and (max-width:770px) {
    .main-input .email input {

      margin-left: 0px;
    }

    .main-input .email label {
      text-align: start;
    }
  }

  .mp {
    margin-left: 0px;
    padding-left: 0px;
  }

  @media screen and (max-width: 1080px) {
        .w3l-inner-page-main h2.hny-title {
            margin-top: 0px;
            font-size: 50px;
            padding-top: 0px;
            text-align: center;
            margin-top: 120px;
            margin-bottom: 240px;
        }

        .w3l-inner-page-main nav.breadcrumb-info {
            padding-top: 20px;
        }

       

        .hny-title {
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
        

  }
</style>

<title>Sri Sathya Sai Vidyaniketan | Contact Us</title>

<section class="w3l-banner-slider-main w3l-inner-page-main" data-aos="fade-right">
  <div class="breadcrumb-infhny">
    <header class="top-headerhny">
      <!--/nav-->
      <nav class="navbar navbar-expand-lg navbar-light fill">
        <div class="container-fluid">
    </header>
    <!-- /breadcrumbs-->
    <div class="container" data-aos="fade-right">
      <nav aria-label="breadcrumb" class="breadcrumb-info">
        <h2 class="hny-title text-center" style="font-weight: 500;">Contact Us</h2>
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

<section class="w3l-contact-main w3l-contact3">
  <div class="contact1-bg py-5" style="margin-left: 0px; margin-right:0px; padding:0%;">
    <div class="container py-lg-5">
      <div class="row contact-main">
        <div class="grid col-lg-6">
          <div class="column" data-aos="fade-right">
            <h3 class="hny-title" >Contact Us</h3>
            <p class="head-main" style="line-height: 34px;">For more info or inquiry about anything please feel free to
              get in touch with us.</p>
          </div>
          <div class="column2" data-aos="fade-right">
            <div class="contact-para contact-info-align">
              <div class="icon">
                <span class="fa fa-map-marker"></span>
              </div>

              <div>
                <strong class="info">Office Address :</strong class="info"><a>
                  <p class="office">Sri Sathya Sai Nagar
                    Bagepalli, Chikkaballapura Dist
                    Karnataka India-561207</p>
                </a>

              </div>
            </div>
            <div class="contact-info-align">
              <div class="icon">
                <span class="fa fa-phone"></span>
              </div>
              <div div class="icon-con-info">
                <strong class="info">Phone :</strong class="info"> <a style="line-height: 28px; font-size:22px"> 70225 37447, 99669 30530, <br> 84949 61431, 94916 19331 </a>
              </div>
            </div>
            <div class="contact-info-align">
              <div class="icon">
                <span class="fa fa-envelope"> </span>
              </div>
              <div>
                <strong class="info">Email Address :</strong> <a href="mailto:example@mail.com">sssvn561207@gmail.com</a>
              </div>
            </div>
          </div>
          <!-- <div class="column3">
						<h4 class="header">Follow us </h4>
						<a href="#facebook" class="facebook" title="facebook"><span class="fa fa-facebook"></span></a>
						<a href="#twitter" class="twitter" title="twitter"><span class="fa fa-twitter"></span></a>
						<a href="#linkedin" class="linkedin" title="linkedin"><span class="fa fa-linkedin"></span></a>
						<a href="#instagram" class="instagram" title="instagram"><span class="fa fa-instagram"></span></a>
					</div> -->

          <!-- <div class="social-links ">
            <h4 class="header" style="color: #1664cd;">Follow us </h4>
              <a style="margin-top:10px;" href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a  style="margin-top:10px;" href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a  style="margin-top:10px;" href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a  style="margin-top:10px;" href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a  style="margin-top:10px;" href="#" class="youtube"><i class="bx bxl-youtube"></i></a>
            </div> -->
        </div>
        <div class="map col-lg-6 " data-aos="fade-right" style="margin-left: 0px; margin-right:0px; padding:0%; float:left;width:100vw;">

          <iframe style="float: left;" class="mp" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3875.133082732094!2d77.78072426435561!3d13.770846990335082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xefd861311d2bac21!2sSri%20Sathya%20Sai%20Vidya%20Niketan!5e0!3m2!1sen!2sin!4v1623611213580!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
      </div>
    </div>
  </div>
  <div class="contact-form py-5" data-aos="fade-right">
    <div class="container py-lg-5">
      <div class="contacts12-main">
        <h3 class="hny-title text-center">Get In Touch</h3>
        <form class="f-hnyv mt-md-5 mt-4" action="https://sendmail.w3layouts.com/submitForm" method="post">
          <div class="main-input">
            <div>
              <label class="field-info">Name <span class="compulsary">*</span></label>
              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name" class="contact-input" />
            </div>
            <div class="email">
              <label class="field-info">Email <span class="compulsary">*</span></label>
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email id" class="contact-input" required />
            </div>
            <!-- <div>
							<label class="field-info">Subject <span class="compulsary">*</span></label>
							<input type="text" name="w3lSubject" id="w3lSubject" placeholder="Subject" class="contact-input" />
						</div> -->
          </div>
          <label class="field-info">Message <span class="compulsary">*</span></label>
          <textarea class="contact-textarea" name="w3lMessage" id="w3lMessage" placeholder="Type your message here" required></textarea>
          <div class="text-right">
            <button class="btn btn-contact">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'footer.php'; ?>

<script>
  // When the user scrolls down 20px from the top of the document, show the button
  window.onscroll = function() {
    scrollFunction()
  };

  function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      document.getElementById("movetop").style.display = "block";
    } else {
      document.getElementById("movetop").style.display = "none";
    }
  }

  // When the user clicks on the button, scroll to the top of the document
  function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
  }
</script>
<!-- //move top -->
<script>
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
</script>
</section>
<!-- //footer -->
</body>

</html>
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function() {
    $('.navbar-toggler').click(function() {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>
</body>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
  AOS.init();
</script>