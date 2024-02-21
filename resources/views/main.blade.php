<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--
    - primary meta tag
  -->
    <title>EduWeb - The Best Program to Enroll for Exchange</title>
    <meta name="title" content="EduWeb - The Best Program to Enroll for Exchange">
    {{-- <meta name="description" content="This is an education html template made by codewithsadee"> --}}

    <!--
    - favicon
  -->
    <link rel="shortcut icon" href="{{ url('/fronted/images/favicon.svg') }}" type="image/svg+xml">

    <!--
    - custom css link
  -->
    <link rel="stylesheet" href="{{ url('/fronted/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('/fronted/css/contact.css') }}">
    <link rel="stylesheet" href="{{ url('/fronted/css/style2.css') }}">
    <link rel="stylesheet" href="{{ url('/fronted/css/style3.css') }}">

    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet"
        href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css') }}" />

    <!-- Unicons -->
    <link rel="stylesheet" href="{{ url('https://unicons.iconscout.com/release/v4.0.0/css/line.css') }}" />

    <!--
    - google font link
  -->
    <link rel="preconnect" href="{{ url('https://fonts.googleapis.com') }}">
    <link rel="preconnect" href="{{ url('https://fonts.gstatic.com') }}" crossorigin>
    <link
        href="{{ url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@400;500;600;700;800&family=Poppins:wght@400;500&display=swap') }}"
        rel="stylesheet">

    <!--
    - preload images
  -->
    <link rel="preload" as="image" href="{{ url('/fronted/images/hero-bg.svg') }}">
    <link rel="preload" as="image" href="{{ url('/fronted/images/hero-banner-1.jpg') }}">
    <link rel="preload" as="image" href="{{ url('/fronted/images/hero-banner-2.jpg') }}">
    <link rel="preload" as="image" href="{{ url('/fronted/images/hero-shape-1.svg') }}">
    <link rel="preload" as="image" href="{{ url('/fronted/images/hero-shape-2.png') }}">

    <script>
        function showFields() {
            var userType = document.getElementById("user_type").value;
            var studentFields = document.getElementById("student_fields");
            var providerFields = document.getElementById("provider_fields");

            // Hide all fields initially
            studentFields.style.display = "none";
            providerFields.style.display = "none";

            // Show fields based on selected user type
            if (userType === "Student") {
                studentFields.style.display = "block";
            } else if (userType === "Course Provider") {
                providerFields.style.display = "block";
            }
        }
    </script>

</head>

