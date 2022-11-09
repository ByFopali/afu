@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">Користувачі</h1>
                    <a href="{{route('admin.users.create')}}" class="ml-2">
                        <img src="{{asset('img/plus.png')}}" alt="add" style="width: 20px;">
                    </a>
                    <form action="{{route('admin.users.delete', $user->id)}}" method="post">
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
    <div class="text-center" style="max-width: 750px; display: block; margin: 0 auto;">
        <form action="{{route('admin.users.update', $user->id)}}" method="POST">
            @csrf
            @method('patch')
            <div class="card card-primary" style="margin: 0 10px;">
                <div class="card-header">
                    <h3 class="card-title">Редагування користувача</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form>
                    <div class="card-body w-50 d-block" style="margin: 0 auto;">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Імя</label>
                            <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Вкажіть імя користувача" value="{{$user->name}}">
                            @error('name')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Електронна пошта</label>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Вкажіть назву електронної пошти" value="{{$user->email}}">
                            @error('email')
                            <div class="text-danger">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                        <div class="mb-2">
                            <!-- select -->
                            <div class="form-group">
                                <label>Вибір ролі</label>
                                <select name="role" class="form-control" >
                                    @foreach($roles as $id => $role)
                                        <option value="{{$id}}"
                                            {{$id == $user->role ? 'selected' : ''}}>{{$role}}</option>
                                    @endforeach
                                </select>
                                @error('role')
                                <div class="text-danger">
                                    {{$message}}
                                </div>
                                @enderror
                            </div>
                        </div>
                        <label for="exampleInputPassword1">Пароль</label>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="password" name="password" id="password3" class="form-control" data-toggle="password" value="{{$user->password}}">
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
                        <input type="submit" class="btn btn-primary" value="Редагувати"></input>
                    </div>
                </form>
            </div>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
