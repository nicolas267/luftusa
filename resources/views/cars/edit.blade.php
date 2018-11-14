@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car
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
        <li class="active">
            Edit Car
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <!-- form start -->
           <form role="form" action="{{action('Car@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                @foreach($datas as $data)
                
                <div class="form-group">
                    <label for="title">Car Model</label>
                      <select class="form-control " style="width: 100%;" name="carmodel" tabindex="-1" aria-hidden="true">
                        <option value="{{$data->car_model_id}}">{{$data->car_model}}</option>
                        @foreach($carmodels as $carmodel)
                          <option value="{{$carmodel->car_model_id}}">{{$carmodel->car_model}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="title">Car Version</label>
                      <select class="form-control " style="width: 100%;" name="carversion" tabindex="-1" aria-hidden="true">
                        <option value="{{$data->car_version_id}}">{{$data->car_version}}</option>
                        @foreach($carversions as $carversion)
                          <option value="{{$carversion->car_versions_id}}">{{$carversion->car_version}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="title">Car Years</label>
                      <select class="form-control " style="width: 100%;" name="caryears" tabindex="-1" aria-hidden="true">
                        <option value="{{$data->car_year_id}}">{{$data->start_years}} - {{$data->end_years}}</option>
                        @foreach($caryears as $caryear)
                          <option value="{{$caryear->car_years_id}}">{{$caryear->start_years}} - {{$caryear->end_years}}</option>
                        @endforeach
                      </select>
                </div>
                <input type="hidden" name="carid" value="{{$data->car_id}}">
                @endforeach
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
