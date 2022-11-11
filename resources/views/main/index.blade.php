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
                    <div class="card  text-white" style="background: #032A63;">
                        <div class="card-body">
                            <h2>Останні підрозділи</h2>
                            @foreach($recentposts as $post)
                            <div class="d-flex border-bottom pt-3 pb-4 align-items-center justify-content-around">
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
                <div class="col-sm-12 grid-margin">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-8" style="border-right: 1px solid gray;">
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
                                  <span class="badge badge-danger font-weight-bold"></span>
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
                                        <a href="{{route('main.ranks')}}" class="link-secondary mb-3" style="text-decoration: none; text-underline: none; color: gray;">Переглянути всі</a>
                                    </div>
                                    @foreach($fiveposts as $post)
                                    <div class="d-flex justify-content-between align-items-center border-bottom pb-2 pt-2">
                                        <div class="" style="max-width: 50px;">
                                            <div class="rotate-img">
                                                <img src="{{asset('storage/' . $post->image)}}" alt="thumb" class="img-fluid" style="margin: 0 auto; width: 500px;">
                                            </div>
                                        </div>
                                        <h3 class="font-weight-500 mb-0" style="text-align: center;">
                                            {{$post->name}}
                                        </h3>
                                    </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
