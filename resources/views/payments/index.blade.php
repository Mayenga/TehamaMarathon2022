<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Tehama Marathon - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('img/icon.webp') }}" rel="icon">
  <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Inter:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  <link href="{{ asset('vendor/aos/aos.css') }}" rel="stylesheet">

  <!-- j query -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/main.css') }}" rel="stylesheet">

  <style type="text/css">
  /* button with styles */
  @import url("https://fonts.googleapis.com/css?family=Open+Sans");
  .main-button {
  background-color: yellowgreen;
  border: 0;
  padding: 10px 35px;
  font-size: 20px;
  font-family: "Open Sans";
  border-radius: 3px;
  cursor: pointer;
  color: #222f3e;
  position: relative;
  text-transform: uppercase;
}
.main-button:after {
  background-color: #06ffde;
  content: "";
  display: block;
  width: 100%;
  height: 100%;
  position: absolute;
  top: 0;
  left: 0;
  border-radius: 3px;
  -webkit-animation-name: blink;
          animation-name: blink;
  -webkit-animation-duration: 1.3s;
          animation-duration: 1.3s;
  -webkit-animation-iteration-count: infinite;
          animation-iteration-count: infinite;
  animation-direction: alternate-reverse;
  -webkit-animation-timing-function: cubic-bezier(0.19, 1, 0.22, 1);
          animation-timing-function: cubic-bezier(0.19, 1, 0.22, 1);
}

@-webkit-keyframes blink {
  0% {
    transform: scale3d(1, 1, 1);
    opacity: 0.8;
  }
  100% {
    transform: scale3d(1.1, 1.3, 1.1);
    opacity: 0;
  }
}

@keyframes blink {
  0% {
    transform: scale3d(1, 1, 1);
    opacity: 0.8;
  }
  100% {
    transform: scale3d(1.1, 1.3, 1.1);
    opacity: 0;
  }
}

    /* styles for counter starts here */
    .containerr {
      margin-top: 50px;
    }
    .counter .sq {
        color: yellow;
        display: inline-block;
        text-align: center;
    }
    .counter .sq .bord {
        border: 1px solid yellowgreen;
        padding: 12px 15px;
        margin-right: 18px;
        text-indent: 0px;
        font-family: 'Helvetica';
        font-size: 22px;
        font-size: 2.2rem;
        margin-bottom: 5px;
        width: 74px;
    }
    .counter .sq span {
        clear: both;
        display: block;
        text-indent: -15px;
        font-size: 16px;
        font-size: 1.6rem;
        font-family: "Helvetica";
    }
    .well {
      text-align: center;
      max-width: 400px;
    }

    /* map */
    .venue-map iframe {
      width: 100%;
      height: 100%;
      min-height: 300px;
    }

    /* slideshow starts here */
    * {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.activee {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

  </style>
</head>

<body>
  <!-- ======= Top Bar ======= -->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:stephen@teknokona.co.tz">stephen@teknokona.co.tz</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+255 677 850 557</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://twitter.com/teknokona" target="blank" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="https://web.facebook.com/teknokona/" target="blank" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/teknokona/" target="blank" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://www.youtube.com/c/TeknokonaNet" target="blank" class="youtube"><i class="bi bi-youtube"></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="/" class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <img src="{{ asset('img/logo-20.png') }}" alt="">
        <!-- <h1>TMarathon</h1> -->
      </a>

      <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
      <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="/" class="active">Home</a></li>
          <li><a href="/registercustomer">Registration</a></li>
          <li><a href="#footer">Contacts</a></li>
        </ul>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row gy-4 d-flex justify-content-between">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up">{{Session::get('name');}} Your almost done</h2>
          <h3 data-aos="fade-up">Complete your payments to attend the marathon on</h3>
          <h3 data-aos="fade-up">29 October 2022 Zanzibar</h3>
          
          <div class="row gy-4" data-aos="fade-up" data-aos-delay="400">

          </div>
        </div>

        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="zoom-out">
          
        </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">
<br />
    <!-- ======= About Us Section ======= -->
    <section id="about" class="about pt-0">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4">
          <div class="col-lg-6 position-relative align-self-start order-lg-last order-first">
            <!-- <img src="{{ asset('img/about.png') }}" class="img-fluid" alt=""> -->
          </div>
          <div class="col-lg-6 content order-last  order-lg-first">
          <!-- put your data here -->
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-info">
          <a href="/" class="logo d-flex align-items-center">
            <span>Tehama Marathon</span>
          </a>
          <p>Tagline About Marathon will be here too...</p>
          <div class="social-links d-flex mt-4">
            <a href="https://twitter.com/teknokona" target="_blank" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="https://web.facebook.com/teknokona/" target="_blank" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="https://www.instagram.com/teknokona/" target="_blank" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="https://www.youtube.com/c/TeknokonaNet" target="_blank" class="youtube"><i class="bi bi-youtube"></i></a>
          </div>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="https://teknolojia.co.tz/" target="_blank">teknokona</a></li>
            <li><a href="https://ictc.go.tz/" target="_blank">ICT Commission</a></li>
            <li><a href="https://taic.ictc.go.tz/" target="_blank">TAIC</a></li>
          </ul>
        </div>

        <div class="col-lg-2 col-6 footer-links">
          
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            3RD FLOOR VICTORIA NOBLE CENTER <br>
            PLOT NO 89,BUILDING NO 1<br>
            P.O.BOX 10790<br>
            VICTORIA,MAKUMBUSHO<br>
            DAR ES SALAAM <br><br>
            <strong>Phone:</strong> +255 677 850 557<br>
            <strong>Email:</strong> stephen@teknokona.co.tz<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>teknokona<sup>TM</sup></span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <script>
    $( document ).ready(function() {
      function getTimeRemaining(endtime) {
        var t = Date.parse(endtime) - Date.parse(new Date());
        if (t<0) { return false; }
        var seconds = Math.floor((t / 1000) % 60);
        var minutes = Math.floor((t / 1000 / 60) % 60);
        var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        return {
          'total': t,
          'days': days,
          'hours': hours,
          'minutes': minutes,
          'seconds': seconds
        };
      }
      function initializeClock(id, endtime) {
        var clock = document.getElementById(id);
        var daysSpan = clock.querySelector('.days');
        var hoursSpan = clock.querySelector('.hours');
        var minutesSpan = clock.querySelector('.minutes');
        var secondsSpan = clock.querySelector('.seconds');
        function updateClock() {
          var t = getTimeRemaining(endtime);
          if (t) {
            daysSpan.innerHTML = t.days;
            hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
            minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
            secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
          } else {
            clearInterval(timeinterval);
          }
        }
      
        updateClock();
        var timeinterval = setInterval(updateClock, 1000);
      }
      var deadline = new Date("Oct 29, 2022 00:00:00"); //today
      deadline.setDate(deadline.getDate() + 7);
      initializeClock('clockdiv', deadline);
    });

      
  </script>

<script>
  let slideIndex = 0;
  showSlides();
  
  function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" activee", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " activee";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
  }
  </script>

  <!-- Vendor JS Files -->
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('js/main.js') }}"></script>

</body>

</html>