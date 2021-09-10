		
<?php include 'header.php'; ?>





<style>


/*--------------------
Style 4
----------------------*/
.team-circle{
	height:90%;
	width:80%;
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
.team-circle:hover{
-webkit-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
-moz-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
}


.team-circle-img img{
	margin-top:15px;
border-radius: 50%;
width: 40%;
height: 40%;
}

.team-circle-text_res{
	text-align:left;
  padding: 20px;
}

.team-circle-text_res h4{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.team-circle-text_res h4 a{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.team-circle-text_res h4 a:hover{
color: #71bf45;
}

.team-circle-text_res h5:first-child{
	color: #106eea;

font-size: 15px;
font-weight: 500;
margin-top: 7px;
}
.team-circle-text_res h5:last-child{
	color: #da2945;
font-size: 15px;
font-weight: 500;
margin-top: 7px;
}



.res_t{
	color:#106eea;
	font-size:15px !important;
}

.team-circle-text h4{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.team-circle-text h4 a{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.team-circle-text h4 a:hover{
color: #71bf45;
}

.team-circle-text h5:first-child{
	color: #106eea;

font-size: 15px;
font-weight: 500;
margin-top: 7px;
}
.team-circle-text h5:last-child{
	color: #da2945;
font-size: 15px;
font-weight: 500;
margin-top: 7px;
}

.team-circle-social{
margin-top: 10px;
}

.team-circle-social li{
display: inline-block;
margin: 5px 0px 0px 0px;
}

.team-circle-social li a i{
color: #999;
font-size: 14px;
padding: 10px;
-webkit-transition-duration: .4s;
transition-duration: .4s;
}
.team-circle-social li:hover a i{
color: #71bf45;
}




/*-----------------------------------------
49. Social icons
-------------------------------------------*/
/*--------------------
Style 1
----------------------*/
.social-brand-icons{
padding: 0px;
margin: 0px;
}

.social-brand-icons li{
list-style-type: none;
display: inline-block;
height: 50px;
}

.social-brand-icons li a{
background: #fff;
border: 1px solid #eee;
font-size: 13px;
border-radius: 50%;
color: #6d6e71;
width: 50px;
height: 50px;
padding: 10.5px 13px 10px 13px;
margin-right: 5px;
}

.social-brand-icons li a:hover{
color: #fff;	
background: #71bf45;
border-color: #71bf45; 
}


/*--------------------
Style 2
----------------------*/
.social-brand-icons-small{
padding: 0px;
margin: 0px;
}

.social-brand-icons-small li{
list-style-type: none;
display: inline-block;
}

.social-brand-icons-small li a{
background: #222;
border: 1px solid #222;
font-size: 11px;
border-radius: 50%;
color: #fff;
padding: 6px 8px;
margin-right: 5px;
}

.social-brand-icons-small li a:hover{
color: #fff;	
background: #71bf45;
border-color: #71bf45; 
}




/*-----------------------------------------
50. Errors
-------------------------------------------*/
/*--------------------
Style 1
----------------------*/
.error-404-4 {
width: 100%;
height: auto;
margin: 0 auto !important;
text-align: center !important;
position: relative;
max-width: 1000px;
}

.error-404-4 video {
width: 100%;  
}
/* 
svg {
width: 100%;
position: absolute;
top: 0;
left: 0;
height: 100%;
}

.error-404-4 svg text {
font-weight: 900;
text-transform: uppercase;
font-size: 55px;
}

.error-404-4 svg rect {
fill: #fff;
} */

.error-404-4 svg > rect {
-webkit-mask: url(#mask);
mask: url(#mask);
}   

.error-404-4-text h2{
position: relative;
color: #D3D6D3;
font-size: 100px;
font-weight: 800;
letter-spacing: 3px;
text-transform: uppercase;
text-align: center;
margin-top: -230px;
}

.error-404-4-text h4{
position: relative;
color: #A4A7A4;
font-size: 30px;
font-weight: 600;
letter-spacing: 1px;
text-align: center;
margin-top: -10px;
}

.error-404-4-text p{
position: relative;
color: #949694;
font-size: 17px;
font-weight: 600;
line-height: 160%;
text-align: center;
margin-top: 10px;
}

@media (max-width: 991px) {
.error-404-4-text h2{
margin-top: -180px;
}
}
@media (max-width: 767px) {
.error-404-4-text h2{
margin-top: -100px;
font-size: 50px;
}
.error-404-4-text h4{
font-size: 27px;
margin-top: -5px;
}
}

/*--------------------
Style 2
----------------------*/
.error-box-2{
text-align: center;
padding: 10px;
}

.clip-text {
display: inline-block;
position: relative;
margin: 25px;
padding: 20px 40px;
text-align: center;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}

.clip-text h2{
color: #fff;
font-size: 200px;
font-weight: 800;
line-height: 89%;
}

.clip-text h3{
color: #fff;
font-size: 60px;
font-weight: 800;
text-transform: uppercase;
line-height: 120%; 
}

.error-box-2 h4{
color: #666;
font-size: 20px;
font-weight: 600;
line-height: 140%; 
margin-top: 10px;
}

.error-info-2 a{
color: #fff;
font-size: 15px;
font-weight: 700;
margin-right: 20px;
border: 1.5px solid #000;
padding: 6px 20px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.error-info-2 a:hover{
border: 1.5px solid #3c59b3;
}


.clip-text:before,
.clip-text:after {
position: absolute;
content: '';
}

/* Background */
.clip-text:before {
z-index: -2;
top: -20px;
right: -20px;
bottom: -20px;
left: -20px;
background-image: inherit;
}

/* Text Background (black zone) */
.clip-text:after {
position: absolute;
background: #fff;
z-index: -1;
top: -5px;
right: -5px;
bottom: -5px;
left: -5px;
padding: 50px;
}

@media (max-width: 767px) {
.clip-text h2{
font-size: 100px;
}
.clip-text h3{
font-size: 50px;
}
.error-box-2 h4{
font-size: 17px;
}
}



/*--------------------
Style 3
----------------------*/
.erreor-box-404{
background-size: cover !important;
z-index: 999;
width: 100%;
height: 100%;
background: #fff;
text-align: center;
} 

.error-box-3{
padding: 70px;
}

.error-box-3 h2{
position: relative;
color: #fff;
font-size: 170px;
font-weight: 700;
line-height: 1;
}

@media (max-width: 767px) {
.error-box-3{
padding: 100px 30px;
}

.error-box-3 h2{
font-size: 90px;
}	
}

.error-box-3 h3{
color: #fff;
font-size: 30px;
font-weight: 700;
text-transform: uppercase;
line-height: 1;
margin: 15px 0px;
}

.error-box-3 p{
color: #fff;
font-size: 15px;
font-weight: 600;
margin-top: 10px;
line-height: 150%;
margin-bottom: 20px
}



/*-----------------------------------------
51. Animations
-------------------------------------------*/
.zoom-in-animation{
transition:transform 8s ease-in-out 0s;
animation-duration: 6.5s;
animation-name: shrink;
}

@keyframes shrink {
0% {
background-size: 100% 100%;
}
100% {
background-size: 110% 110%;
}
}





/*-----------------------------------------
52. Footer
-------------------------------------------*/
/*--------------------
Style 1
----------------------*/
.footer-style-1{
position: relative;
background: #121212;
padding: 40px 0px 0px 0px;
}

.footer-style-1 h3{
color: #fff;
font-size: 19px;
font-weight: 500;
margin-bottom: 30px;
margin-top: 30px;
}
.footer-style-1 h3:after{
text-align:center;
content: '';
display: block;
width: 50px;
max-width: 100%;
height: 2px;
background: #71bf45;
margin-top: 10px;
}
.footer-style-1 h3.footer-style-1-quicklinks:after{
margin: 10px auto;
}
.footer-style-1 p{
font-size: 14px;
font-weight: 500;
color: #999;
line-height: 190%;	
margin-bottom: 15px;
}



/*--- Social Links ---*/
.footer-style-1-social-links li{
display: inline-block;
border-radius: 5px;
color: #fff;
margin-right: 50px;		
margin-bottom: 5px;
-webkit-transition-duration: .3s;
transition-duration: .3s;	
}

.footer-style-1-social-links li a{
display: block;
font-size: 15px;
color: #fff;
width: 35px;
height: 35px;	
padding: 11.5px;
padding-top: 6px;
}




/*--- Quick Links ---*/
.footer-style-1-links{
position: relative;
padding: 0px;
margin: 0px;
}

.footer-style-1-links li{
list-style-type: none;
display: block;
padding: 4px 0px;
}

.footer-style-1-links li:first-child{
padding-top: 0px;
}

.footer-style-1-links li a{
color: #fff;
font-size: 14px;
}

.footer-style-1-links li a:hover{
color: #71bf45;
}


/*--- Latest News ---*/
.footer-style-1-latest-news{
position: relative;
padding: 0px;
margin: 0px;
}
.footer-style-1-latest-news li{
list-style-type: none;
display: block;
padding: 10px 0px;
border-bottom: 1px solid rgba(255, 255, 255, .1);
}

.footer-style-1-latest-news li:first-child{
padding-top: 0px;
}

.footer-style-1-latest-news li span{
display: block;
color: #fff;
font-size: 14px;	
opacity: .5;
}
.footer-style-1-latest-news li a{
color: #fff;
font-size: 14px;	
}
.footer-style-1-latest-news li a:hover{
color: #71bf45;
}


/*--- Contact Info ---*/
.footer-style-1-contact-info{
position: relative;
padding: 0px;
margin: 0px;
}
.footer-style-1-contact-info li{
list-style-type: none;
display: block;
padding: 10px 0px;
}

.footer-style-1-contact-info li i{
color: #fff;
font-size: 14px;
margin-right: 5px; 	
}

.footer-style-1-contact-info li span{
color: #fff;
opacity: .7;
font-size: 14px;	
}


/*--- Footer Bar ---*/
.footer-style-1-bar{
position: relative;
background: #222;
padding: 20px 0px;
margin-top: 60px;
}

.footer-style-1-bar h5{
color: #fff;
font-size: 13px;
font-weight: 600;
margin-top: 5px;
}

@media (max-width: 767px) {
.footer-style-1-bar h5{
text-align: center;
margin-bottom: 15px;
}
}

.footer-style-1-bar-links{
text-align: right;
}
@media (max-width: 767px) {
.footer-style-1-bar-links{
text-align: center;
}
}



.footer-style-1-bar{
position: relative;
}	

.footer-style-1-bar li{
list-style-type: none;
display: inline-block;
margin-left: 12px;
}

.footer-style-1-bar li a{
color: #fff;
font-size: 13px;	
}

.footer-style-1-bar li a:hover{
color: #71bf45;
}



/*--------------------
Style 1 Light
----------------------*/
.footer-style-1-light{
position: relative;
background: #fff;
padding: 40px 0px 0px 0px;
}

.footer-style-1-light h3{
color: #6d6e71;
font-size: 19px;
font-weight: 500;
margin-bottom: 30px;
margin-top: 30px;
}
.footer-style-1-light h3:after{
content: '';
display: block;
width: 50px;
max-width: 100%;
height: 2px;
background: #71bf45;
margin-top: 10px;
}

.footer-style-1-light p{
font-size: 13px;
font-weight: 600;
color: #666;
line-height: 190%;	
margin-bottom: 15px;
}



/*--- Social Links ---*/
.footer-style-1-light .footer-style-1-social-links li{
display: inline-block;
background: #fafafa;
border-radius: 5px;
color: #6d6e71;
margin-right: 10px;		
margin-bottom: 5px;
-webkit-transition-duration: .3s;
transition-duration: .3s;	
}

.footer-style-1-light .footer-style-1-social-links li a{
display: block;
font-size: 15px;
color: #6d6e71;
width: 35px;
height: 35px;	
padding: 11.5px;
padding-top: 6px;
}

.footer-style-1-social-links li a i:hover{
color: #71bf45;
}



/*--- Quick Links ---*/
.footer-style-1-light .footer-style-1-links{
position: relative;
padding: 0px;
margin: 0px;
}

.footer-style-1-light .footer-style-1-links li{
list-style-type: none;
display: block;
padding: 4px 0px;
}

.footer-style-1-light .footer-style-1-links li:first-child{
padding-top: 0px;
}

.footer-style-1-light .footer-style-1-links li a{
color: #6d6e71;
font-weight: 600;
font-size: 14px;
}

.footer-style-1-light .footer-style-1-links li a:hover{
color: #71bf45;
}


/*--- Latest News ---*/
.footer-style-1-light .footer-style-1-latest-news{
position: relative;
padding: 0px;
margin: 0px;
}
.footer-style-1-light .footer-style-1-latest-news li{
list-style-type: none;
display: block;
padding: 10px 0px;
border-bottom: 1px solid rgba(0, 0, 0, .1);
}

.footer-style-1-light .footer-style-1-latest-news li:first-child{
padding-top: 0px;
}

.footer-style-1-light .footer-style-1-latest-news li span{
display: block;
color: #777;
font-size: 14px;	
opacity: .5;
font-weight: 600;
}
.footer-style-1-light .footer-style-1-latest-news li a{
color: #6d6e71;
font-size: 14px;	
font-weight: 600;
}
.footer-style-1-light .footer-style-1-latest-news li a:hover{
color: #71bf45;
}


/*--- Contact Info ---*/
.footer-style-1-light .footer-style-1-contact-info{
position: relative;
padding: 0px;
margin: 0px;
}
.footer-style-1-light .footer-style-1-contact-info li{
list-style-type: none;
display: block;
font-weight: 600;
padding: 10px 0px;
}

.footer-style-1-light .footer-style-1-contact-info li i{
color: #6d6e71;
font-size: 14px;
margin-right: 5px; 	
}

.footer-style-1-light .footer-style-1-contact-info li span{
color: #6d6e71;
opacity: .7;
font-size: 14px;	
}


/*--- Footer Bar ---*/
.footer-style-1-light .footer-style-1-bar{
position: relative;
background: #f2f2f2;
padding: 20px 0px;
margin-top: 60px;
}

.footer-style-1-light .footer-style-1-bar h5{
color: #6d6e71;
font-size: 13px;
font-weight: 600;
margin-top: 5px;
}

@media (max-width: 767px) {
.footer-style-1-light .footer-style-1-bar h5{
text-align: center;
margin-bottom: 15px;
}
}

.footer-style-1-light .footer-style-1-bar-links{
text-align: right;
}
@media (max-width: 767px) {
.footer-style-1-light .footer-style-1-bar-links{
text-align: center;
}
}



.footer-style-1-light .footer-style-1-bar{
position: relative;
}	

.footer-style-1-light .footer-style-1-bar li{
list-style-type: none;
display: inline-block;
margin-left: 12px;
}

.footer-style-1-light .footer-style-1-bar li a{
color: #6d6e71;
font-weight: 600;
font-size: 13px;	
}

.footer-style-1-light .footer-style-1-bar li a:hover{
color: #71bf45;
}





/*--------------------
Style 2
----------------------*/
.footer-style-2{
position: relative;
background: #fff;
box-shadow: 0 0 65px rgba(0,0,0,.04);	
padding: 60px 0px;
}

.footer-style-2 p{
font-size: 14px;
font-weight: 600;
margin: 15px 0px;
}




/*--------------------
Style 3
----------------------*/
.footer-style-3{
position: relative;
background: #121212;
padding: 30px 0px 0px 0px;
}

.footer-style-3 h3{
color: #fff;
font-size: 18px;
font-weight: 600;
margin-bottom: 30px;
margin-top: 30px;
}
.footer-style-3 h3:after{
content: '';
display: block;
width: 50px;
max-width: 100%;
height: 2px;
background: #71bf45;
margin-top: 10px;
}

.footer-style-3 p{
font-size: 13px;
font-weight: 600;
color: #999;
line-height: 170%;	
margin-bottom: 15px;
}



/*--- Social Links ---*/
.footer-style-3-social-links li{
display: inline-block;
background: transparent;
border-radius: 50%;
color: #fff;
margin-right: 0px;		
margin: 3px 3px;
-webkit-transition-duration: .3s;
transition-duration: .3s;	
}

.footer-style-3-social-links li a{
display: block;
font-size: 12px;
color: #fff;
width: 35px;
height: 35px;	
padding: 11.5px;
padding-top: 8px;
}

.footer-style-3-social-links li:hover{
background: #71bf45;
}


/*--- Quick Links ---*/
.footer-style-3-links{
position: relative;
padding: 0px;
margin: 0px;
}

.footer-style-3-links li{
list-style-type: none;
display: block;
padding: 4px 0px;
}

.footer-style-3-links li:first-child{
padding-top: 0px;
}

.footer-style-3-links li a{
color: #fff;
font-size: 14px;
}

.footer-style-3-links li a:hover{
color: #71bf45;
}


/*--- Latest News ---*/
.footer-style-3-latest-news{
position: relative;
padding: 0px;
margin: 0px;
}
.footer-style-3-latest-news li{
list-style-type: none;
display: block;
padding: 10px 0px;
border-bottom: 1px solid rgba(255, 255, 255, .1);
}

.footer-style-3-latest-news li:first-child{
padding-top: 0px;
}

.footer-style-3-latest-news li span{
display: block;
color: #fff;
font-size: 14px;	
opacity: .5;
}
.footer-style-3-latest-news li a{
color: #fff;
font-size: 14px;	
}
.footer-style-3-latest-news li a:hover{
color: #71bf45;
}


/*--- Contact Info ---*/
.footer-style-3-contact-info{
position: relative;
padding: 0px;
margin: 0px;
}
.footer-style-3-contact-info li{
list-style-type: none;
display: block;
padding: 10px 0px;
}

.footer-style-3-contact-info li i{
color: #fff;
font-size: 14px;
margin-right: 5px; 	
}

.footer-style-3-contact-info li span{
color: #fff;
opacity: .7;
font-size: 14px;	
}


/*--- Footer Bar ---*/
.footer-style-3-bar{
position: relative;
background: rgba(0, 0, 0, .2);
padding: 15px 0px;
margin-top: 60px;
}

.footer-style-3-bar h5{
color: #fff;
font-size: 13px;
font-weight: 600;
margin-top: 5px;
}

@media (max-width: 767px) {
.footer-style-3-bar h5{
text-align: center;
margin-bottom: 15px;
}
}

.footer-style-3-bar-links{
text-align: right;
}
@media (max-width: 767px) {
.footer-style-3-bar-links{
text-align: center;
}
}



/*--------------------
Style 4
----------------------*/
.footer-style-4{
position: relative;
background: #111;
padding: 60px 0px 0px 0px;
}

.footer-style-4 h3{
color: #fff;
font-size: 15px;
font-weight: 700;
text-transform: uppercase;
margin-bottom: 30px;
margin-top: 10px;
}
@media (max-width: 991px) {
.footer-style-4 h3{
margin-top: 45px;
}
}

/*--- Quick Links ---*/
.footer-style-4-qick-links{
position: relative;
padding: 0px;
margin: 0px;
}

.footer-style-4-qick-links li{
list-style-type: none;
display: block;
padding: 4px 0px;
}

.footer-style-4-qick-links li:first-child{
padding-top: 0px;
}

.footer-style-4-qick-links li a{
color: #999;
font-size: 14px;
font-weight: 600;
}

.footer-style-4-qick-links li a:hover{
color: #fff;
}


/*--- Contact List ---*/
.footer-4-contact-list{
padding: 0px;
margin: 0px;
}

.footer-4-contact-list li{
color: #999;
font-size: 14px;
font-weight: 600;	
list-style-type: none;
display: block;
padding: 8px 0px;
}

.footer-4-contact-list li span{
color: #fff;
}

.footer-4-contact-list li:first-child{
padding-top: 0px;
}



/*--- Bottom Bar ---*/
.footer-4-bottom-bar{
background: transparent;
border-top: 1px solid #222;
padding: 30px 0px;
margin-top: 50px;
}

.footer-4-bottom-bar p{
color: #999;
font-size: 13px;
font-weight: 600;	
}



/*--- Footer Contact Form ---*/
.footer-contact-form input, .footer-contact-form textarea, .footer-contact-form select{
display: block;
border-radius: 5px;
border: none;
outline: 0;
background: #222;
font-size: 12px;
font-weight: 600;
width: 100%;
color: #fff;
margin-bottom: 17px;
padding: 10px 16px;
-webkit-transition: all 0.3s ease;
-moz-transition: all 0.3s ease;
-o-transition: all 0.3s ease;
}

.footer-contact-form input:focus, .footer-contact-form textarea:focus, .footer-contact-form select:focus{
background: #222;
}

.footer-contact-form textarea{
min-height: 70px;
}

.footer-contact-form button{
margin-top: 0px;
}




/*-----------------------------------------
53. Color Switcher
-------------------------------------------*/
#style-switcher {
left: -220px;
position: fixed;
top: 250px;
width: 220px;
z-index: 9999;    
background: #fff;
border-radius: 0 0 3px;
box-shadow: 0px 5px 15px 0 rgba(0, 0, 0, 0.1);
-webkit-transition-duration: .7s;
transition-duration: .7s;      
}

#style-switcher div {
padding: 5px 10px;
}

#style-switcher h2 {
color: #6d6e71;
font-size: 15px;
font-weight: 600;
margin-bottom: 0;
margin-right: 0;
margin-top: 0;
padding: 15px 0px 7px 0px;
text-align: center;
}

#style-switcher.opened{
left: 0px;
}

#style-switcher h2 a {
background: #eee;
border-radius: 0px 3px 3px 0px;
display: block;
height: 40px;
position: absolute;
right: -40px;
top: 0;
width: 40px;
}

#style-switcher h2 a i {
color: #111;
font-size: 17px;
left: 11px;
position: absolute;
top: 11px;
}

.colors {
padding-left: 7px;
}

.colors {
list-style: none;
margin: 0px 0px 10px 0px;
overflow: hidden;
}

.colors li {
float: left;
}

.colors li a {
cursor: pointer;
display: block;
height: 30px;
margin: 7px 9px;
width: 30px;
border-radius: 30px;
}

.style1 {
background: #71bf45; 
}

.style2 {
background: #2b4fbd; 
}

.style3 {
background: #2ebf7e;  
}

.style4 {
background: #29d9c2;  
}

.style5 {
background: #73a730;  
}

.style6 {
background: #d01b28;  
}

.style7 {
background: #e44377;  
}

.style8 {
background: #efc008;  
}





/*-----------------------------------------
10. Process Steps (icon Boxes)
-------------------------------------------*/
/*--------------------
Sizes XS, SM, MD
----------------------*/
.process-step-xs{
	position: relative;
	margin: 15px 0px;
}

.process-step-xs .process-step-icon i{
    color: #2387ea;	
    font-size: 47px;
}	

.process-step-xs h3{
	position: relative;
	font-size: 14px;
	font-weight: 600;
	color: #222;
	margin: 10px 0px;	
}

.process-step-xs p{
	position: relative;
	font-size: 14px;
	font-weight: 600;
	color: #999;
	margin-top: 10px;	
}


.process-steps-xs{
	position: relative;
	padding: 0px;
	margin: 0px;
}


@media (max-width: 991px) {
	.process-steps-xs li:first-child{
		margin-left: 15px;
	}	
}
@media (max-width: 767px) {
	.process-steps-xs li:first-child{
		margin-left: 0px;
	}	
}

.process-steps-xs li{
    position: relative;
    float: left;	
	list-style-type: none;
	display: inline-block;
	padding: 0px 35px;
}

.process-steps-xs .left-holder li:first-child{
	padding-left: 0px;
}
@media (max-width: 991px) {
	.process-steps-xs .left-holder li:first-child{
		padding-left: 35px;
	}
}
@media (max-width: 767px) {
	.process-steps-xs .left-holder li:first-child{
		padding-left: 35px;
	}	
}

.process-steps-xs li:after{
    content: "";
    display: block;
    width: 50%;
    height: 1px;
    border-bottom: 2px dotted rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 2px;
    border-radius: 2px;
    position: absolute;
    right: -20%;
    top: 40px;
    text-align: center;
}

.process-steps-xs li:last-child:after{
	display: none;
}


@media (max-width: 991px) {
	.process-steps-xs li{
	    position: relative;
	    float: left;	
		list-style-type: none;
		display: inline-block;
		margin: 0px 15px;
	}
	.process-steps-xs li:after{
	    display: none;
	}
}

@media (max-width: 767px) {
	.process-steps-xs li{
	    position: relative;
	    float: left;	
		list-style-type: none;
		display: inline-block;
		margin: 15px 0px;
	}
	.process-steps-xs li:after{
	    display: none;
	}
}



/*---SM Size---*/
.process-step-sm{
	position: relative;
	margin: 15px 0px;
}

.process-step-sm .process-step-icon i{
    color: #2387ea;	
    font-size: 50px;
}	

.process-step-sm h3{
	position: relative;
    color: #222;
    font-size: 17px;
    font-weight: 600;
	margin: 10px 0px;	
}
.process-step-sm h3 a{
	position: relative;
    color: #222;
    font-size: 17px;
    font-weight: 600;
	margin: 10px 0px;	
}
.process-step-sm h3 a:hover{
    color: #2387ea;
}

.process-step-sm p{
	position: relative;
    color: #888;
    font-size: 14px;
    font-weight: 500;
    line-height: 1.8;
    margin-top: 12px;
}


.process-steps-sm{
	position: relative;
	padding: 0px;
	margin: 0px;
}



.process-steps-sm li{
    position: relative;
    float: left;	
	list-style-type: none;
	display: inline-block;
	padding: 0px 30px;
}

.process-steps-sm .left-holder li:first-child{
	padding-left: 0px;
}


.process-steps-sm li:after{
    content: "";
    display: block;
    width: 50%;
    height: 1px;
    border-bottom: 2px dotted rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 2px;
    border-radius: 2px;
    position: absolute;
    right: -20%;
    top: 40px;
    text-align: center;
}

.process-steps-sm li:last-child:after{
	display: none;
}



@media (max-width: 767px) {
	.process-steps-sm li{
	    position: relative;
	    float: left;	
		list-style-type: none;
		width: 100%;
		display: inline-block;
		margin: 15px 0px;
	}
	.process-steps-sm li:after{
	    display: none;
	}
}



/*---MD Size---*/
.process-step-md{
	position: relative;
	margin: 15px 0px;
}

.process-step-md .process-step-icon i{
    color: #2387ea;	
    font-size: 70px;
}	

.process-step-md h3{
	position: relative;
	font-size: 19px;
	font-weight: 600;
	color: #222;
	margin: 10px 0px;	
}

.process-step-md p{
	position: relative;
	font-size: 14px;
	font-weight: 600;
	color: #999;
	margin-top: 10px;	
}


.process-steps-md{
	position: relative;
	padding: 0px;
	margin: 0px;
}


@media (max-width: 991px) {
	.process-steps-md li:first-child{
		margin-left: 15px;
	}	
}
@media (max-width: 767px) {
	.process-steps-md li:first-child{
		margin-left: 0px;
	}	
}

.process-steps-md li{
    position: relative;
    float: left;	
	list-style-type: none;
	display: inline-block;
	padding: 0px 35px;
}

.process-steps-md .left-holder li:first-child{
	padding-left: 0px;
}
@media (max-width: 991px) {
	.process-steps-md .left-holder li:first-child{
		padding-left: 35px;
	}
}
@media (max-width: 767px) {
	.process-steps-md .left-holder li:first-child{
		padding-left: 35px;
	}	
}

.process-steps-md li:after{
    content: "";
    display: block;
    width: 50%;
    height: 1px;
    border-bottom: 2px dotted rgba(0, 0, 0, 0.1);
    -webkit-border-radius: 2px;
    border-radius: 2px;
    position: absolute;
    right: -20%;
    top: 40px;
    text-align: center;
}

.process-steps-md li:last-child:after{
	display: none;
}


@media (max-width: 991px) {
	.process-steps-md li{
	    position: relative;
	    float: left;	
		list-style-type: none;
		width: 40%;
		display: inline-block;
		margin: 0px 15px;
	}
	.process-steps-md li:after{
	    display: none;
	}
}

@media (max-width: 767px) {
	.process-steps-md li{
	    position: relative;
	    float: left;	
		list-style-type: none;
		width: 100%;
		display: inline-block;
		margin: 15px 0px;
	}
	.process-steps-md li:after{
	    display: none;
	}
}


/*--- Process Step Background ---*/
.process-steps-background{
	position: relative;
}


/*--- SM Backgorund ---*/
.process-steps-background .process-step-sm i{
    background: #f9f9f9;
    border-radius: 50%;
    font-size: 50px;
    color: #2387ea;
    padding: 40px;
    -webkit-transition: all 0.3s ease;
    -moz-transition: all 0.3s ease;
    -o-transition: all 0.3s ease;	
}

.process-steps-background .process-step-sm:hover i{
	background: #2387ea;
	color: #fff;
}

.process-steps-background .process-step-sm h3{
    margin-top: 55px;
}

.process-steps-background li:after{
    content: "";
    display: block;
    width: 20%;
    height: 3px;
    border-bottom: 4px solid rgba(0, 0, 0, 0.08);
    -webkit-border-radius: 2px;
    border-radius: 2px;
    position: absolute;
    right: -10%;
    top: 40px;
    text-align: center;
}

.process-steps-background li:last-child:after{
	display: none;
}

@media (max-width: 800px) {
	.process-steps-background li:after{
	    display: none;
	}
}



table, th, td{
	width:50%;
	font-size:130%;
	font-weight:600;
	padding: 8px;
}


@media (max-width: 991px) {
	table, th, td{
	width:50%;
	font-size:110%;
	font-weight:600;
	padding: 8px;
}
}

.t{
	

  border-collapse: collapse;
}

.top{
	color:#da2945;
}

.data{
 text-align:center;
}

.left{
	text-align:left;
	color:#1664cd;
}

    
button.accordion{
	font-size:18px !important;
	text-align:center;
	transition: 1s;
}

.accordion {
	border-radius:20px;
  background-color: white;
  color: #da2945;
  cursor: pointer;
 
  padding: 10px;
  width: 70%;
  text-align: left;
  border-width: 0.1px;
  border-color: grey;
  border-radius:5px;
  margin:2.8px;
  
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

  padding: 20px;
  width: 70%;

background: rgba(203, 203, 203, 0.43);

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

#arrow{
	position: absolute;
   right: 18%;
	font-size:15px;

	width:10px;
	height:10px;
 color:rgba(0, 0, 0, 1);
 font-weight: 1000 !important;
}

h1{
font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 51px;
line-height: 113.19%;
/* or 58px */

text-align: center;

color: #1664CD;
}

h4{
font-family: Roboto;
font-style: normal;
font-weight: bold;
font-size: 51px;
line-height: 113.19%;
/* or 58px */

text-align: center;

color: #1664CD;
}



.row{ 
display: flex;
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    margin-right: -15px;
    margin-left: -15px;
    justify-content: space-between;
}


figcaption{
	text-align:left !important;
	height:100% !important;
	width:100% !important;
	background-color:white !important;
	color:black !important;
}

	.imghvr-fade{
	width:100%;
	position: relative;

	padding:15px;
        text-align: center;
        border: 1px solid #eee;
        background: #fff;
        border-radius: 30px;
  
        -webkit-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.1);
        -moz-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.1);
        box-shadow: 6px 8px 20px rgba(0, 0, 0, 0.27);
        -webkit-transition-duration: .4s;
        transition-duration: .4s;
}
.imghvr-fade:hover{
-webkit-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
-moz-box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
box-shadow: 0px 10px 30px 0px rgba(50, 50, 50, 0.2);
}


