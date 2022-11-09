@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Користувачі</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        <li class="breadcrumb-item active">Create</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="text-center" style="max-width: 750px; display: block; margin: 0 auto;">
        <form action="{{route('admin.users.store')}}" method="post">
            @csrf


            <div class="card card-primary" style="margin: 0 10px;">
                <div class="card-header">
                    <h3 class="card-title">Створення нового користувача</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body w-50 d-block" style="margin: 0 auto;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Імя</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Вкажіть імя користувача" value="">
                            @error('name')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Електронна пошта</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Вкажіть назву електронної пошти" value="">
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <label for="exampleInputEmail1">Пароль</label>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" name="password" id="password3" class="form-control" data-toggle="password" placeholder="Пароль" value="">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                        <i style="cursor: pointer;" id="VisibilityBtn" class="far fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            @error('password')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer">
                        <input type="submit" class="btn btn-primary" value="Додати"></input>
                    </div>
                </form>
            </div>






        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
