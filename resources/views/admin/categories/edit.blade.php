@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">Тип звання</h1>
                    <a href="{{route('admin.rank_types.create')}}" class="ml-2">
                        <img src="{{asset('img/plus.png')}}" alt="add" style="width: 20px;">
                    </a>
                    <form action="{{route('admin.rank_types.delete', $ranktype->id)}}" method="post">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 bg-transparent">
                            <img role="button" src="{{asset('img/delete.png')}}" alt="edit" style="width: 20px;">
                            {{--                                                    <i class="fas fa-trash text-danger" role="button"></i>--}}
                        </button>
                    </form>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="text-center" style="max-width: 350px; display: block; margin: 0 auto;">
        <form action="{{route('admin.rank_types.update', $ranktype->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="mb-2">
                <input type="text" class="form-control" name="name" placeholder="Назва виду ЗСУ" value="{{$ranktype->name}}">
                @error('name')
                <div class="text-danger">
                    Це поле потрібно заповнити!
                </div>
                @enderror
            </div>
            <input type="submit" class="btn btn-secondary" value="Редагувати"></input>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
