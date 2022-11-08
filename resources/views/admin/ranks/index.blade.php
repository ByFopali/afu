@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">Звання ЗСУ</h1>
                    <a href="{{route('admin.ranks.create')}}" class="ml-2">
                        <img src="{{asset('img/plus.png')}}" alt="add" style="width: 20px;">
                    </a>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Index</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-8" style="display: block; margin: 0 auto;">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-body table-responsive p-0 text-center">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Назва</th>
                                    <th>Категорія</th>
                                    <th colspan="3">Дія</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($ranks as $rank)
                                    <tr>
                                        <td>{{$rank->id}}</td>
                                        <td>{{$rank->name}}</td>
                                        <td>{{$rank->categoryId->name}}</td>
                                        <td>
                                            <a href="{{route('admin.ranks.show', $rank->id)}}">
                                                <img src="{{asset('img/view.png')}}" alt="view" style="width: 20px;">
                                            </a>
                                        </td>
                                        <td>
                                            <a class="text-success"
                                               href="{{route('admin.ranks.edit', $rank->id)}}">
                                                <img src="{{asset('img/create.png')}}" alt="edit" style="width: 20px;">
                                            </a>
                                        </td>
                                        <td>
                                            <form action="{{route('admin.ranks.delete', $rank->id)}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="border-0 bg-transparent">
                                                    <img role="button" src="{{asset('img/delete.png')}}" alt="edit" style="width: 20px;">
{{--                                                    <i class="fas fa-trash text-danger" role="button"></i>--}}
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
