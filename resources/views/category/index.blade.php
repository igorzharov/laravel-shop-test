@extends('layouts.main')

@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Категории</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Категории</li>
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Responsive Hover Table</h3>
                            <div class="card-tools">
                                <div class="input-group input-group-sm" style="width: 350px;">
                                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-default">
                                            <i class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Название</th>
                                        <th>Путь категории</th>
                                        <th>Статус</th>
                                        <th>Дата обновления</th>
                                        <th>Дата добавления</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @forelse($categories as $category)

                                        <tr>
                                            <td>{{ $category->id }}</td>
                                            <td>{{ $category->name }}</td>
                                            <td>{{ $category->path }}</td>
                                            <td>{{ $category->status }}</td>
                                            <td>{{ $category->date_modified }}</td>
                                            <td>{{ $category->date_added }}</td>
                                        </tr>

                                    @empty

                                        <tr>
                                            <td colspan="6">Нет категорий</td>
                                        </tr>

                                    @endforelse

                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->

@endsection
