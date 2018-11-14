@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Cars
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
            Cars
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <a href="{{url('cars/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Cars</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Car Model</th>
                  <th>Car Version</th>
                  <th>Start Year</th>
                  <th>End Year</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($cars as $car)
                <tr>
                  <td>{{ $car->car_model }}</td>
                  <td>{{ $car->car_version }}</td>
                  <td>{{ $car->start_years }}</td>
                  <td>{{ $car->end_years }}</td>
                  <td>{{ $car->created_at }}</td>
                  <td>{{ $car->updated_at }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('carsEdit',[$car->car_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('carsDestroy',[$car->car_id])}}"><i class="fa fa-remove">
                </i></a>
                  </td>

                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Car Model</th>
                  <th>Car Version</th>
                  <th>Start Year</th>
                  <th>End Year</th>
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
