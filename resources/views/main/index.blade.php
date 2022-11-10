@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row d-flex align-items-center" data-aos="fade-up">
                <div class="col-xl-8 stretch-card grid-margin">
                    <div class="position-relative">
                        <img
                            src="{{asset('img/bukr221109_002_ausbildung_01v.jpg')}}"
                            alt="banner"
                            class="img-fluid"
                            style="border-radius: 10px;"
                        />
                        <div class="banner-content">
                            <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                                наживо
                            </div>
                            <h1 class="mb-0">Довідник</h1>
                            <h1 class="mb-2">
                                Збройні Сили України
                            </h1>
                            <div class="fs-12">
                                <span class="mr-2"></span>З 24.02.2022
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 stretch-card grid-margin">
                    <div class="card bg-dark text-white">
                        <div class="card-body">
                            <h2>Останні підрозділи</h2>
                            @foreach($recentposts as $post)
                            <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-around">
                                <div class="row d-flex align-items-center">
                                    <div class="col-8">
                                        <h5 class="">{{$post->name}}</h5>
                                        <div class="fs-12">
                                            <span class="mr-2">Оновлено {{$post->created_at->format('d.m.Y')}}</span>
                                        </div>
                                    </div>
                                    <div class="col-4 rotate-img">
                                        <img src="{{asset('storage/' . $post->image)}}" alt="thumb" class="img-fluid img-lg" style="margin: 0 auto; width: 500px;">
{{--                                        <img--}}
{{--                                            src="{{asset('assets/images/dashboard/home_1.jpg')}}"--}}
{{--                                            alt="thumb"--}}
{{--                                            class="img-fluid img-lg"--}}
{{--                                        />--}}
                                    </div>
                                </div>

                            </div>
                            @endforeach
{{--                            <div--}}
{{--                                class="d-flex border-bottom-blue pb-4 pt-4 align-items-center justify-content-between"--}}
{{--                            >--}}
{{--                                <div class="pr-3">--}}
{{--                                    <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>--}}
{{--                                    <div class="fs-12">--}}
{{--                                        <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="rotate-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('assets/images/dashboard/home_2.jpg')}}"--}}
{{--                                        alt="thumb"--}}
{{--                                        class="img-fluid img-lg"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                            <div--}}
{{--                                class="d-flex pt-4 align-items-center justify-content-between"--}}
{{--                            >--}}
{{--                                <div class="pr-3">--}}
{{--                                    <h5>Virus Kills Member Of Advising Iran’s Supreme</h5>--}}
{{--                                    <div class="fs-12">--}}
{{--                                        <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="rotate-img">--}}
{{--                                    <img--}}
{{--                                        src="{{asset('assets/images/dashboard/home_3.jpg')}}"--}}
{{--                                        alt="thumb"--}}
{{--                                        class="img-fluid img-lg"--}}
{{--                                    />--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">

                            @foreach($allposts as $post)
                                <div class="row">
                                    <div class="col-sm-3 grid-margin">
                                        <div class="position-relative">
                                            <div class="rotate-img">
                                                <img src="{{asset('storage/' . $post->image)}}" alt="thumb" class="img-fluid" style="margin: 0 auto; width: 500px;">
                                            </div>
                                            <div class="badge-positioned">
                            <span class="badge badge-danger font-weight-bold"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-9  grid-margin">
                                        <h2 class="mb-2 font-weight-500">
                                            {{$post->name}}
                                        </h2>
                                        <div class="fs-13 mb-2">
                                            <span class="mr-2">
                                                Оновлено {{$post->created_at->format('d.m.Y')}}
                                            </span>
                                        </div>
                                        <p class="mb-0">
                                            Тип: {{$post->zsyType->name}}
                                        </p>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>



            <div class="row" data-aos="fade-up">
                <div class="col-sm-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="card-title">
                                        Емблеми підрозділів
                                    </div>
                                    <div class="row">
                                        @foreach($allposts as $post)
                                        <div class="col-sm-3 grid-margin">
                                            <div class="position-relative">
                                                <div class="rotate-img">
                                                    <img src="{{asset('storage/' . $post->image)}}" alt="thumb" class="img-fluid" style="margin: 0 auto; width: 500px;">
                                                </div>
                                                <div class="badge-positioned w-90">
                                                    <div class="d-flex justify-content-between align-items-center">
                                  <span class="badge badge-danger font-weight-bold">{{$post->zsyType->name}}</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="card-title">
                                            Звання
                                        </div>
                                        <a href="#" class="link-secondary mb-3" style="text-decoration: none; text-underline: none; color: gray;">Переглянути всі</a>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img
                                                    src="assets/images/dashboard/home_11.jpg"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                        <h3 class="font-weight-600 mb-0">
                                            Apple Introduces Apple Watch
                                        </h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img
                                                    src="assets/images/dashboard/home_12.jpg"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                        <h3 class="font-weight-600 mb-0">
                                            SEO Strategy & Google Search
                                        </h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img
                                                    src="assets/images/dashboard/home_13.jpg"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                        <h3 class="font-weight-600 mb-0">
                                            Cycling benefit & disadvantag
                                        </h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center border-bottom pt-3 pb-2">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img
                                                    src="assets/images/dashboard/home_14.jpg"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                        <h3 class="font-weight-600">
                                            The Major Health Benefits of
                                        </h3>
                                    </div>
                                    <div class="d-flex justify-content-between align-items-center pt-3">
                                        <div class="div-w-80 mr-3">
                                            <div class="rotate-img">
                                                <img
                                                    src="assets/images/dashboard/home_15.jpg"
                                                    alt="thumb"
                                                    class="img-fluid"
                                                />
                                            </div>
                                        </div>
                                        <h3 class="font-weight-600 mb-0">
                                            Powerful Moments of Peace
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


{{--            <div class="row" data-aos="fade-up">--}}
{{--                <div class="col-sm-12">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="row">--}}
{{--                                <div class="col-xl-6">--}}
{{--                                    <div class="card-title">--}}
{{--                                        Sport light--}}
{{--                                    </div>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-xl-6 col-lg-8 col-sm-6">--}}
{{--                                            <div class="rotate-img">--}}
{{--                                                <img--}}
{{--                                                    src="{{asset('assets/images/dashboard/home_16.jpg')}}"--}}
{{--                                                    alt="thumb"--}}
{{--                                                    class="img-fluid"--}}
{{--                                                />--}}
{{--                                            </div>--}}
{{--                                            <h2 class="mt-3 text-primary mb-2">--}}
{{--                                                Newsrooms exercise..--}}
{{--                                            </h2>--}}
{{--                                            <p class="fs-13 mb-1 text-muted">--}}
{{--                                                <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                            </p>--}}
{{--                                            <p class="my-3 fs-15">--}}
{{--                                                Lorem Ipsum has been the industry's standard dummy--}}
{{--                                                text ever since the 1500s, when an unknown printer--}}
{{--                                                took--}}
{{--                                            </p>--}}
{{--                                            <a href="#" class="font-weight-600 fs-16 text-dark"--}}
{{--                                            >Read more</a--}}
{{--                                            >--}}
{{--                                        </div>--}}
{{--                                        <div class="col-xl-6 col-lg-4 col-sm-6">--}}
{{--                                            <div class="border-bottom pb-3 mb-3">--}}
{{--                                                <h3 class="font-weight-600 mb-0">--}}
{{--                                                    Social distancing is ..--}}
{{--                                                </h3>--}}
{{--                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                    <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                                </p>--}}
{{--                                                <p class="mb-0">--}}
{{--                                                    Lorem Ipsum has been the industry's--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="border-bottom pb-3 mb-3">--}}
{{--                                                <h3 class="font-weight-600 mb-0">--}}
{{--                                                    Panic buying is forcing..--}}
{{--                                                </h3>--}}
{{--                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                    <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                                </p>--}}
{{--                                                <p class="mb-0">--}}
{{--                                                    Lorem Ipsum has been the industry's--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="border-bottom pb-3 mb-3">--}}
{{--                                                <h3 class="font-weight-600 mb-0">--}}
{{--                                                    Businesses ask hundreds..--}}
{{--                                                </h3>--}}
{{--                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                    <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                                </p>--}}
{{--                                                <p class="mb-0">--}}
{{--                                                    Lorem Ipsum has been the industry's--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div>--}}
{{--                                                <h3 class="font-weight-600 mb-0">--}}
{{--                                                    Tesla's California factory..--}}
{{--                                                </h3>--}}
{{--                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                    <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                                </p>--}}
{{--                                                <p class="mb-0">--}}
{{--                                                    Lorem Ipsum has been the industry's--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-xl-6">--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="card-title">--}}
{{--                                                Sport light--}}
{{--                                            </div>--}}
{{--                                            <div class="border-bottom pb-3">--}}
{{--                                                <div class="rotate-img">--}}
{{--                                                    <img--}}
{{--                                                        src="{{asset('assets/images/dashboard/home_17.jpg')}}"--}}
{{--                                                        alt="thumb"--}}
{{--                                                        class="img-fluid"--}}
{{--                                                    />--}}
{{--                                                </div>--}}
{{--                                                <p class="fs-16 font-weight-600 mb-0 mt-3">--}}
{{--                                                    Kaine: Trump Jr. may have--}}
{{--                                                </p>--}}
{{--                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                    <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                            <div class="pt-3 pb-3">--}}
{{--                                                <div class="rotate-img">--}}
{{--                                                    <img--}}
{{--                                                        src="{{asset('assets/images/dashboard/home_18.jpg')}}"--}}
{{--                                                        alt="thumb"--}}
{{--                                                        class="img-fluid"--}}
{{--                                                    />--}}
{{--                                                </div>--}}
{{--                                                <p class="fs-16 font-weight-600 mb-0 mt-3">--}}
{{--                                                    Kaine: Trump Jr. may have--}}
{{--                                                </p>--}}
{{--                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                    <span class="mr-2">Photo </span>10 Minutes ago--}}
{{--                                                </p>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6">--}}
{{--                                            <div class="card-title">--}}
{{--                                                Celebrity news--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-12">--}}
{{--                                                    <div class="border-bottom pb-3">--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-5 pr-2">--}}
{{--                                                                <div class="rotate-img">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{asset('assets/images/dashboard/home_19.jpg')}}"--}}
{{--                                                                        alt="thumb"--}}
{{--                                                                        class="img-fluid w-100"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-7 pl-2">--}}
{{--                                                                <p class="fs-16 font-weight-600 mb-0">--}}
{{--                                                                    Online shopping ..--}}
{{--                                                                </p>--}}
{{--                                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                                    <span class="mr-2">Photo </span>10--}}
{{--                                                                    Minutes ago--}}
{{--                                                                </p>--}}
{{--                                                                <p class="mb-0 fs-13">--}}
{{--                                                                    Lorem Ipsum has been--}}
{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-12">--}}
{{--                                                    <div class="border-bottom pb-3 pt-3">--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-5 pr-2">--}}
{{--                                                                <div class="rotate-img">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{asset('assets/images/dashboard/home_20.jpg')}}"--}}
{{--                                                                        alt="thumb"--}}
{{--                                                                        class="img-fluid w-100"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-7 pl-2">--}}
{{--                                                                <p class="fs-16 font-weight-600 mb-0">--}}
{{--                                                                    Online shopping ..--}}
{{--                                                                </p>--}}
{{--                                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                                    <span class="mr-2">Photo </span>10--}}
{{--                                                                    Minutes ago--}}
{{--                                                                </p>--}}
{{--                                                                <p class="mb-0 fs-13">--}}
{{--                                                                    Lorem Ipsum has been--}}
{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-12">--}}
{{--                                                    <div class="border-bottom pb-3 pt-3">--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-5 pr-2">--}}
{{--                                                                <div class="rotate-img">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{asset('assets/images/dashboard/home_21.jpg')}}"--}}
{{--                                                                        alt="thumb"--}}
{{--                                                                        class="img-fluid w-100"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-7 pl-2">--}}
{{--                                                                <p class="fs-16 font-weight-600 mb-0">--}}
{{--                                                                    Online shopping ..--}}
{{--                                                                </p>--}}
{{--                                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                                    <span class="mr-2">Photo </span>10--}}
{{--                                                                    Minutes ago--}}
{{--                                                                </p>--}}
{{--                                                                <p class="mb-0 fs-13">--}}
{{--                                                                    Lorem Ipsum has been--}}
{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="row">--}}
{{--                                                <div class="col-sm-12">--}}
{{--                                                    <div class="pt-3">--}}
{{--                                                        <div class="row">--}}
{{--                                                            <div class="col-sm-5 pr-2">--}}
{{--                                                                <div class="rotate-img">--}}
{{--                                                                    <img--}}
{{--                                                                        src="{{asset('assets/images/dashboard/home_22.jpg')}}"--}}
{{--                                                                        alt="thumb"--}}
{{--                                                                        class="img-fluid w-100"--}}
{{--                                                                    />--}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
{{--                                                            <div class="col-sm-7 pl-2">--}}
{{--                                                                <p class="fs-16 font-weight-600 mb-0">--}}
{{--                                                                    Online shopping ..--}}
{{--                                                                </p>--}}
{{--                                                                <p class="fs-13 text-muted mb-0">--}}
{{--                                                                    <span class="mr-2">Photo </span>10--}}
{{--                                                                    Minutes ago--}}
{{--                                                                </p>--}}
{{--                                                                <p class="mb-0 fs-13">--}}
{{--                                                                    Lorem Ipsum has been--}}
{{--                                                                </p>--}}
{{--                                                            </div>--}}
{{--                                                        </div>--}}
{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>
@endsection
