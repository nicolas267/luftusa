@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car model
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
            Car Model
        </li>
        <li class="active">
            Edit Car Model
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
            <form role="form" action="{{action('Carmodel@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Car Model</label>
                  <input type="text" class="form-control" name="carmodel" placeholder="Car Model" value="{{$data->car_model}}">
                </div>
              </div>
              <input type="hidden" class="form-control" name="carmodelid"  value="{{$data->car_model_id}}">
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