<body id="top">

    <!--
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">
                <img src="{{ url('/fronted/images/logo.svg') }}" width="162" height="50" alt="EduWeb logo">
            </a>

            <nav class="navbar" data-navbar>

                <div class="wrapper">
                    <a href="#" class="logo">
                        <img src="{{ url('/fronted/images/logo.svg') }}" width="162" height="50"
                            alt="EduWeb logo">
                    </a>

                    <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
                        <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
                    </button>
                </div>

                <ul class="navbar-list">

                    <li class="navbar-item">
                        <a href="{{ route('home') }}" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    {{-- <li class="navbar-item">
                        <a href="{{ url('/about') }}" class="navbar-link" data-nav-link>About</a>
                    </li> --}}

                    @guest()
                        <li class="navbar-item">
                            <a href="{{ url('/about') }}" class="navbar-link" data-nav-link>About</a>
                        </li>
                    @endguest

                    @auth
                        @if (auth()->user()->usertype == 'Student')
                            <li class="navbar-item">
                                <a href="{{ url('/about') }}" class="navbar-link" data-nav-link>About</a>
                            </li>
                        @endif
                    @endauth

                    @guest()
                        <li class="navbar-item">
                            <a href="{{ url('/course') }}" class="navbar-link" data-nav-link>Courses</a>
                        </li>
                    @endguest

                    @auth
                        @if (auth()->user()->usertype == 'Student')
                            <li class="navbar-item">
                                <a href="{{ url('/course') }}" class="navbar-link" data-nav-link>Courses</a>
                            </li>
                        @endif
                    @endauth





                    {{-- <li class="navbar-item">
                        <a href="{{ url('/course') }}" class="navbar-link" data-nav-link>Courses</a>
                    </li> --}}

                    {{-- <li class="navbar-item">
                        <a href="{{ url('/manageCourse') }}" class="navbar-link" data-nav-link>Manage Course</a>
                    </li> --}}

                    @auth
                        @if (auth()->user()->usertype == 'Course Provider')
                            <li class="navbar-item">
                                <a href="{{ url('/manageCourse') }}" class="navbar-link" data-nav-link>Manage
                                    Course</a>
                            </li>
                        @endif
                    @endauth


                    {{-- <li class="navbar-item">
                        <a href="{{ url('/contact') }}" class="navbar-link" data-nav-link>Contact</a>
                    </li> --}}

                    @guest()
                        <li class="navbar-item">
                            <a href="{{ url('/contact') }}" class="navbar-link" data-nav-link>Contact</a>
                        </li>
                    @endguest

                    @auth
                        @if (auth()->user()->usertype == 'Student')
                            <li class="navbar-item">
                                <a href="{{ url('/contact') }}" class="navbar-link" data-nav-link>Contact</a>
                            </li>
                        @endif
                    @endauth

                    @auth
                        <li class="navbar-item">
                            <a href="{{ route('signout') }}" class="navbar-link" data-nav-link><span
                                    class="LogColor">Logout</span></a>
                        </li>
                    @endauth



                </ul>

            </nav>

            <div class="header-actions">

                @auth
                    @if (auth()->user()->usertype == 'Course Provider')
                        <a class="btnn">
                            <span class="span">Course Provider</span>

                            <ion-icon name="radio-button-on-outline"></ion-icon>
                        </a>
                    @endif
                @endauth








                @guest()
                    <a href="{{ url('/checkout') }}" class="header-action-btn">
                        <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                    </a>
                @endguest

                @auth
                    @if (auth()->user()->usertype == 'Student')
                        <a href="{{ url('/checkout') }}" class="header-action-btn">
                            <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>
                        </a>
                    @endif
                @endauth


                {{-- <button class="header-action-btn" aria-label="cart" title="Cart">
          <ion-icon name="cart-outline" aria-hidden="true"></ion-icon>

          <span class="btn-badge">0</span>
        </button> --}}

                @auth()
                    <a class="btn has-before myb">
                        <span class="span">{{ auth()->user()->username }}</span>
                        <ion-icon name="person-circle-outline"></ion-icon>
                    </a>
                @else
                    <a href="#" class="btn has-before" id="form-open">
                        <span class="span">Login</span>

                        <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                    </a>
                @endauth

                <button class="header-action-btn" aria-label="open menu" data-nav-toggler>
                    <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
                </button>

            </div>

            <div class="overlay" data-nav-toggler data-overlay></div>

        </div>
    </header>

    <!-- Home -->
    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>
            <!-- Login From -->
            <div class="form login_form">
                <form method="POST" action="{{ route('login.custom') }}">

                    {{-- @if (session()->has('success'))
                        <div id="successMessage" class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('fail'))
                        <div id="successMessage" class="alert alert-danger">
                            {{ session()->get('fail') }}
                        </div>
                    @endif --}}
                    @csrf
                    <h2>Login</h2>

                    <div class="input_box">
                        <input type="email" value="{{ old('email') }}" name="email"
                            placeholder="Enter your email" />
                        <i class="uil uil-envelope-alt email"></i>
                        @if ($errors->has('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="input_box">
                        <input type="password" name="password" placeholder="Enter your password" />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check" />
                            <label for="check">Remember me</label>
                        </span>
                        <a href="#" class="forgot_pw">Forgot password?</a>
                    </div>

                    <button class="button" type="submit">Login Now</button>

                    <div class="login_signup">Don't have an account? <a href="#" id="signup">Signup</a>
                    </div>
                </form>
            </div>


            <!-- Signup From -->
            <div class="form signup_form">
                {{-- <form action="#" class="form"> --}}
                <form method="POST" class="form" action="{{ route('register.custom') }}">

                    {{-- @if (session()->has('success'))
                        <div id="successMessage" class="alert alert-success">
                            {{ session()->get('success') }}
                        </div>
                    @endif
                    @if (session()->has('fail'))
                        <div id="successMessage" class="alert alert-danger">
                            {{ session()->get('fail') }}
                        </div>
                    @endif --}}
                    @csrf
                    <h2>Signup</h2>
                    <div class="column">
                        <div class="input-box">
                            <label>Username</label>
                            <input type="text" name="username" value="{{ old('username') }}"
                                placeholder="Enter username" required />
                            @if ($errors->has('username'))
                                <span class="text-danger">{{ $errors->first('username') }}</span>
                            @endif
                        </div>

                        <div class="input-box">
                            <label>Firstname</label>
                            <input type="text" name="firstname" value="{{ old('firstname') }}"
                                placeholder="Enter firstname" required />
                            @if ($errors->has('firstname'))
                                <span class="text-danger">{{ $errors->first('firstname') }}</span>
                            @endif
                        </div>

                        <div class="input-box">
                            <label>Lastname</label>
                            <input type="text" name="lastname" value="{{ old('lastname') }}"
                                placeholder="Enter lastname" required />
                            @if ($errors->has('lastname'))
                                <span class="text-danger">{{ $errors->first('lastname') }}</span>
                            @endif
                        </div>
                    </div>

                    <div class="column">
                        <div class="input-box">
                            <label>Email Address</label>
                            <input type="email" name="email" value="{{ old('email') }}"
                                placeholder="Enter email address" required />
                            @if ($errors->has('email'))
                                <span style="color: red;font-size:15px">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Phone Number</label>
                            <input type="number" name="phone" value="{{ old('phone') }}"
                                placeholder="Enter phone number" required />
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div>
                        <div class="input-box">
                            <label>Birth Date</label>
                            <input type="date" name="dob" value="{{ old('dob') }}"
                                placeholder="Enter birth date" required />
                            @if ($errors->has('dob'))
                                <span class="text-danger">{{ $errors->first('dob') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="column">
                        <div class="input-box">
                            <label>Password</label>
                            <input type="password" name="password" placeholder="Enter password name" required />
                            @if ($errors->has('password'))
                                <span style="color: red;font-size:15px">{{ $errors->first('password') }}</span>
                            @endif
                        </div>

                        <div class="input-box">
                            <label>Confirm Password</label>
                            <input type="password" name="confirm_password" placeholder="Enter Confirm password "
                                required />
                            @if ($errors->has('confirm_password'))
                                <span
                                    style="color: red;font-size:15px">{{ $errors->first('confirm_password') }}</span>
                            @endif
                        </div>


                    </div>





                    <div id="student_fields">
                        <div class="column">



                            <div class="input-box">
                                <label>User Type</label>
                                <div class="select-box">
                                    <select name="usertype" id="user_type" required>
                                        <option value="Student">Student</option>
                                        <option value="Course Provider">Course Provider</option>
                                    </select>
                                </div>
                                @if ($errors->has('usertype'))
                                    <span class="text-danger">{{ $errors->first('usertype') }}</span>
                                @endif
                            </div>

                            <div class="input-box">
                                <label for="full_name">Area of Study<label>
                                        <input type="text" name="area_of_study"
                                            value="{{ old('area_of_study') }}" placeholder="Enter Area of Study">
                                        @if ($errors->has('area_of_study'))
                                            <span class="text-danger">{{ $errors->first('area_of_study') }}</span>
                                        @endif
                            </div>
                        </div>
                    </div>





                    <button type="submit">Register</button>
                    <div class="login_signup">Already have an account? <a href="#" id="login">Login</a>
                    </div>

                </form>

            </div>
        </div>
    </section>

    <!-----------body----------------->

    @yield('content')

    <!-----------body----------------->

    <!--
    - #FOOTER
  -->

    <footer class="footer" style="background-image: url('{{ url('/fronted/images/footer-bg.png') }}')">

        <div class="footer-top section">
            <div class="container grid-list">

                <div class="footer-brand">

                    <a href="#" class="logo">
                        <img src="{{ url('/fronted/images/logo-light.svg') }}" width="162" height="50"
                            alt="EduWeb logo">
                    </a>

                    <p class="footer-brand-text">
                        Lorem ipsum dolor amet consecto adi pisicing elit sed eiusm tempor incidid unt labore dolore.
                    </p>

                    <div class="wrapper">
                        <span class="span">Add:</span>

                        <address class="address">70-80 Upper St Norwich NR2</address>
                    </div>

                    <div class="wrapper">
                        <span class="span">Call:</span>

                        <a href="tel:+011234567890" class="footer-link">+01 123 4567 890</a>
                    </div>

                    <div class="wrapper">
                        <span class="span">Email:</span>

                        <a href="mailto:info@eduweb.com" class="footer-link">info@eduweb.com</a>
                    </div>

                </div>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Online Platform</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">About</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Courses</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Instructor</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Events</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Instructor Profile</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Purchase Guide</a>
                    </li>

                </ul>

                <ul class="footer-list">

                    <li>
                        <p class="footer-list-title">Links</p>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Contact Us</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Gallery</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">News & Articles</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">FAQ's</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Sign In/Registration</a>
                    </li>

                    <li>
                        <a href="#" class="footer-link">Coming Soon</a>
                    </li>

                </ul>

                <div class="footer-list">

                    <p class="footer-list-title">Contacts</p>

                    <p class="footer-list-text">
                        Enter your email address to register to our newsletter subscription
                    </p>

                    <form action="" class="newsletter-form">
                        <input type="email" name="email_address" placeholder="Your email" required
                            class="input-field">

                        <button type="submit" class="btn has-before">
                            <span class="span">Subscribe</span>

                            <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                        </button>
                    </form>

                    <ul class="social-list">

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-linkedin"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-twitter"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="social-link">
                                <ion-icon name="logo-youtube"></ion-icon>
                            </a>
                        </li>

                    </ul>

                </div>

            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">

                <p class="copyright">
                    Copyright 2022 All Rights Reserved by <a href="#" class="copyright-link">codewithsadee</a>
                </p>

            </div>
        </div>

    </footer>





    <!--
    - #BACK TO TOP
  -->

    <a href="#top" class="back-top-btn" aria-label="back top top" data-back-top-btn>
        <ion-icon name="chevron-up" aria-hidden="true"></ion-icon>
    </a>


    <script>
        setTimeout(function() {
            document.getElementById('notification').style.display = 'none';
        }, 2000);
    </script>

<script>
    setTimeout(function() {
        // Check if user is a guest
        @guest
            document.querySelector('#form-open').click();
        @endguest
    }, 2000);
</script>



    <!--
    - custom js link
  -->
    <script src="{{ url('/fronted/js/script.js') }}" defer></script>
    <script src="{{ url('/fronted/js/script2.js') }}" defer></script>

    <!--
    - ionicon link
  -->
    <script type="module" src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js') }}"></script>
    <script nomodule src="{{ url('https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script') }}>

</body>

</html>
