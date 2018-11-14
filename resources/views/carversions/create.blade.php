@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Car Versions
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
        <li class="active">
           Create Car Versions
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
            <form role="form" action="{{action('Carversion@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Car Versions</label>
                  <input type="text" class="form-control" name="carversion" placeholder="Car versions">
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
