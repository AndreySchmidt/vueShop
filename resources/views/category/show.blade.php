@extends('layouts.index')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Категория</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Категория</li>
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
                <tr>
                  <td>ID</td>
                  <td>{{ $category->id }}</td>
                </tr>
                <tr>
                  <td>Название</td>
                  <td>{{ $category->title }}</td>
                </tr>
                <tr>
                  <td>Редактировать</td>
                  <td><a href="{{ route('category.edit', $category->id) }}" class="btn btn-primary">Редактировать</a></td>
                </tr>
                <tr>
                  <td>Удалить</td>
                  <td>
                    <form action="{{ route('category.delete', $category->id) }}" method="POST">
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