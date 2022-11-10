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
        <header id="header">
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
                                    <a href="#" class="nav-link"></a>
                                </li>
                                    @auth()
                                        <li class="nav-item">
                                            <a href="{{route('admin.main.index')}}" class="nav-link">Вітаю, {{auth()->user()->name}}</a>
                                        </li>
                                    @if(auth()->user()->role == 0)
                                            <li class="nav-item">
                                                    <a href="{{route('admin.main.index')}}" class="nav-link">Адмін панель</a>
                                            </li>
                                        @endif
                                        <li class="nav-item">
                                            <form action="{{route('logout')}}" method="post">
                                                @csrf
{{--                                                <a role="button" >Вийти</a>--}}
                                                <input style="font-size: 18px; font-weight: 500;" type="submit" class="btn btn-primary ml-2 p-1" value="Вийти">
                                            </form>
                                        </li>
                                    @endauth
                                @guest()
                                    <li class="nav-item">
                                        <a href="{{route('login')}}" class="nav-link">Вхід</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="{{route('register')}}" class="nav-link">Реєстрація</a>
                                    </li>
                                @endguest

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
                                            <a class="nav-link" href="#">Головна</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Звання</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Підрозділи</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <ul class="social-media">
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
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
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
            <div class="footer-top">
                <div class="container">
                    <div class="row d-flex justify-content-between">
                        <div class="col-sm-7">
                            <span style="padding: 0 5px; font-size: 28px; color: white; background: linear-gradient(0deg, rgba(228,255,0,0.5) 50%, rgba(30,177,207,0.5) 50%); border-radius: 7px;" class="footer-logo">Збройні сили України</span>
                            <h5 class="font-weight-normal mt-4 mb-5">
                                Newspaper is your news, entertainment, music fashion website. We
                                provide you with the latest breaking news and videos straight from
                                the entertainment industry.
                            </h5>
                            <ul class="social-media mb-3">
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-youtube"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-twitter"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-sm-5">
                            <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="footer-border-bottom pb-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <img
                                                    src="{{asset('assets/images/dashboard/home_1.jpg')}}"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                            <div class="col-9">
                                                <h5 class="font-weight-600">
                                                    Cotton import from USA to soar was American traders
                                                    predict
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="footer-border-bottom pb-2 pt-2">
                                        <div class="row">
                                            <div class="col-3">
                                                <img
                                                    src="{{asset('assets/images/dashboard/home_2.jpg')}}"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                            <div class="col-9">
                                                <h5 class="font-weight-600">
                                                    Cotton import from USA to soar was American traders
                                                    predict
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div>
                                        <div class="row">
                                            <div class="col-3">
                                                <img
                                                    src="{{asset('assets/images/dashboard/home_3.jpg')}}"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                            <div class="col-9">
                                                <h5 class="font-weight-600 mb-3">
                                                    Cotton import from USA to soar was American traders
                                                    predict
                                                </h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="d-sm-flex justify-content-between align-items-center">
                                <div class="fs-14 font-weight-600">
                                    © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>. All rights reserved.
                                </div>
                                <div class="fs-14 font-weight-600">
                                    Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

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
