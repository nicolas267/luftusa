@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car Year
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
            Car Year
        </li>
        <li class="active">
            Edit Car Year
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
            <form role="form" action="{{action('Caryear@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
               <div class="form-group">
                <label>Date Start:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control datemask" name="datestart" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask value="<?php echo $data->start_years ?>">
                </div>
                <!-- /.input group -->
              </div>
                <!-- /.input group -->
              <div class="form-group">
                <label>Date End:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control datemask" name="dateend" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask value="<?php echo $data->end_years ?>">
                </div>
                <!-- /.input group -->
              </div>
              <div class="box-footer">
                <input type="hidden" name="car_years_id" value="<?php echo $data->car_years_id ?>">
                <button type="submit" class="btn btn-primary">Edit</button>
              </div>
            </form>
          </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
</section>
@endsection
