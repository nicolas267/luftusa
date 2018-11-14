@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Cars Versions
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
            Car Versions
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <a href="{{url('carversions/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Car Versions</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Car Versions</th>
                  <th>Created at</th>
                  <th>Updated at</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($carversions as $carversion)
                <tr>
                  <td>{{ $carversion->car_version }}</td>
                  <td>{{ $carversion->created_at }}</td>
                  <td>{{ $carversion->updated_at }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('carversionsEdit',[$carversion->car_versions_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('carversionsDestroy',[$carversion->car_versions_id])}}"><i class="fa fa-remove">
                </i></a>
                  </td>

                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Car Versions</th>
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
