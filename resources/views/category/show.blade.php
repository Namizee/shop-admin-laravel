@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">{{ $category->title }}</h1>
                    <a class="ml-2" href="{{ route('category.edit', $category->id) }}"><i class="fas fa-pencil-alt"></i></a>
                    <form class="ml-2" action="{{ route('category.delete', $category->id) }}" method="POST">
                        @csrf
                        @method('delete')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="text-danger fas fa-trash" role="button"></i>
                        </button>
                    </form>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item active">Главная</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6">
                    <div class="card">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                <tr>
                                    <td>ID</td>
                                    <td>{{ $category->id }}</td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{ $category->title }}</td>
                                </tr>
                                <tr>
                                    <td>Родительская категория</td>
                                    <td>{{ $category->parent->title ?? 'Родительская категория'}}</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
