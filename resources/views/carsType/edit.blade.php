@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car Type
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
            Car Type
        </li>
        <li class="active">
            Edit Car Type
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
            <form role="form" action="{{action('Cartype@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Car Type</label>
                  <input type="text" class="form-control" name="cartype" placeholder="Car Type" value="{{$data->car_type}}">
                </div>
              </div>
              <input type="hidden" class="form-control" name="cartypeid"  value="{{$data->car_type_id}}">
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
