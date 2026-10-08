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
        <input type="text" name="phone" id="" placeholder="Your Contact Number" class="form-control" required>
        <br>
        <input type="date" name="date" id="" class="form-control" required min="{{ date('Y-m-d') }}" id="appointment_date">
        <br>
        <input type="time" name="time" id="" class="form-control" required>
        <br>
        <!-- Custom Scrollable Dropdown -->
<div class="custom-select-wrapper" style="position:relative; width:100%;">
    <input type="hidden" name="status" id="statusHidden">
    <div id="customSelectBox" style="border:1px solid #ccc; padding:12px; border-radius:6px; background:#fff; cursor:pointer;">
        Select Service
    </div>
    <div id="customOptions" style="display:none; position:absolute; top:100%; left:0; right:0; background:#fff; border:1px solid #ccc; border-radius:6px; max-height:150px; overflow-y:auto; z-index:9999; margin-top:5px; box-shadow:0 4px 10px rgba(0,0,0,0.15);">
        <div class="opt" data-value="Basic Facial 1000/-" style="padding:10px 12px; cursor:pointer;">Basic Facial 1000/-</div>
        <div class="opt" data-value="Herbal Facial 1000/-" style="padding:10px 12px; cursor:pointer;">Herbal Facial 1000/-</div>
        <div class="opt" data-value="Acne Facial 2000/-" style="padding:10px 12px; cursor:pointer;">Acne Facial 2000/-</div>
        <div class="opt" data-value="Age Regulate Facial 2000/-" style="padding:10px 12px; cursor:pointer;">Age Regulate Facial 2000/-</div>
        <div class="opt" data-value="Double Glow Facial 2500/-" style="padding:10px 12px; cursor:pointer;">Double Glow Facial 2500/-</div>
        <div class="opt" data-value="Face Polish Facial 3000/-" style="padding:10px 12px; cursor:pointer;">Face Polish Facial 3000/-</div>
        <div class="opt" data-value="Whitening Glow Facial 2500/-" style="padding:10px 12px; cursor:pointer;">Whitening Glow Facial 2500/-</div>
        <div class="opt" data-value="Continental Cleansing 2500/-" style="padding:10px 12px; cursor:pointer;">Continental Cleansing 2500/-</div>
        <div class="opt" data-value="Purity Cleansing 3000/-" style="padding:10px 12px; cursor:pointer;">Purity Cleansing 3000/-</div>
        <div class="opt" data-value="Gold / Hydrating Treatment 3000/-" style="padding:10px 12px; cursor:pointer;">Gold / Hydrating Treatment 3000/-</div>
        <div class="opt" data-value="Brightening Oxygen Oz2 Treatment 4000/-" style="padding:10px 12px; cursor:pointer;">Brightening Oxygen Oz2 Treatment 4000/-</div>
        <div class="opt" data-value="Radiant Whitening Glow Treatment 5000/-" style="padding:10px 12px; cursor:pointer;">Radiant Whitening Glow Treatment 5000/-</div>
        <div class="opt" data-value="Sebum Control Treatment 5000/-" style="padding:10px 12px; cursor:pointer;">Sebum Control Treatment 5000/-</div>
        <div class="opt" data-value="Rejuvenating Treatment 5000/-" style="padding:10px 12px; cursor:pointer;">Rejuvenating Treatment 5000/-</div>
        <div class="opt" data-value="Luxury Instant Glow Treatment 5500/-" style="padding:10px 12px; cursor:pointer;">Luxury Instant Glow Treatment 5500/-</div>
        <div class="opt" data-value="Biological Treatment 6000/-" style="padding:10px 12px; cursor:pointer;">Biological Treatment 6000/-</div>
        <div class="opt" data-value="Hydra sebum Control Treatment 6000/-" style="padding:10px 12px; cursor:pointer;">Hydra sebum Control Treatment 6000/-</div>
        <div class="opt" data-value="Hydra Radiant Whitening Glow Treatment 6000/-" style="padding:10px 12px; cursor:pointer;">Hydra Radiant Whitening Glow Treatment 6000/-</div>
        <div class="opt" data-value="Hydra Rejuvenating Treatment 6000/-" style="padding:10px 12px; cursor:pointer;">Hydra Rejuvenating Treatment 6000/-</div>
        <div class="opt" data-value="Renewal Hydradermie Treatment 7000/-" style="padding:10px 12px; cursor:pointer;">Renewal Hydradermie Treatment 7000/-</div>
        <div class="opt" data-value="Renewal Hydradermie Lifting Treatment 8000/-" style="padding:10px 12px; cursor:pointer;">Renewal Hydradermie Lifting Treatment 8000/-</div>
        <div class="opt" data-value="Double Glow Facial + Whitening Bleach Rs. 3500/-" style="padding:10px 12px; cursor:pointer;">Double Glow Facial + Whitening Bleach Rs. 3500/-</div>
        <div class="opt" data-value="Brightening Oxygen Oz2 Facial + Whitening Bleach Rs. 5000/-" style="padding:10px 12px; cursor:pointer;">Brightening Oxygen Oz2 Facial + Whitening Bleach Rs. 5000/-</div>
        <div class="opt" data-value="Luxury Instant Glow Treatment + Sandle Bleach Rs. 6500/-" style="padding:10px 12px; cursor:pointer;">Luxury Instant Glow Treatment + Sandle Bleach Rs. 6500/-</div>
        <div class="opt" data-value="Renewal Hydradermie Treatment + Sandle Bleach Rs. 8000/-" style="padding:10px 12px; cursor:pointer;">Renewal Hydradermie Treatment + Sandle Bleach Rs. 8000/-</div>
        <div class="opt" data-value="Renewal Hydradermie Lift Treatment + Sandle Bleach Rs. 9000/-" style="padding:10px 12px; cursor:pointer;">Renewal Hydradermie Lift Treatment + Sandle Bleach Rs. 9000/-</div>
        <div class="opt" data-value="Casual Manicure + Casual Pedicure + Hand & Feet Bleach with Mask Rs. 3600/-" style="padding:10px 12px; cursor:pointer;">Casual Manicure + Casual Pedicure + Hand & Feet Bleach with Mask Rs. 3600/-</div>
        <div class="opt" data-value="Exclusive Manicure + Exclusive Pedicure + Hand & Feet Bleach with Mask Rs. 4600/-" style="padding:10px 12px; cursor:pointer;">Exclusive Manicure + Exclusive Pedicure + Hand & Feet Bleach with Mask Rs. 4600/-</div>
        <div class="opt" data-value="Luxury Manicure + Luxury Pedicure + Hand & Feet Bleach with Mask Rs. 6100/-" style="padding:10px 12px; cursor:pointer;">Luxury Manicure + Luxury Pedicure + Hand & Feet Bleach with Mask Rs. 6100/-</div>
        <div class="opt" data-value="Casual Full Arms + Full Legs Waxing Rs. 1800/-" style="padding:10px 12px; cursor:pointer;">Casual Full Arms + Full Legs Waxing Rs. 1800/-</div>
        <div class="opt" data-value="Rica Full Arms + Full legs WaxingRs. 2950/-" style="padding:10px 12px; cursor:pointer;">Rica Full Arms + Full legs WaxingRs. 2950/-</div>
        <div class="opt" data-value="Glamour Eye Makeup 4000/-" style="padding:10px 12px; cursor:pointer;">Glamour Eye Makeup 4000/-</div>
        <div class="opt" data-value="Soft Party Makeup 5000/-" style="padding:10px 12px; cursor:pointer;">Soft Party Makeup 5000/-</div>
        <div class="opt" data-value="Glamour Party Makeup 10000/-" style="padding:10px 12px; cursor:pointer;">Glamour Party Makeup 10000/-</div>
        <div class="opt" data-value="Smokey Makeup 12000/-" style="padding:10px 12px; cursor:pointer;">Smokey Makeup 12000/-</div>
        <div class="opt" data-value="Thread Casual Rica Upper Lip 100/-" style="padding:10px 12px; cursor:pointer;">Thread Casual Rica Upper Lip 100/-</div>
        <div class="opt" data-value="Lower Lip 100/-" style="padding:10px 12px; cursor:pointer;">Lower Lip 100/-</div>
        <div class="opt" data-value="Chin 100/-" style="padding:10px 12px; cursor:pointer;">Chin 100/-</div>
        <div class="opt" data-value="Cheeks 150/-" style="padding:10px 12px; cursor:pointer;">Cheeks 150/-</div>
        <div class="opt" data-value="Forehead 150/-" style="padding:10px 12px; cursor:pointer;">Forehead 150/-</div>
        <div class="opt" data-value="Nose Wax 200/-" style="padding:10px 12px; cursor:pointer;">Nose Wax 200/-</div>
        <div class="opt" data-value="Full Face 1000/-" style="padding:10px 12px; cursor:pointer;">Full Face 1000/-</div>
        <div class="opt" data-value="Mehndi (per side) 500/-" style="padding:10px 12px; cursor:pointer;">Mehndi (per side) 500/-</div>
        <div class="opt" data-value="Uroosa Mehndi (per side) 800/-" style="padding:10px 12px; cursor:pointer;">Uroosa Mehndi (per side) 800/-</div>
        <div class="opt" data-value="Feet Mehndi 1000/-" style="padding:10px 12px; cursor:pointer;">Feet Mehndi 1000/-</div>
        <div class="opt" data-value="Engagement Mehndi 4000/-" style="padding:10px 12px; cursor:pointer;">Engagement Mehndi 4000/-</div>
        <div class="opt" data-value="on words Bridal Mehndi 5000/-" style="padding:10px 12px; cursor:pointer;">on words Bridal Mehndi 5000/-</div>
        <div class="opt" data-value="Straight Hair Cut 800/-" style="padding:10px 12px; cursor:pointer;">Straight Hair Cut 800/-</div>
        <div class="opt" data-value="Front Bangs 800/-" style="padding:10px 12px; cursor:pointer;">Front Bangs 800/-</div>
        <div class="opt" data-value="Curtain Bangs 1000/-" style="padding:10px 12px; cursor:pointer;">Curtain Bangs 1000/-</div>
        <div class="opt" data-value="U Shaped Hair Cut 1000/-" style="padding:10px 12px; cursor:pointer;">U Shaped Hair Cut 1000/-</div>
        <div class="opt" data-value="Front Layer Cut 1000/-" style="padding:10px 12px; cursor:pointer;">Front Layer Cut 1000/-</div>
        <div class="opt" data-value="Split End 1500/-" style="padding:10px 12px; cursor:pointer;">Split End 1500/-</div>
        <div class="opt" data-value="Bob Hair Cut 2000/-" style="padding:10px 12px; cursor:pointer;">Bob Hair Cut 2000/-</div>
        <div class="opt" data-value="Step Cut 2000/-" style="padding:10px 12px; cursor:pointer;">Step Cut 2000/-</div>
        <div class="opt" data-value="Layers 2000/-" style="padding:10px 12px; cursor:pointer;">Layers 2000/-</div>
    </div>
    <small id="statusError" style="color:red; display:none; margin-top:5px;">Please select a service first!</small>
