@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Car Years
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
            Car Years
        </li>
        <li class="active">
           Create Car Years
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
            <form role="form" action="{{action('Caryear@store')}}" method="post">
              @csrf
              <div class="box-body">
               <div class="form-group">
                <label>Date Start:</label>

                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control datemask" name="datestart" data-inputmask="'alias': 'yyyy/mm/dd'" data-mask>
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
                  <input type="text" class="form-control datemask" name="dateend" data-inputmask="'alias': 'dd/mm/yyyy'" data-mask>
                </div>
                <!-- /.input group -->
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
