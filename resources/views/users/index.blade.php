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
    <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User Type</th>
                  <th>Name</th>
                  <th>Lastname</th>
                  <th>email</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->user_type_id }}</td>
                  <td>{{ $user->names }}
                  </td>
                  <td>{{ $user->lastnames }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('userEdit',[$user->user_id])}}">editar</a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('userDestroy',[$user->user_id])}}">borrar</aS>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>User Type</th>
                  <th>Name</th>
                  <th>Lastname</th>
                  <th>email</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
              <a href="{{ url('users/create') }}" class="btn btn-primary">Agregar usuario</a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
</section>
@endsection