</div>

<script>
const box = document.getElementById('customSelectBox');
const opts = document.getElementById('customOptions');
const hidden = document.getElementById('statusHidden');
box.addEventListener('click', ()=> opts.style.display = opts.style.display==='block' ? 'none' : 'block');
opts.querySelectorAll('.opt').forEach(o=>{
    o.addEventListener('click', ()=>{
        box.textContent = o.dataset.value;
        hidden.value = o.dataset.value;
        opts.style.display='none';
    });
    o.addEventListener('mouseenter', ()=> o.style.background='#f0f0f0');
    o.addEventListener('mouseleave', ()=> o.style.background='#fff');
});
document.addEventListener('click', (e)=>{
    if(!e.target.closest('.custom-select-wrapper')) opts.style.display='none';
});
// Form validation for custom dropdown
const bookingForm = document.querySelector('form[action*="book"]') || document.querySelector('form');
bookingForm.addEventListener('submit', function(e){
    const hidden = document.getElementById('statusHidden');
    const box = document.getElementById('customSelectBox');
    const error = document.getElementById('statusError');
    
    if(!hidden.value){
        e.preventDefault();
        box.style.border = "1px solid red";
        error.style.display = "block";
        box.scrollIntoView({behavior:'smooth', block:'center'});
        return false;
    } else {
        box.style.border = "1px solid #ccc";
        error.style.display = "none";
    }
});
</script>

<br>
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