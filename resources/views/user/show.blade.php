@extends('layouts.index')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Пользователь</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Пользователь</li>
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
            <table class="table table-hover text-nowrap">
              <tbody>
                <tr><td>ID</td><td>{{ $user->id }}</td></tr>
                <tr><td>Имя</td><td>{{ $user->name }}</td></tr>
                <tr><td>Фамилия</td><td>{{ $user->surname }}</td></tr>
                <tr><td>Отчество</td><td>{{ $user->patronymic }}</td></tr>
                <tr><td>Возраст</td><td>{{ $user->age }}</td></tr>
                <tr><td>Пол</td><td>{{ $user->genderTitle }}</td></tr>
                <tr><td>Email</td><td>{{ $user->email }}</td></tr>
                <tr><td>Адрес</td><td>{{ $user->address }}</td></tr>
                <tr>
                  <td>Редактировать</td>
                  <td><a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary">Редактировать</a></td>
                </tr>
                <tr>
                  <td>Удалить</td>
                  <td>
                    <form action="{{ route('user.delete', $user->id) }}" method="POST">
                      @csrf
                      @method('delete')
                      <button type="submit" class="btn btn-danger">Удалить</button>
                    </form>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection