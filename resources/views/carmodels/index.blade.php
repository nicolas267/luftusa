@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Cars Models
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
            Car Models
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <a href="{{url('carmodels/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Car models</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Car Models</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($carmodels as $carmodel)
                <tr>
                  <td>{{ $carmodel->car_model }}</td>
                  <td>{{ $carmodel->created_at }}</td>
                  <td>{{ $carmodel->updated_at }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('carmodelsEdit',[$carmodel->car_model_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('carmodelsDestroy',[$carmodel->car_model_id])}}"><i class="fa fa-remove">
                </i></a>
                  </td>

                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>car models</th>
                  <th>Created at</th>
                  <th>Updated at</th>
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
