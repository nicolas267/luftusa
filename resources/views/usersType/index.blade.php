@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        User Types
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
            User Types
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
            <div class="box-body">
              <a href="{{url('userstype/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create User Type</a>
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
                  <td>{{ $usertype->user_type }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('usertypeEdit',[$usertype->user_type_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('usertypeDestroy',[$usertype->user_type_id])}}"><i class="fa fa-remove">
                </i></a>
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
