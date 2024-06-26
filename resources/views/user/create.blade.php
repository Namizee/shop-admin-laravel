@extends('layouts.main')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Добавление пользователя</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">
                            <a href="{{ route('main.index') }}">Главная</a>
                        </li>
                        <li class="breadcrumb-item active">Добавление пользователя</li>
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
                    <form action="{{ route('user.store') }}" class="w-25" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name"
                                   placeholder="Имя" value="{{ old('name') }}">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="surname"
                                   placeholder="Фамилия" value="{{ old('surname') }}">
                            @error('surname')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address"
                                   placeholder="Адрес" value="{{ old('address') }}">
                            @error('address')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="date" class="form-control" name="birthday"
                                   value="{{ old('birthday') }}">
                            @error('birthday')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="gender">
                                <option value="">Выберите пол</option>
                                @foreach($genders as $gender)
                                    <option
                                        value="{{ $gender->value }}"
                                        {{ old('gender') == $gender->value ? 'selected' : '' }}>
                                        {{ $gender->label() }}
                                    </option>
                                @endforeach
                            </select>
                            @error('gender')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email"
                                   placeholder="Email" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password"
                                   placeholder="Пароль">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password_confirmation"
                                   placeholder="Повторите пароль">
                            @error('password_confirmation')
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
