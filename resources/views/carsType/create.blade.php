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
            <div class="loader" style="display: none;">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Felicidades!</h4>
                El usuario fue creado exitosamente
              </div>
            </div>
            <div class="box-header with-border">
              <h3 class="box-title">Agregar Usuario</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form action="{{action('Cartype@store')}}" method="post"  id="formulario_ajax">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="title">car type</label>
                  <input type="text" class="form-control" id="cartype" name="cartype" placeholder="car type">
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Crear</button>
           </div>
          </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
