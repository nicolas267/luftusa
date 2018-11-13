@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
         Users
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
            Users
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
            <div class="box-body">
              <a href="{{url('users/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create User</a>
              <table id="example2" class="table table-bordered table-striped">
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
                  <td>{{ $user->users_type }}</td>
                  <td>{{ $user->names }}
                  </td>
                  <td>{{ $user->lastnames }}</td>
                  <td>{{ $user->email }}</td>
                  <td>{{ $user->created_at }}</td>
                  <td>{{ $user->updated_at }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('userEdit',[$user->user_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('userDestroy',[$user->user_id])}}"><i class="fa fa-remove">
                </i></a>
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
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
