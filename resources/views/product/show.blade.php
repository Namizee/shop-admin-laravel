@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6 d-flex align-items-center">
                    <h1 class="m-0">{{ $product->title }}</h1>
                    <a class="ml-2" href="{{ route('product.edit', $product) }}"><i class="fas fa-pencil-alt"></i></a>
                    <form class="ml-2" action="{{ route('product.delete', $product) }}" method="POST">
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
                                    <td>{{ $product->id }}</td>
                                </tr>
                                <tr>
                                    <td>Название</td>
                                    <td>{{ $product->title }}</td>
                                </tr>
                                <tr>
                                    <td>Описание</td>
                                    <td>{{ $product->description }}</td>
                                </tr>
                                <tr>
                                    <td>Полное описание</td>
                                    <td>{!! $product->content !!}</td>
                                </tr>
                                <tr>
                                    <td>Картинка</td>
                                    <td>
                                        <img src="{{ asset('storage/' . $product->image) }}" alt="">
                                    </td>
                                </tr>
                                <tr>
                                    <td>Цена</td>
                                    <td>{{ $product->price }}</td>
                                </tr>
                                <tr>
                                    <td>Кол-во</td>
                                    <td>{{ $product->count }}</td>
                                </tr>
                                <tr>
                                    <td>Категория</td>
                                    <td>{{ $product->category_id }}</td>
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
