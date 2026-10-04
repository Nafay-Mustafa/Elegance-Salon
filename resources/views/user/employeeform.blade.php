<!doctype html>
<html lang="en" data-bs-theme="light">

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

    <title> Staff Portal </title>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

    <!--owl slider stylesheet -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <!-- nice select  -->
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css"
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
    <style>
        .login-link {
            text-decoration: none !important;
            color: #970909;
        }

        .login-link:hover {
            text-decoration: underline !important;
        }

       

        input:focus,
        select:focus {
            border-color: #970909 !important;
            outline: none !important;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.4) !important;
        }

        .logo {
            width: 180px;
            height: auto;
            display: block;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>


<body>
    <div class="container">
        <img class="logo" src="images/logo with background.png" alt="">
        
        <form action="/employeeform" method="post">
            @csrf
            <h2 class="heading_container heading_center">Create Account</h2>
            <br>
            <input type="text" name="name" id="" placeholder="Enter Name" class="form-control">
            <br>
            <input type="email" name="email" id="" placeholder="Enter Email" class="form-control">
            <br>
            <input type="password" name="password" id="" placeholder="Enter Password" class="form-control">
            <br>
            <input type="number" name="number" id="" placeholder="Enter Contact Number" class="form-control">
            <br>
            <select name="department" id="" class="form-control">
                <option value="Hair Stylist">
                    Hair Stylist
                </option>
                <option value="Makeup Artist">
                    Makeup Artist
                </option>
                <option value="Manager">
                    Manager
                </option>
                <option value="Receptionist">
                    Receptionist
                </option>
                <option value="Assistant">
                    Assistant
                </option>
                <option value="Beautician">
                    Beautician
                </option>
                <option value="Nail Technician">
                    Nail Technician
                </option>
                <option value="Hair Colorist">
                    Hair Colorist
                </option>
            </select>
            <br>
            <button type="submit" name="submit" class="btn-grad ms-auto">Register</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous"></script>
    <!-- jQery -->
    <script src="js/jquery-3.4.1.min.js"></script>
    <!-- popper js -->
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
</body>

</html>