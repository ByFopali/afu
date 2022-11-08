@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категорія звання</h1>
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
    <div class="text-center" style="max-width: 350px; display: block; margin: 0 auto;">
        <form action="{{route('admin.categories.store')}}" method="post">
            @csrf
            <div class="mb-2">
                <input type="text" class="form-control" name="name" placeholder="Назва категорії" value="">
                @error('name')
                <div class="text-danger">
                    Це поле потрібно заповнити!
                </div>
                @enderror
            </div>


            <div class="mb-2">
                <!-- select -->
                <div class="form-group">
                    <label>Тип звання</label>
                    <select name="rank_type_id" class="form-control" >
                        @foreach($ranktypes as $ranktype)
                            <option value="{{$ranktype->id}}"
                                {{$ranktype->id == old('rank_type_id') ? 'selected' : ''}}>{{$ranktype->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <input type="submit" class="btn btn-secondary" value="Додати"></input>
        </form>
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
