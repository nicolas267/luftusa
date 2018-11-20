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
            <a class="btn btn-primary " href="{{url('userstype/create')}}" id="btnadd" style="margin-bottom: 20px;">
                <i class="fa fa-plus">
                </i>
                Create User Type
            </a>
            <table class="table table-bordered table-striped" id="example1">
                <thead>
                    <tr>
                        <th>
                            User Type
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($userstype as $usertype)
                    <tr>
                        <td>
                            {{ $usertype->user_type }}
                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="{{route('usertypeEdit',[$usertype->user_types_id])}}" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="{{route('usertypeDestroy',[$usertype->user_types_id])}}" id="borrar">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            User Type
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
<!-- /.col -->
<!-- /.row -->
@endsection
