<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <link rel="shortcut icon" href="images/favicon.png" type="">

  <title> Elegance Salon </title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
  <!-- nice select  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
    integrity="sha512-CruCP+TD3yXzlvvijET8wV5WxxEh5H8P4cmz0RFbKK6FlZ2sYl3AEsKlLPHbniXKSrDdFewhbmBK5skbdsASbQ=="
    crossorigin="anonymous" />
  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
  <link
    href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Jost:wght@400;500&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet">
       <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
  />

  <style>
    .my-video {
      width: 100%;
      height: 450px;
      object-fit: cover;
      margin-top: 10px;
    }
    .login-link {
            text-decoration: none !important;
            color: #fff;
        }
  </style>
  <style>
 

.wrapper{
  width:100%;
  padding-top: 20px;
  text-align:center;
}
h2{
  font-family: 'Dancing Script', cursive;
  color: #0c0c0c;
  font-size: 2.5rem;
}
.carousel{
  width:90%;
  margin:0px auto;
}
.slick-slide{
  margin:10px;
}
.slick-slide img{
  width:100%;
  border: 2px solid #970909;
}
.wrapper .slick-dots li button:before {
  font-size:20px;
  color: #970909;
}

</style>
<style>
  .user-menu {
    position: relative;
    display: inline-block;
}

.user-icon {
    font-size: 22px;
    color: #000;
    text-decoration: none;
}

.user-dropdown {
    display: none;
    position: absolute;
    right: 0;
    top: 35px;
    background: white;
    min-width: 130px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.2);
    z-index: 1000;
}

.user-dropdown a,
.user-dropdown button {
    display: block;
    width: 100%;
    padding: 10px 15px;
    color: #000;
    text-decoration: none;
    background: none;
    border: none;
    text-align: left;
}

.user-dropdown a:hover,
.user-dropdown button:hover {
    background: #f2f2f2;
}
</style>
</head>


<body>



  <!-- header section strats -->

  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container ">
        <a class="navbar-brand" href="/index">
          <img class="logo" src="images/logo__2_-removebg-preview.png" alt="">
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item active">
              <a class="nav-link" href="/index">HOME <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/menu">MAKEUP CATALOGUE</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/about">ABOUT US</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/services">SERVICES</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/contact">CONTACT</a>
            </li>
          </ul>
          <div class="user_option">
           
            <div class="user-menu">
    

            
            <form class="form-inline">
              <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">

              </button>
            </form>
            <a href="/booknow" class="btn-grad">
              BOOK NOW
            </a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  @yield('content')


  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              <a href="/contact"> Contact Us</a>
             
            </h4>
            <div class="contact_link_box">
              <a href="googlemap.com">
                <i class="fa fa-map-marker" aria-hidden="true"></i>
                <span>
                  Location
                </span>
              </a>
              <a href="whatsapp.com">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Call +92 1234567890
                </span>
              </a>
              <a href="gmail.com">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  elegancesalon@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Feane
            </a>
            <p>
              Necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin
              words, combined with
            </p>
            <div class="footer_social">
              <a href="facebook.com">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="x.com">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="linkedin.com">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="instagram.com">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>

            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Opening Hours
          </h4>
          <p>
            Everyday
          </p>
          <p>
            10.00 Am -10.00 Pm
          </p>
        </div>
      </div>
      <div class="footer-info">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://php.design/">Elegance Salon</a><br><br>

        </p>
      </div>
    </div>
  </footer>
  <!-- footer section -->

  <!-- jQery -->
 <script src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="slick/slick.min.js"></script>
<script src="js/jquery-3.4.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>
$(document).ready(function () {
    $('.carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        dots: true,
        centerMode: true,
        arrows: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
});
</script>  <!-- popper js -->
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
  <!-- bootstrap js -->
  <script src="js/bootstrap.js"></script>
  <!-- owl slider -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <!-- isotope js -->
  <script src="https://unpkg.com/isotope-layout@3.0.4/dist/isotope.pkgd.min.js"></script>
  <!-- nice select -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
  <!-- custom js -->
  <script src="js/custom.js"></script>
  <!-- Google Map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
  </script>
  <!-- End Google Map -->
  <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script>
    document.getElementById('userIcon').addEventListener('click', function(e) {
        e.preventDefault();

        let dropdown = document.getElementById('userDropdown');

        if (dropdown.style.display === 'block') {
            dropdown.style.display = 'none';
        } else {
            dropdown.style.display = 'block';
        }
    });
</script>
</body>

</html>