@extends('layouts.index')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить пользователя</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Добавить пользователя</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">

        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <div class="col-md-6">

            <form action = "{{ route('user.store') }}" method="POST">
              @csrf
              <div class="form-group">
                <input type="text" name="name" value="{{ old('name') }}" placeholder="Имя" class="form-control" />
              </div>
              <div class="form-group">
                <input type="text" name="surname" value="{{ old('surname') }}" placeholder="Фамилия" class="form-control" />
              </div>
              <div class="form-group">
                <input type="text" name="patronymic" value="{{ old('patronymic') }}" placeholder="Отчество" class="form-control" />
              </div>
              <div class="form-group">
                <input type="text" name="age" value="{{ old('age') }}" placeholder="Возраст" class="form-control" />
              </div>
              <div class="form-group">
                <input type="text" name="address" value="{{ old('address') }}" placeholder="Адрес" class="form-control" />
              </div>

              <div class="form-group">
              <select name="gender" class="custom-select form-control" >
                <option disabled selected>Пол</option>
                <option {{ old('gender') == 1 ? ' selected' : '' }} value="1">Мужской</option>
                <option {{ old('gender') == 2 ? ' selected' : '' }} value="2">Женский</option>
              </select>
              </div>
              
              <div class="form-group">
                <input type="text" name="email" value="{{ old('email') }}" placeholder="Email" class="form-control" />
              </div>
              <div class="form-group">
                <input type="password" name="password" placeholder="Пароль" class="form-control" />
              </div>
              <div class="form-group">
                <input type="password" name="password_confirmation" placeholder="Подтверждение пароля" class="form-control" />
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Добавить" />
              </div>
            </form>

            
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection