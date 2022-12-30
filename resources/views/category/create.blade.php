@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавить категорию</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">

                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Quick Example</h3>
                        </div>
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Название категории</label>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Введите название категории" aria-describedby="name-error" value="{{ old('name') }}" aria-invalid="true">
                                    @error('name')
                                        <span id="name-error" class="error invalid-feedback">Название категории должно содержать от 5 до 255 символов</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="sub_category_id">Подкатегория</label>
                                    <input type="password" class="form-control" id="sub_category_id">
                                </div>

                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Добавить</button>
                            </div>

                        </form>
                    </div>

                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->

    </div>
    <!-- /.content -->

@endsection
