@extends('layouts.index')
@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Добавить продукт</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Добавить продукт</li>
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

            <form action = "{{ route('product.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

              <div class="form-group">
                <label>Категория товара</label>
                <select class="form-control" name="category_id" style="width: 100%;">
                  @foreach($categories as $category)
                  <option value="{{ $category->id }}">{{ $category->title }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <label>Тэги</label>
                <select class="tags" name="tags[]" multiple="multiple" style="width: 100%;">
                  @foreach($tags as $tag)
                  <option value="{{ $tag->id }}">{{ $tag->title }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Цвета</label>
                <select class="tags" name="colors[]" multiple="multiple" style="width: 100%;">
                  @foreach($colors as $color)
                  <option value="{{ $color->id }}">{{ $color->title }}</option>
                  @endforeach
                </select>
              </div>

              <div class="form-group">
                <div class="input-group">
                  <div class="custom-file">
                    <input name="preview_image" type="file" class="custom-file-input" id="exampleInputFile">
                    <label class="custom-file-label" for="exampleInputFile">Выберите картинку</label>
                  </div>
                </div>
              </div>
              
              <div class="form-group"><input type="text" name="title" placeholder="title" class="form-control" /></div>
              <div class="form-group"><input type="text" name="description" placeholder="description" class="form-control" /></div>
              <div class="form-group"><input type="text" name="content" placeholder="content" class="form-control" /></div>
              <div class="form-group"><input type="text" name="price" placeholder="price" class="form-control" /></div>
              <div class="form-group"><input type="text" name="count" placeholder="count" class="form-control" /></div>
              <div class="form-group"><input type="submit" class="btn btn-primary" value="Добавить" /></div>
            </form>

          </div>
          <!-- /.col -->

        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->

@endsection