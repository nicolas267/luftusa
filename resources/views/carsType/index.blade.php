@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Car Types
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
            Car Types
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <a class="btn btn-primary " href="{{url('carstype/create')}}" id="btnadd" style="margin-bottom: 20px;">
                        <i class="fa fa-plus">
                        </i>
                        Create Car Type
                    </a>
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>
                                    Car Type
                                </th>
                                <th>
                                    Created at
                                </th>
                                <th>
                                    Updated at
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($carstype as $cartype)
                            <tr>
                                <td>
                                    {{ $cartype->car_type }}
                                </td>
                                <td>
                                    {{ $cartype->created_at }}
                                </td>
                                <td>
                                    {{ $cartype->updated_at }}
                                </td>
                                <td>
                                    <a class="btn btn-primary editar" href="{{route('cartypeEdit',[$cartype->car_type_id])}}" id="editar">
                                        <i class="fa fa-edit">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger borrar" href="{{route('cartypeDestroy',[$cartype->car_type_id])}}" id="borrar">
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
                                    car Type
                                </th>
                                <th>
                                    Created at
                                </th>
                                <th>
                                    Updated at
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
        </div>
    </div>
</section>
@endsection
