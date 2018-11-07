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
            <form action="{{action('User@upgrade')}}" method="post"  id="formulario_ajax" enctype= multipart/form-data>
              @csrf
                <div class="form-group">
                  <label for="title">name</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="nombre" value="{{ $data->names }}">
                </div>
            <div class="box-body">
                <div class="form-group">
                  <label for="title">lastname</label>
                  <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname" value="{{ $data->lastnames }}">
                </div>
              </div>
            <div class="box-body">
                <div class="form-group">
                  <label for="title">email</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="email" value="{{ $data->email }}">
                </div>
              </div>
              <div class="box-body">
                <div class="form-group">
                  <label for="title">password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="password" value="{{ $data->password }}">

                  <input type="hidden" name="userid" value="{{ $data->user_id }}">
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Editar usuario</button>
           </div>
          </form>
          </div>
        <!--/.col (right) -->
      </div>
</section>
@endsection
