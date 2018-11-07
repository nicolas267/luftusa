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
            <form action="{{action('Usertype@store')}}" method="post"  id="formulario_ajax">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label for="title">name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="nombre">
                </div>
              </div>
            <div class="box-body">
                <div class="form-group">
                  <label for="title">lastname</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
                </div>
              </div>
            <div class="box-body">
                <div class="form-group">
                  <label for="title">email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="title">password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <select name="usertype">
                    <option value="1">administrador</option>
                    <option value="2">usuario</option>
                  </select>
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Crear usuario</button>
           </div>
          </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
