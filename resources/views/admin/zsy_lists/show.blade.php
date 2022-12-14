@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">{{$zsylist->name}}</h1>
                    <a href="{{route('admin.zsy_lists.create')}}" class="ml-2">
                        <img src="{{asset('img/plus.png')}}" alt="add" style="width: 20px;">
                    </a>
                    <a href="{{route('admin.zsy_lists.edit', $zsylist->id)}}" class="ml-2">
                        <img src="{{asset('img/editing.png')}}" alt="add" style="width: 20px;">
                    </a>
                    <form action="{{route('admin.zsy_lists.delete', $zsylist->id)}}" method="post">
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
                        <li class="breadcrumb-item active">Show</li>
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
                                <tbody>
                                    <tr>
                                        <td style="font-weight: bold;">ID</td>
                                        <td>{{$zsylist->id}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">??????????</td>
                                        <td>{{$zsylist->name}}</td>
                                    </tr>
                                    <tr>
                                        <td style="font-weight: bold;">?????? ??????</td>
                                        <td>{{$zsylist->zsyType->name}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                    <div class="form-group d-flex justify-content-center">
                        <div class="d-block mt-5">
                            <img src="{{asset('storage/' . $zsylist->image)}}" alt="image" class="mb-2" style="margin: 0 auto; width: 500px;">
                        </div>

                    </div>
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
