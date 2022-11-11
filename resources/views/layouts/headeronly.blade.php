<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title> Довідник ЗСУ</title>
    <!-- plugin css for this page -->
    <link
        rel="stylesheet"
        href="{{asset('./assets/vendors/mdi/css/materialdesignicons.min.css')}}"
    />
    <link rel="stylesheet" href="{{asset('assets/vendors/aos/dist/aos.css/aos.css')}}" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.png')}}" />

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <!-- endinject -->
</head>

<body>
<div class="container-scroller">
    <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header" style="margin: 0 0 35px 0;">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="navbar-top">
                        <div class="d-flex justify-content-between align-items-center">
                            <ul class="navbar-top-left-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"></a>
                                </li>
                            </ul>
                            <ul class="navbar-top-right-menu">
                                <li class="nav-item">
                                    <a href="#" class="nav-link"><i class="mdi mdi-magnify"></i></a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('login')}}" class="nav-link">Вхід</a>
                                </li>
                                <li class="nav-item">
                                    @guest()
                                    <a href="{{route('register')}}" class="nav-link">Реєстрація</a>
                                    @endguest
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="navbar-bottom">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <a class="navbar-brand" href="{{route('main.index')}}">
                                    <span style="padding: 0 5px; font-size: 28px; color: white; background: linear-gradient(0deg, rgba(228,255,0,0.5) 50%, rgba(30,177,207,0.5) 50%); border-radius: 7px;" class="footer-logo">Збройні сили України</span>
                                    </a>
                            </div>
                            <div>
                                <button
                                    class="navbar-toggler"
                                    type="button"
                                    data-target="#navbarSupportedContent"
                                    aria-controls="navbarSupportedContent"
                                    aria-expanded="false"
                                    aria-label="Toggle navigation"
                                >
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div
                                    class="navbar-collapse justify-content-center collapse"
                                    id="navbarSupportedContent"
                                >
                                    <ul
                                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                                    >
                                        <li>
                                            <button class="navbar-close">
                                                <i class="mdi mdi-close"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item active">
                                            <a class="nav-link" href="{{route('main.index')}}">Головна</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('main.ranks')}}">Звання</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{route('main.zsylists')}}">Підрозділи</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-media">
                                <li>
                                    <a href="https://uk-ua.facebook.com/GeneralStaff.ua/" target="_blank">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/channel/UC10u3bDYe1HMHOQLvufXqjA" target="_blank">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/generalstaffua/with_replies" target="_blank">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </header>


      @yield('content')
        <!-- partial -->
    </div>
</div>
<!-- inject:js -->
<script src="{{asset('assets/vendors/js/vendor.bundle.base.js')}}"></script>
<!-- endinject -->
<!-- plugin js for this page -->
<script src="{{asset('assets/vendors/aos/dist/aos.js/aos.js')}}"></script>
<!-- End plugin js for this page -->
<!-- Custom js for this page-->
<script src="{{asset('./assets/js/demo.js')}}"></script>
<script src="{{asset('./assets/js/jquery.easeScroll.js')}}"></script>
<!-- End custom js for this page-->
</body>
</html>
