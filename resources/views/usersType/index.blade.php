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
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User Type</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($userstype as $usertype)
                <tr>
                  <td>{{ $usertype->users_type }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('usertypeEdit',[$usertype->users_type_id])}}">editar</a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('usertypeDestroy',[$usertype->users_type_id])}}">borrar</a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>User Type</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
              <a href="{{ url('userstype/create') }}" class="btn btn-primary">Agregar usuario</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
@endsection
