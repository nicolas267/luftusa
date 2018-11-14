@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car Version
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
            Car Version
        </li>
        <li class="active">
            Edit Car Version
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
            <form role="form" action="{{action('Carversion@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Car Version</label>
                  <input type="text" class="form-control" name="carversion" placeholder="Car version" value="{{$data->car_version}}">
                </div>
              </div>
              <input type="hidden" class="form-control" name="carversionid"  value="{{$data->car_versions_id}}">
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