.imghvr-fade img{
	margin-top:15px;
border-radius: 50%;
width: 40%;
height: 40%;
}



.imghvr-fade h4{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.imghvr-fade h4 a{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.imghvr-fade h4 a:hover{
color: #71bf45;
}

.imghvr-fade h5:first-child{
	color: #106eea;

font-size: 15px;
font-weight: 500;
margin-top: 7px;
}
.imghvr-fade h5:last-child{
	color: #da2945;
font-size: 15px;
font-weight: 500;
margin-top: 7px;
}


.res_col{
color:#106eea !important;
	font-size:12px !important;
}

.res_t{
	color:#106eea !important;
	font-size:15px !important;	
}

.term{
	color:#da2945 !important;
}

.imghvr-fade h4{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.imghvr-fade h4 a{
color: #6d6e71;
font-size: 17px;
font-weight: 600;
margin-top: 15px;
-webkit-transition-duration: .3s;
transition-duration: .3s;
}
.imghvr-fade h4 a:hover{
color: #71bf45;
}

.imghvr-fade h5:first-child{
	color: #106eea;

font-size: 15px;
font-weight: 500;
margin-top: 7px;
}
.imghvr-fade h5:last-child{
	color: #da2945;
font-size: 15px;
font-weight: 500;
margin-top: 7px;
}


.imghvr-fade li{
display: inline-block;
margin: 5px 0px 0px 0px;
}

.imghvr-fade li a i{
color: #999;
font-size: 14px;
padding: 10px;
-webkit-transition-duration: .4s;
transition-duration: .4s;
}
.imghvr-fade li:hover a i{
color: #71bf45;
}





</style>





<div data-aos="fade-right" style="background:  url(img/SSLC-TOOPERS-PHOTOS/banner.JPEG) ;width: 100%;height:480px;background-position-y:40% ;background-size:cover ;background-repeat: no-repeat; padding-top: 170px;color:white;"  class="heading" >
<br>
<br>
<br>
<center>
<h2 data-aos="fade-right" style="font-size:45px;">
Academics
</h2>
<br>

</center>

</div>


<br>
<br><br>
<br>
<br>

<br>
<br>
<br>



                                        <!-- RESULTS -->
										<center> 	

	<div  class="section-heading center-holder" id="Result">

			<h1  >Results</h1>	
			
		
</div>

	
	<div  class="section-heading center-holder">
	
			<br>
			<br>	

			<button class="accordion active"  >  <b>Results 2020 - 21</b>       </button>
<div class="panel" style="display:block;">

<table style="width:70%; text-align:center;" >
  <tr >

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td> 
		<td class="top">
			Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  24
		  </td>
		  <td>
			 100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			 19
		  </td>
		  <td>
			  79.17%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  2
		  </td>
		  <td>
			  8.33%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  Second Class

		  </td>
		  <td>
			  2
		  </td>
		  <td>
			  8.33%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  Third Class

		  </td>
		  <td>
			  1
		  </td>
		  <td>
			  4.17%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr >
		  <td>
			
		  </td>
		  <td style="border-top: 1px solid black;" class="top">
		  Marks (625)
		  </td>
		  <td style="border-top: 1px solid black;" class="top">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >613</td>	
<td class="t data" >98.08%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >363</td>	
<td class="t data"  >58.08%</td>	
</tr>




  </table>

  <br>




</div>



<button class="accordion "  >  <b>Results 2019 - 20</b>       </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr >

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td> 
		<td class="top">
			Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  26
		  </td>
		  <td>
			 100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			 9
		  </td>
		  <td>
			  35%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  17
		  </td>
		  <td>
			  65%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr >
		  <td>
			
		  </td>
		  <td style="border-top: 1px solid black;" class="top">
		  Marks (625)
		  </td>
		  <td style="border-top: 1px solid black;" class="top">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >616</td>	
<td class="t data" >98.56%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >440</td>	
<td class="t data"  >70.40%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2018 - 19</b>   </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
			Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  23
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  10
		  </td>
		  <td>
			  43%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  13
		  </td>
		  <td>
			  57%
		  </td>
	  </tr>
	  
	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td style="border-top: 1px solid black;" class="top">
		  Marks (625)
		  </td>
		  <td style="border-top: 1px solid black;" class="top">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >606</td>	
<td class="t data" >96.96%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >401</td>	
<td class="t data"  >64.16%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2017 - 18</b>   </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Appeared Students
		  </td>
		  <td>
			  25
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  15
		  </td>
		  <td>
			  60%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  10
		  </td>
		  <td>
			  40%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >600</td>	
<td class="t data" >96%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >346</td>	
<td class="t data">55.36%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2016 - 17</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  25
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  15
		  </td>
		  <td>
			  60%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  10
		  </td>
		  <td>
			  40%
		  </td>
	  </tr>
	  
	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >600</td>	
<td class="t data" >96%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >397</td>	
<td class="t data"  >63.52%</td>	
</tr>




  </table>

  <br>




</div>






<button class="accordion " style="font-size:13px;   ">  <b>Results 2015 - 16</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
			Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  17
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  15
		  </td>
		  <td>
			  88%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  2
		  </td>
		  <td>
			  12%
		  </td>
	  </tr>
	  
	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >605</td>	
<td class="t data" >96.80</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >433</td>	
<td class="t data"  >70.88%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2014 - 15</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  19
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  11
		  </td>
		  <td>
			  58%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  8
		  </td>
		  <td>
			  42%
		  </td>
	  </tr>
	  
	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >603</td>	
<td class="t data" >96.48%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >406</td>	
<td class="t data"  >64.96%</td>	
</tr>




  </table>

  <br>




</div>














<button class="accordion " style="font-size:13px;   ">  <b>Results 2013 - 14</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
			Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  28
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  14
		  </td>
		  <td>
			  50%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  14
		  </td>
		  <td>
			  50%
		  </td>
	  </tr>
	  
	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >598</td>	
<td class="t data" >95.88%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >381</td>	
<td class="t data"  >60.96%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2012 - 13</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  22
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  7
		  </td>
		  <td>
			  32%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  15
		  </td>
		  <td>
			  68%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >593</td>	
<td class="t data" >94.88%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >419</td>	
<td class="t data"  >67.04</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2011 - 12</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top" >
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total  Students
		  </td>
		  <td>
			  22
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  8
		  </td>
		  <td>
			  36%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  14
		  </td>
		  <td>
			  64%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >601</td>	
<td class="t data" >96.16%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >377</td>	
<td class="t data"  >60.32%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;   ">  <b>Results 2010 - 11</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  27
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  11
		  </td>
		  <td>
			  41%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  16
		  </td>
		  <td>
			  59%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >603</td>	
<td class="t data" >96.48%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >409</td>	
<td class="t data"  >65.44%</td>	
</tr>




  </table>

  <br>




</div>

<button class="accordion " style="font-size:13px;">  <b>Results 2009 - 10</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. Of students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  26
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  1
		  </td>
		  <td>
			  4%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  25
		  </td>
		  <td>
			  96%
		  </td>
	  </tr>
	  
	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >566</td>	
<td class="t data" >90.50%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >318</td>	
<td class="t data"  >50.88%</td>	
</tr>



  </table>

 </div>

  <button class="accordion " style="font-size:13px;   ">  <b>Results 2008 - 09</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  16
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  4
		  </td>
		  <td>
			  25%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  12
		  </td>
		  <td>
			  75%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr>
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >550</td>	
<td class="t data" >88%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >446</td>	
<td class="t data"  >71.36%</td>	
</tr>

  </table>

</div>


  <br>
  <button class="accordion " style="font-size:13px;">  <b>Results 2007 - 08</b>  </button>
<div class="panel" >

<table style="width:70%; text-align:center;" >
  <tr>

  </tr>
	  <tr>
		<td>
			
		</td>
		<td class="top">
			No. of Students
		</td>
		<td class="top">
		Percentage
		</td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Total Students
		  </td>
		  <td>
			  26
		  </td>
		  <td>
			  100%
		  </td>
	  </tr>
	  <tr>
		  <td class="left" >
			  Distinctions
		  </td>
		  <td>
			  9
		  </td>
		  <td>
			  35%
		  </td>
	  </tr>
	  <tr>
		  <td class="left">
			  First Class

		  </td>
		  <td>
			  17
		  </td>
		  <td>
			  65%
		  </td>
	  </tr>
	  

	  <tr style="border-bottom: 1px solid black;">
		  <td>

		  </td>
	  </tr>
	  <tr>
		  <td>
			  
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Marks (625)
		  </td>
		  <td class="top" style="border-top: 1px solid black;">
		  Percentage
		  </td>
	  </tr>
<tr >
<td class="t left"  > Highest Marks and Percentage </td>	
<td class="t data"  >584</td>	
<td class="t data" >93.44%</td>	

</tr>
<tr>
<td class="t left" style="text-align:left;">Lowest Marks and Percentage</td>
<td class="t data"  >350</td>	
<td class="t data"  >56%</td>	
</tr>




  </table>

  <br>


</div>












                                         <!-- TOPPERS -->


										 <br>	<br>	<br>	<br>	<br>
										 <br>

										 <div  class="section-heading center-holder" id="Toppers">
		
		<h1 id="toppers" data-aos="fade-right" class="light">Toppers</h1>
		

		
	</div>	

<center> 
<div data-aos="fade-right" data-aos="fade-right"> 

	
<br>
<br>
<button class="accordion active" style="font-size:13px;   ">  <b>Toppers 2020 - 21</b>  </button>
<div class="panel"  style="display:block;">
 <div class="row">
	
	 		<div class=" col-lg-4 col-md-4 col-sm-12">
	 			<div style="width:80% ;"  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2020-21/Sathvika.jpg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">Sathvika.K.V</h4>
						<h5 class="light italic libre-baskerville">Percentage: 98.56%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2020-21/Sai_Shree.jpg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">Saishree.S.Reddy</h4>
						<h5 class="light italic libre-baskerville">Percentage: 92.80%</h5>
					</div>
	 			</div>
	 		</div>
			
		
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;"  class="team-circle">
				
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2020-21/Apoorva.jpg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">Apporva.S</h4>
	 					<h5 class="light italic libre-baskerville" >Percentage: 90.56%</h5>
	          </div>
	 			</div>
	 		</div>
		

	 		
		</div>
  
</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2019 - 20</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class=" col-lg-4 col-md-4 col-sm-12">
	 			<div style="width:80% ;"  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2019-20/bhuvana.jpeg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">BHUVANA R P</h4>
						<h5 class="light italic libre-baskerville">Percentage: 98.56%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2019-20/raksha.jpeg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">RAKSHARANI S</h4>
						<h5 class="light italic libre-baskerville">Percentage: 92.80%</h5>
					</div>
	 			</div>
	 		</div>
			
		
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;"  class="team-circle">
				
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2019-20/chavi.jpeg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">CHAVI P RAWAL</h4>
	 					<h5 class="light italic libre-baskerville" >Percentage: 90.56%</h5>
	          </div>
	 			</div>
	 		</div>
		
		
		</div>
 
</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2018 - 19</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div style="width:80% ;" class="team-circle">

				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2018-19/Morarji.jpg" alt="img">
	 				</div>
					 <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">MORARJI C N</h4>

	 				
						<h5 class="light italic libre-baskerville">Percentage: 96.96%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2018-19/Pravalika.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">PRAVALIKA M S</h4>
	 			
						<h5 class="light italic libre-baskerville">Percentage: 96.64%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2018-19/Tejaswini.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">TEJASWINI P</h4>

	 					<h5 class="light italic libre-baskerville" >Percentage: 95.20%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>
 
</div>

<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2017 - 18</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div style="width:80% ;" class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2017-18/sai-hemanth.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">SAI HEMANTH P S</h4>

	 			
						<h5 class="light italic libre-baskerville">Percentage: 96%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2017-18/pragathi.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">PRAGATHI K S</h4>
	 		
						<h5 class="light italic libre-baskerville">Percentage: 95.68%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2017-18/varun.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">VARUN B S</h4>
	 			
	 					<h5 class="light italic libre-baskerville" >Percentage: 93.44%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2016 - 17</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div style="width:80% ;" class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2016-17/bhavani.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">BHAVANI G N</h4>

	 				
						<h5 class="light italic libre-baskerville">Percentage: 96%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2016-17/pavani.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">PAVANI S</h4>
	 			
						<h5 class="light italic libre-baskerville">Percentage: 94.88%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2016-17/pragathi.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">PRAGATHI  J R</h4>
		
	 					<h5 class="light italic libre-baskerville" >Percentage: 94.24%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2015 - 16</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div style="width:80% ;" class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2015-16/Pallavi-V.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">PALLAVI V</h4>

	 			
						<h5 class="light italic libre-baskerville">Percentage: 96.80%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div style="width:80% ;" class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2015-16/Aishwarya.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">AISHWARYA S P</h4>
	 				
						<h5 class="light italic libre-baskerville">Percentage: 95.84%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
				
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2015-16/Divya-Sree.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">DIVYA SHREE C N</h4>
	 	
	 					<h5 class="light italic libre-baskerville" >Percentage: 95.68%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2014 - 15</b>  </button>
<div class="panel"  >
 <div class="row">

	 	
			<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2014-15/Harshitha.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
					 <h4 class="light">Harshitha V</h4>
	 		
						<h5 class="light italic libre-baskerville">Percentage: 96.48%</h5>
					</div>
	 			</div>
	 		</div>
			
			 <div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2014-15/Aneesh.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
	 					<h4 class="light">Aneesh K L</h4>

						<h5 class="light italic libre-baskerville">Percentage: 93.6%</h5>
	 				</div>
	 			</div>
	 		</div>

			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">

				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2014-15/Sukeerthi.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">Sukeerthi A J</h4>
	 		
	 					<h5 class="light italic libre-baskerville" >Percentage: 93.12%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>
 
</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2013 - 14</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2013-14/Pranathi.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">PRANATHI S P</h4>

	 		
						<h5 class="light italic libre-baskerville">Percentage: 95.68%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2013-14/Pushpa.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">PUSHPA M N</h4>
						<h5 class="light italic libre-baskerville">Percentage: 94.40%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2013-14/Keerthana.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">KEERTHANA M A</h4>
	 			
	 					<h5 class="light italic libre-baskerville" >Percentage: 94.20%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>
 
</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2012 - 13</b>  </button>
<div class="panel"  >
 <div class="row">
	
	 		<div class="col-lg-3 col-md-6  col-sm-12">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2012-13/Prajwal.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">PRAJWAL REDDY K S</h4>

						<h5 class="light italic libre-baskerville">Percentage: 94.88%</h5>
	 				</div>
	 			</div>
	 		</div>
			 <div class="col-md-6 col-sm-6 col-lg-3">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2012-13/Sumanth.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
	 					<h4 class="light">SUMANTH KUMAR M G</h4>
						<h5 class="light italic libre-baskerville">Percentage: 91.84%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-md-6 col-sm-6 col-lg-3">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2012-13/Rushitha.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">RUSHITHA G V</h4>
	 			
						<h5 class="light italic libre-baskerville">Percentage: 91.84%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-md-6 col-sm-6 col-lg-3">
	 			<div  class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2012-13/Shylaja.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">SHYLAJA N</h4>
	 					<h5 class="light italic libre-baskerville" >Percentage: 89.76%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2011 - 12</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2011-12/Jhansi.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">JHANSI M A</h4>
						<h5 class="light italic libre-baskerville">Percentage: 96.16%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2011-12/Supriya.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">SUPRIYA J R</h4>
	 		
						<h5 class="light italic libre-baskerville">Percentage: 91.52%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2011-12/Harshavardhana.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">HARSHA VARDHANA K</h4>
	 					<h5 class="light italic libre-baskerville" >Percentage: 90.72%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2010 - 11</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2010-11/Manoj.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
				 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">MANOJ V</h4>		
						 
						<h5 class="light italic libre-baskerville">Percentage: 96.48%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2010-11/PRIYANKA.jpg" alt="img">
	 				</div> <br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">PRIYANKA V</h4>
	 				
						<h5 class="light italic libre-baskerville">Percentage: 95.04%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2010-11/Keerthi.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>	
					  <h4 class="light">KEERTHI REDDY N</h4>
	 				
	 					<h5 class="light italic libre-baskerville" >Percentage: 94.40%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2009 - 10</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
	
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2009-10/Lakshmi.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">LAKSHMI L</h4>
						<h5 class="light italic libre-baskerville">Percentage: 90.56%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2009-10/Swathi.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">SWATHI M RAGUNATH</h4>
						<h5 class="light italic libre-baskerville">Percentage: 84%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2009-10/Vidya.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">VIDYA SRINIVAS</h4>
	 					<h5 class="light italic libre-baskerville" >Percentage: 81.76%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>
  
</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2008 - 09</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2008-09/Archana.jpeg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">ARCHANA R</h4>
						<h5 class="light italic libre-baskerville">Percentage: 88%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2008-09/Supriya.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">SUPRIYA N</h4>
	 	
						<h5 class="light italic libre-baskerville">Percentage: 87.52%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2008-09/Prashanth.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">PRASHANTH KUMAR A V</h4>
	 			
	 					<h5 class="light italic libre-baskerville" >Percentage: 86.72%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>

</div>


<button class="accordion " style="font-size:13px;   ">  <b>Toppers 2007 - 08</b>  </button>
<div class="panel"  >
 <div class="row">

	 		<div class="col-lg-4 col-md-4 col-sm-12">
	 			<div  class="team-circle">
		
				 <br>
	 				<div class="team-circle-img">
					<img src="img/SSLC-TOOPERS-PHOTOS/2007-08/Ragini.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>1ST RANK</b> </h5>
	 					<h4 class="light">RAGINI Y</h4>
						<h5 class="light italic libre-baskerville">Percentage: 93.44%</h5>
	 				</div>
	 			</div>
	 		</div>

			<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
				
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2007-08/THARUNYA.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>2ND RANK</b> </h5>
					 <h4 class="light">THARUNYA C</h4>
	 		
						<h5 class="light italic libre-baskerville">Percentage: 90.72%</h5>
					</div>
	 			</div>
	 		</div>
			
			
	 		<div class="col-lg-4 col-md-4 col-sm-6">
	 			<div  class="team-circle">
			
				 <br>
	 				<div class="team-circle-img">
                     <img src="img/SSLC-TOOPERS-PHOTOS/2007-08/NANDINI.jpg" alt="img">
	 				</div><br>
	 				<div class="team-circle-text">
					 <h5 class="light italic libre-baskerville"><b>3RD RANK</b> </h5>
					 <h4 class="light">NANDINI G</h4>
	 					<h5 class="light italic libre-baskerville" >Percentage: 90.24%</h5>
	          </div>
	 			</div>
	 		</div>
			

	 		
		</div>
  <br>
</div>

</div>




</center>

<!-- Team Style 4 Section START -->
<div class="section-block" style="padding:0;" id="Faculty">
	<div class="container">
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
		<div class="section-heading center-holder">
		<center> 
			<h1 data-aos="fade-right" class="light">Faculty</h1>
			</center>
		
			
		</div>	
		<br>
	<br>
	<br>
	<div data-aos="fade-right" class="row">
	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					<img src="img/teachers_photos/Narasimha-reddy.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Narasimha Reddy S</h4>
		
			
						<h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">    B.sc.,B.Ed.</span></h5>
					</div>
	 			</div>
	 		</div>

			
			 <div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Murali.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Murali</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;">    M.A.,B.Ed.</span> </h5>
	 				</div>
	 			</div>
	 		</div>
			
			
			
	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div  class="team-circle">
	 				<div class="team-circle-img">
                     <img src="img/teachers_photos/Bhagya.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Bhagya</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">    B.A</span></h5>
	</div>
	 			</div>
	 		</div>

	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
                     <img src="img/teachers_photos/Chandrakala.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Chandrakala</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:   <span style="color:#da2945;"> B.Com. </span> </h5>
					</div>
	 			</div>
	 		</div>
		</div>
		<div data-aos="fade-right" class="row">
			<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Girish-Babu.jpeg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Girish Babu M S</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;">  B.Sc.,B.Ed.  </span> </h5>
					</div>
	 			</div>
	 		</div>
			
			 <div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Subbhalakshmi.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Subba lakshmamma</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:    <span style="color:#da2945;">    B.sc.,B.Ed.</span>  </h5>
	 				</div>
	 			</div>
	 		</div>

			 <div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Sudha.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Sudha B</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:   <span style="color:#da2945;">    B.sc.,B.Ed.</span>  </h5>
	 				</div>
	 			</div>
	 		</div>
		

	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Mubarak.jpeg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Mubarak J F</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">  M.A.,B.Ed  </span></h5>

	 				</div>
	 			</div>
	 		</div>
</div>

		<div data-aos="fade-right" class="row">
			
		
		
	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Prabhavathi.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Prabhavathi </h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> M.Sc.,B.Ed. </span> </h5>

	 				</div>
	 			</div>
	 		</div>

	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Rajani.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Rajani M G</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> B.A. </span> </h5>
	 				</div>
	 			</div>
	 		</div>
			
			
				
	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Yashodha.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Yashodamma</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> M.A.,M.Ed. </span> </h5>

	 				</div>
	 			</div>
	 		</div>

			
			<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Sarala.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Saralamma </h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> B.Sc.,B.Ed. </span> </h5>
	 				</div>
	 			</div>
	 		</div>
</div>
		<div data-aos="fade-right" class="row">
	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Sasi.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Sasi V</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> B.Com(B.Ed) </span> </h5>

	 				</div>
	 			</div>
	 		</div>
			<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Shubha.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Shubha</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;"> B.A. </span></h5>

	 				</div>
	 			</div>
	 		</div>
			

	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Sravanthi.jpeg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Sravanthi</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">    B.sc.,B.Ed.</span></h5>
	 				</div>
	 			</div>
	 		</div>
		
		
		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Sri-Shyla-bhat.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Shri Shaila Bhat</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;"> M.A.,T.C.H </span></h5>
						
	 				</div>
	 			</div>
	 		</div>
			</div>
		<div data-aos="fade-right" class="row">
			

			 <div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Vanaja.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Vanaja </h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;"> D.Ed </span></h5>
	 				</div>
	 			</div>
	 		</div>

<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Suchitra.jpeg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Suchitra </h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">M.Com.,B.Ed</span></h5>
	 				</div>
	 			</div>
	 		</div>
			

			 <div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
                     <img src="img/teachers_photos/Anitha.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Anitha GA</h4>
	 					<h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">B.A.,D.Ed.</span></h5>
					</div>
	 			</div>
	 		</div>
	 		

	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Tulasi.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Tulasi</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;">    B.A.,D.Ed.</span></h5>

	 				</div>
	 			</div>
	 		</div>
</div>





		<div data-aos="fade-right" class="row">


		

		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/peer-Bhakthar.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Peer Bhaktar</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> M.A.,B.A.,B.Ed.  </span> </h5>
			
	 				</div>
	 			</div>
	 		</div>


		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Nandini.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Nandini</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:   <span style="color:#da2945;"> B.A. </span>  </h5>

	 				</div>
	 			</div>
	 		</div>
		
			 <div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Prajwal.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Prajwal </h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:  <span style="color:#da2945;"> PU </span> </h5>

	 				</div>
	 			</div>
	 		</div>

		
		
	 		<div class="col-md-3 col-sm-6 col-6">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Manjunatha.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Manjunatha C N</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification: <span style="color:#da2945;"> B.A.,M.P.Ed </span></h5>

	 				</div>
	 			</div>
	 		</div>
	 	
	
</div>
<div data-aos="fade-right" class="row">
		


<div class="col-md-4 col-sm-6 col-lg-3">
	 			<div class="team-circle">
	 				<div class="team-circle-img">
					 <img src="img/teachers_photos/Subramani.jpg" alt="img">
	 				</div>
	 				<div class="team-circle-text">
	 					<h4 class="light">Mani</h4>
						 <h5 style="color:#106eea" class="light italic libre-baskerville">Qualification:</h5>

	 				</div>
	 			</div>
	 		</div>



	 
</div>
		
	




<br><br><br><br><br>
<br><br>



<section>



  <div style="width:90%; ">
		
		<h1 data-aos="fade-right" class="light" id="ResourcePerson">Resource Persons</h1>
		
		
		<br><br>
	</div>	
<div class="row">
	<div data-aos="fade-right" style="margin-top:20px;" class="col-lg-4 col-sm-6"> 
	
<figure class="imghvr-fade">
<!-- <div style="width:100%;height:80%;" class="team-circle"> -->
<div class="team-circle-img">
					<img src="img/demoimg.jpeg" alt="img" style="height: 100px;">
	 				</div>
					 <br>
					 <div class="team-circle-text_res">
					 <h4 class="light">Bhagavatula Neeraja</h4>
	 			   </div>
    <figcaption >
	<h3  class="res_t"> <span class="term"> Qualification:</span> M.Sc. (Food & Nutrition), B.Ed.</h3>
 <br>
	<h3  class="res_t"> <span class="term"> Training Specialisation :</span> Master Trainer in Bal Vikas Value Based Education, Teachers Training</h3>  
    </figcaption>

  </figure>
</div>
	<div data-aos="fade-right" style="margin-top:20px;" class="col-lg-4 col-sm-6">
	
<figure class="imghvr-fade">
<!-- <div style="width:100%;height:80%;" class="team-circle"> -->
<div class="team-circle-img">
					<img src="img/Resource-persons/Arun.jpg" alt="img">
	 				</div>
					 <br>
					 <div class="team-circle-text_res">
					 <h4 class="light">Col. Arun Malhotra</h4>
				
					
	 			   </div>
    <figcaption>
	<h2  class="res_col"> <span class="term"> Qualification:</span>M.Sc., PGDBM.</h2>
	<br>
	<h2  class="res_col"> <span class="term"> Profile Post Retd: </span>Guest Columnist with Times of India, Guest Speaker at Institutes & Corporates, VP and COO (2 Software Development Co.s), Motivational Talks to Youth on Career Planning w.r.t. joining Armed Forces</h2>
 <br>
	<h2  class="res_col"> <span class="term"> Training Specialisation :</span> : Teachers Training, Art of Assimilative Instruction/Teaching, Grooming & Etiquette, Leadership & Team Building, Communication Skills, Personality Development, Org. Development</h2>  
   
 
    </figcaption>
   
  </figure>
</div>



<div data-aos="fade-right" style="margin-top:20px;" class="col-lg-4 col-sm-12">
	
<figure class="imghvr-fade">
<!-- <div style="width:100%;height:80%;" class="team-circle"> -->
<div class="team-circle-img">
					<img src="img/Resource-persons/Surekha.jpg" alt="img">
	 				</div>
					 <br>
					 <div class="team-circle-text_res">
					 <h4 class="light">Surekha  H. Pai</h4>
	 			   </div>
    <figcaption>
	<h3  class="res_t"> <span class="term"> Qualification:</span> B.Sc </h3>
	<br>
	<h3  class="res_t"> <span class="term"> Certifications:  </span>Diploma in Sathya Sai School Education Dharmakshetra</h3>  
<br>
	<h5 style="color:black !important"> *Advanced Course in Sathya Sai Education  </h5>  
<br>

 <h3  class="res_t"> <span class="term"> Training Specialisation: </span>Master Trainer in Value Based Education</h3>  
   
    </figcaption>
   
  </figure>
</div>
</div>

<div class="row"> 
<div data-aos="fade-right" style="margin-top:20px;" class="col-lg-4 col-sm-6">
	
<figure class="imghvr-fade">
<!-- <div style="width:100%;height:80%;" class="team-circle"> -->
<div class="team-circle-img">
					<img src="img/Resource-persons/Hima.jpg" alt="img">
	 				</div>
					 <div class="team-circle-text_res">
					 <br>
					 <br>
					 <h4 class="light">Hima Bindu </h4>
					 <br>
					
	 			   </div>
    <figcaption>
	<h3  class="res_t"> <span class="term"> Qualification:</span>B.Sc., M.Sc. </h3>
	<br>
	<h3  class="res_t"> <span class="term"> Certifications:  </span>Autism Online Course</h3>  
<br>
 <h3  class="res_t"> <span class="term">Samdhan Goyam:  </span>Diagnosis of Specific Learning Disability</h3>  
 <br>
 <h3  class="res_t"> <span class="term">Menstrupedia:  </span>Master Class for Menstrual Educators </h3>  
 <br>
 <h2 style="font-size:13.5px !important; "  class="res_t"> <span class="term">Training Specialisation:  </span>Teacher Training, Developing Content for Slow Learners, Mentoring Students, Spoken English  </h2>  
     

    </figcaption>
   
  </figure>
</div>


<div data-aos="fade-right" style="margin-top:20px;" class="col-lg-4 col-sm-6">

<figure class="imghvr-fade">
<!-- <div style="width:100%;height:80%;" class="team-circle"> -->
<div class="team-circle-img">
					<img src="img/Resource-persons/Jagannath.jpg" alt="img">
	 				</div>
					 <div class="team-circle-text_res">
					 <br>
					 <br>
					 <h4 class="light">Jagannatha Nadiger</h4>
					 <br>
				
					</div>
    <figcaption>
	<h3  class="res_t"> <span class="term"> Qualification:</span>M.A. </h3>
	<br>
	<h3  class="res_t"> <span class="term"> Certifications:  </span>Diploma in E.H.V & Journalism</h3>  
<br>
 <h3  class="res_t"> <span class="term">Samdhan Goyam:  </span>Diagnosis of Specific Learning Disability</h3>  
 <br>
 <h2  class="res_t"> <span class="term">Training Specialisation:  </span>Value Based Education, Teachers Training, Training Slow Learners, Parenting, NLP techniques, Study Skills </h2>  
     

    </figcaption>
  
  </figure>
<!-- </div> -->
</div>

<br>
</div>
<br>
</div>
</div>
<br>
</section>
			 <!-- Team Style 4 Section END -->
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


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
</body>


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>


