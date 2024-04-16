@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление товара</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('main.index') }}">Главная</a>
                        </li>
                        <li class="breadcrumb-item active">Добавление товара</li>
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
                <div class="col-12">
                    <form action="{{ route('product.store') }}" class="w-75" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="title"
                                   placeholder="Название товара" value="{{ old('title') }}">
                            @error('title')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="description"
                                   placeholder="Описание товара" value="{{ old('description') }}">
                            @error('description')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{ old('content') }}</textarea>
                            @error('content')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Добавить изображение</label>
                            <div class="input-group">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" name="preview_image">
                                    <label class="custom-file-label">Выберите изображение</label>
                                </div>
                            </div>
                            @error('preview_image')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="price"
                                   placeholder="Цена" value="{{ old('price') }}">
                            @error('price')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="count"
                                   placeholder="Кол-во товара" value="{{ old('count') }}">
                            @error('count')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Выберите категорию</label>
                            <select class="form-control" name="category_id">
                                <option value=""></option>
                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        @selected(old('category_id') == $category->id)
                                        >
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('category_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Выберите бренд</label>
                            <select class="form-control" name="brand_id">
                                <option value=""></option>
                                @foreach($brands as $brand)
                                    <option
                                        value="{{ $brand->id }}"
                                        @selected(old('brand_id') == $brand->id)>
                                        {{ $brand->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('brand_id')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label>Выберите цвет</label>
                            @foreach($colors as $color)
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox"
                                           name="color_ids[]"
                                           @if(is_array(old('color_ids')))
                                                @checked(in_array($color->id, old('color_ids')))
                                           @endif
                                           value="{{ $color->id }}">
                                    <i class="fas fa-square"  style="color:{{ $color->code }}"></i>
                                </div>
                            @endforeach
                            @error('color_ids')
                             <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary" value="Добавить">
                    </form>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
