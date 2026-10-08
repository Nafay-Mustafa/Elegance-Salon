<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">

    <title>Staff Portal</title>

    <!-- Same CSS, same order as the main layout -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" />
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600&family=Jost:wght@400;500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <style>
        /* Toggler styles copied from the main layout */
        .navbar-toggler {
            background-color: #970909;
            border: 1px solid #970909;
            padding: 6px 10px;
            border-radius: 5px;
        }
        .navbar-toggler-icon {
            background-image: none;
            position: relative;
            width: 25px;
            height: 18px;
            display: inline-block;
            border-top: 2px solid #fff;
            border-bottom: 2px solid #fff;
        }
        .navbar-toggler-icon::after {
            content: "";
            position: absolute;
            left: 0;
            top: 7px;
            width: 25px;
            border-top: 2px solid #fff;
        }

        /* Edit Profile button styled like a nav link */
        .nav-link-btn {
            background: none;
            border: none;
            padding: 10px 15px;
            color: inherit;
            font: inherit;
            text-transform: uppercase;
            cursor: pointer;
        }
        .nav-link-btn:hover { opacity: .8; }

        input:focus, select:focus {
            border-color: #970909 !important;
            outline: none !important;
            box-shadow: 0 0 5px rgba(255, 0, 0, 0.4) !important;
        }
        .login-link { text-decoration: none !important; color: #970909; }
        .login-link:hover { text-decoration: underline !important; }
    </style>
</head>

<body>
    <header class="header_section">
        <div class="container">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{ url('/staffportal/') }}">
                    <img class="logo" src="{{ asset('images/bg-remove.png') }}" alt="">
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/staffportal/' . $employee->id) }}">Client Bookings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/menuupload') }}">Upload Menu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/menutable') }}">Menu Table</a>
                        </li>
                        <li class="nav-item">
                            <form action="{{ url('/editemployee/' . $employee->id) }}" method="post" class="m-0">
                                @csrf
                                <button type="submit" class="nav-link nav-link-btn">Edit Profile</button>
                            </form>
                        </li>
                        <li class="nav-item">
    <form action="{{ route('employee.logout') }}" method="POST" class="m-0">
        @csrf
        <button type="submit" class="nav-link nav-link-btn">
            Logout
        </button>
    </form>
</li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')

    <!-- Scripts: jQuery -> popper -> bootstrap 4 (one Bootstrap only) -->
    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/js/jquery.nice-select.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="{{ asset('js/main.js') }}"></script>
    @stack('scripts')
</body>

</html>