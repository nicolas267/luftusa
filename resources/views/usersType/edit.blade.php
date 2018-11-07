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
            <form action="{{action('Usertype@upgrade')}}" method="post"  id="formulario_ajax" enctype= multipart/form-data>
              @csrf
                <div class="form-group">
                  <label for="title">name</label>
                  <input type="text" class="form-control" name="userstype" placeholder="nombre" value="{{ $data->users_type }}">
                  <input type="hidden" name="usertypeid" value="{{ $data->users_type_id }}">
                </div>
              </div>
            <button type="submit" class="btn btn-primary">Editar usuario</button>
           </div>
          </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
