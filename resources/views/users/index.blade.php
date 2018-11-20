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
            <a class="btn btn-primary " href="{{url('users/create')}}" id="btnadd" style="margin-bottom: 20px;">
                <i class="fa fa-plus">
                </i>
                Create User
            </a>
            <table class="table table-bordered table-striped" id="example2">
                <thead>
                    <tr>
                        <th>
                            User Type
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Lastname
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Updated At
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
<<<<<<< HEAD
                    @foreach($users as $user)
                    <tr>
                        <td>
                            {{ $user->user_type }}
                        </td>
                        <td>
                            {{ $user->names }}
                        </td>
                        <td>
                            {{ $user->lastnames }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            {{ $user->created_at }}
                        </td>
                        <td>
                            {{ $user->updated_at }}
                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="{{route('userEdit',[$user->user_id])}}" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="{{route('userDestroy',[$user->user_id])}}" id="borrar">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
=======
              @foreach($users as $user)
                <tr>
                  <td>{{ $user->user_type }}</td>
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
>>>>>>> 193e3a2eb34ac794506a155d491420d721e7bd0c
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            User Type
                        </th>
                        <th>
                            Name
                        </th>
                        <th>
                            Lastname
                        </th>
                        <th>
                            email
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Updated At
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.row -->
<!-- /.content -->
@endsection
