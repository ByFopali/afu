@extends('layouts.main')
@section('content')
    <div class="content-wrapper">
        <div class="container">
            <div class="row" data-aos="fade-up">
                <div class="col-lg-12 stretch-card grid-margin">
                    <div class="card">
                        <div class="card-body">
                            @foreach($allposts as $post)
                                <div class="row">
                                    <div class="col-sm-2 grid-margin">
                                        <div class="position-relative">
                                            <div class="rotate-img">
                                                <img src="{{asset('storage/' . $post->image)}}" alt="thumb" class="img-fluid" style="margin: 0 auto; width: 500px;">
                                            </div>
                                            <div class="badge-positioned">
                                                <span class="badge badge-danger font-weight-bold"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-10  grid-margin">
                                        <h2 class="mb-2 font-weight-500">
                                            {{$post->name}}
                                        </h2>
                                        <div class="fs-13 mb-2">
                                            <span class="mr-2">
                                                Оновлено {{$post->created_at->format('d.m.Y')}}
                                            </span>
                                        </div>
                                        <p class="mb-0">
                                            Категорія: {{$post->categoryId->name}}
                                        </p>
                                        <p class="mb-0">
                                            Тип звання:  @foreach($categories as $category)
                                                @if($category->id == $post->category_id)
                                                    {{$category->rankType->name}}
                                                @endif
                                            @endforeach
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
