@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Dashboard
        <small>
            Control panel
        </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <a href="#">
                <i class="fa fa-dashboard">
                </i>
                Home
            </a>
        </li>
        <li class="active">
            Dashboard
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Editar usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{action('Cartype@upgrade')}}" method="post"  id="formulario_ajax" enctype= multipart/form-data>
              @csrf
                <div class="form-group">
                  <label for="title">name</label>
                  <input type="text" class="form-control" name="cartype" placeholder="nombre" value="{{ $data->car_type }}">
                  <input type="hidden" name="cartypeid" value="{{ $data->car_type_id }}">
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Editar categoria</button>
           </div>
          </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
