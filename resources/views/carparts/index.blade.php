@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Cars Parts
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
            Car Parts
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <a class="btn btn-primary " href="{{url('carparts/create')}}" style="margin-bottom: 20px;">
                        <i class="fa fa-plus">
                        </i>
                        Create Car Parts
                    </a>
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>
                                    Part
                                </th>
                                <th>
                                    Car Model
                                </th>
                                <th>
                                    Car Version
                                </th>
                                <th>
                                    Year
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    stock
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
                            @for ($i = 0; $i < count($carparts); $i++)
                            <tr>
                                <td>
                                    {{ $carparts[$i]->part }}
                                </td>
                                <td>
                                    {{ $models[$i][0]->car_model }}
                                </td>
                                <td>
                                    {{ $versions[$i][0]->car_version }}
                                </td>
                                <td>
                                    {{ $carparts[$i]->year }}
                                </td>
                                <td>
                                    {{ $carparts[$i]->price }}
                                </td>
                                <td>
                                    {{ $carparts[$i]->stock }}
                                </td>
                                <td>
                                    {{ $carparts[$i]->created_at }}
                                </td>
                                <td>
                                    {{ $carparts[$i]->updated_at }}
                                </td>
                                <td>
                                    <a class="btn btn-primary editar" href="{{route('carpartsEdit',[ $carparts[$i]->car_part_id ])}}" id="editar">
                                        <i class="fa fa-edit">
                                        </i>
                                    </a>
                                    <a class="btn btn-danger borrar" href="{{route('carpartsDestroy',[ $carparts[$i]->car_part_id ])}}" id="borrar">
                                        <i class="fa fa-remove">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>
                                    Part
                                </th>
                                <th>
                                    Car Model
                                </th>
                                <th>
                                    Car Version
                                </th>
                                <th>
                                    Year
                                </th>
                                <th>
                                    Price
                                </th>
                                <th>
                                    stock
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
            </div>
        </div>
    </div>
</section>
<!-- /.box-body -->
<!-- /.box -->
@endsection
