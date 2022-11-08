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
                    <form action="{{route('admin.ranks.delete', $rank->id)}}" method="post">
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
    <div class="text-center" style="max-width: 900px; display: block; margin: 0 auto;">
        <form action="{{route('admin.ranks.update', $rank->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="mb-2">
                <input type="text" class="form-control" name="name" placeholder="Назва звання" value="{{$rank->name}}">
                @error('name')
                <div class="text-danger">
                    Це поле потрібно заповнити!
                </div>
                @enderror
            </div>



            <div class="mb-2">
                <!-- select -->
                <div class="form-group">
                    <label>Тип ЗСУ</label>
                    <select name="category_id" class="form-control" >
                        @foreach($categories as $category)
                            <option value="{{$category->id}}"
                                {{$category->id == $rank->category_id ? 'selected' : ''}}>
                                {{$category->name}}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label>Опис звання</label>
                <textarea name="description" class="form-control" rows="10" placeholder="Інформацію вказуйте тут">{{$rank->description}}</textarea>
                @error('description')
                <div class="text-danger text-center">
                    Це поле потрібно заповнити!
                </div>
                @enderror
            </div>


            <div class="form-group">
                <label for="exampleInputFile">Фото</label>
                <div class="d-block">
                    <img src="{{asset('storage/' . $rank->image)}}" alt="image" class="mb-2" style="margin: 0 auto; border: 2px solid #6c757d; border-radius: 5px; padding: 5px; width: 200px;">
                </div>
                <div class="mt-3 input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="image">
                        <label class="custom-file-label d-flex justify-content-start">Виберіть фото</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                    </div>
                </div>
                @error('image')
                <div class="text-danger text-center">
                    Виберіть фото!
                </div>
                @enderror
            </div>



            <input type="submit" class="btn btn-secondary mb-2" value="Редагувати"></input>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
