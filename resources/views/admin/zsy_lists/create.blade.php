@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Список підрозділів ЗСУ</h1>
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
    <div class="text-center" style="max-width: 500px; display: block; margin: 0 auto;">
        <form action="{{route('admin.zsy_lists.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-2">
                <input type="text" class="form-control" name="name" placeholder="Назва підрозділу ЗСУ" value="">
                @error('name')
                <div class="text-danger text-center">
                    {{$message}}
                </div>
                @enderror
            </div>


            <div class="mb-2">
                    <!-- select -->
                    <div class="form-group">
                        <label>Тип ЗСУ</label>
                        <select name="zsy_type_id" class="form-control" >
                            @foreach($zsytypes as $zsytype)
                                <option value="{{$zsytype->id}}"
                                    {{$zsytype->id == old('zsy_type_id') ? 'selected' : ''}}>{{$zsytype->name}}</option>
                            @endforeach
                        </select>
                        @error('zsy_type_id')
                        <div class="text-danger">
                            {{$message}}
                        </div>
                        @enderror
                </div>
            </div>


            <div class="form-group">
                <label for="exampleInputFile">Фото</label>
                <div class="input-group">
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
                    {{$message}}
                </div>
                @enderror
            </div>




            <input type="submit" class="btn btn-secondary" value="Додати"></input>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
