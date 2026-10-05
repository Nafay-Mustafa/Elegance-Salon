<!doctype php>
<php lang="en" data-bs-theme="light">

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

</head>

<body>
  <style>
   .btn-grad a {
    color: white !important;
    text-decoration: none !important;
}
 .logo {
    width: 180px;
    height: auto;
    display: block;
    margin: 0 auto;
    margin-top: 20px;
    margin-bottom: 20px;
}
 input:focus,textarea:focus,
        select:focus {
            border-color: #970909 !important;
            outline: none !important;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.4) !important;
        }
        
  </style>

  @extends('user.headerfooter')
@section('content')

<br>
<br>
<br>
<div style="max-width:850px; margin:0 auto; background:#fff; padding:25px; border-radius:12px;">
   <div style="text-align:center; margin-bottom:15px;">
    <img src="{{ asset('images/bg_remove_logo_2.png') }}" alt="Elegance Salon" style="height:55px; object-fit:contain;">
    <h2 style="font-family:'Dancing Script', cursive; font-style:italic; font-size:32px; color:#0a1128; margin-top:10px;">
        Book Appointment
    </h2>
    @if(session('success'))
<div class="alert alert-success" style="background: #d4edda; color: #155724; padding: 15px; border-radius: 10px; text-align:center; margin-bottom:20px;">
    {{ session('success') }}
</div>
@endif
    <p style="color:#666; font-size:14px; margin-top:5px;">Your Beauty, Our Passion</p>
</div>
    
    <form action="{{ route('appointment.store') }}" method="POST">
        @csrf
        <br>
        <input type="text" name="name" placeholder="Your Name" class="form-control" required>
        <br>
        <input type="email" name="email" id="" placeholder="Your Email" class="form-control" required>
        <br>
        <input type="number" name="phone" id="" placeholder="Your Contact Number" class="form-control" required>
        <br>
        <input type="date" name="date" id="" class="form-control" required min="{{ date('Y-m-d') }}" id="appointment_date">
        <br>
        <input type="time" name="time" id="" class="form-control" required>
        <br>
        <select name="status" class="form-control" required>
    <option value="" disabled selected>Select Service / Status</option>
    <option value="Bridal Makeup">Bridal Makeup</option>
    <option value="Valima Makeup">Valima Makeup</option>
    <option value="Mehndi / Mayoun Makeup">Mehndi / Mayoun Makeup</option>
    <option value="Nikkah Makeup">Nikkah Makeup</option>
    <option value="Engagement Makeup">Engagement Makeup</option>
    <option value="Party Makeup">Party Makeup</option>
    <option value="Hair Styling">Hair Styling</option>
    <option value="Hair Cutting">Hair Cutting</option>
    <option value="Hair Coloring">Hair Coloring</option>
    <option value="Facial & Skin Care">Facial & Skin Care</option>
    <option value="Mehndi Design">Mehndi Design</option>
    <option value="Manicure Pedicure">Manicure Pedicure</option>
</select>
<br><br><br>
<textarea name="service" id="" placeholder="Additional Details (optional)" class="form-control"></textarea>
        <br>
        <button type="submit" class="btn-grad mx-auto">BOOK NOW</button>
        <br>
    </form>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const dateInput = document.getElementById('appointment_date');
    const timeInput = document.querySelector('input[name="time"]');
    
    function setMinTime() {
        if (!dateInput.value) return;
        
        const selectedDate = new Date(dateInput.value);
        const today = new Date();
        today.setHours(0,0,0,0);
        
        if (selectedDate.getTime() === today.getTime()) {
            let now = new Date();
            let hours = String(now.getHours()).padStart(2, '0');
            let minutes = String(now.getMinutes()).padStart(2, '0');
            timeInput.min = hours + ':' + minutes;
        } else {
            timeInput.removeAttribute('min');
        }
    }

    // Page load pe bhi check karo
    setMinTime();
    // Date change pe bhi check karo
    dateInput.addEventListener('change', setMinTime);
    
    // Form submit pe final check - agar purana time hua to rok do
    document.querySelector('form').addEventListener('submit', function(e) {
        if (timeInput.min && timeInput.value < timeInput.min) {
            e.preventDefault();
            alert('Please select a future time. Past time is not allowed for today.');
            timeInput.value = '';
        }
    });
});
</script>
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

</php>
@endsection