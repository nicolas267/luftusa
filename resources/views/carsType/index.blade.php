@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Cars Types
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
              <a href="{{url('carstype/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Car Type</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Car Type</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($carstype as $cartype)
                <tr>
                  <td>{{ $cartype->car_type }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('cartypeEdit',[$cartype->car_type_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('cartypeDestroy',[$cartype->car_type_id])}}"><i class="fa fa-remove">
                </i></a>
                  </td>

                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>car Type</th>
                  <th>Options</th>
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
