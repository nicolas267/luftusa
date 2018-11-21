@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Cars
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
           Create Cars
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
            <form role="form" action="{{action('Car@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                    <label for="title">Car Model</label>
                      <select class="form-control " style="width: 100%;" name="carmodel" tabindex="-1" aria-hidden="true">
                        @foreach($carmodels as $carmodel)
                          <option value="{{$carmodel->car_model_id}}">{{$carmodel->car_model}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="title">Car Version</label>
                      <select class="form-control " style="width: 100%;" name="carversion" tabindex="-1" aria-hidden="true">
                        @foreach($carversions as $carversion)
                          <option value="{{$carversion->car_version_id}}">{{$carversion->car_version}}</option>
                        @endforeach
                      </select>
                </div>
                <div class="form-group">
                    <label for="title">Car Years</label>
                      <select class="form-control " style="width: 100%;" name="year" tabindex="-1" aria-hidden="true">
                        <option>año</option>
                      @for($i = 1950; $i <= $year; $i++)
                        <option value="{{$i}}">{{ $i }}</option>
                      @endfor
                      </select>
                </div>
              </div>
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Create</button>
              </div>
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
