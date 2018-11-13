@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Car Parts
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
            Car Parts
        </li>
        <li class="active">
           Create Car Parts
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
            <form role="form" action="{{action('Carpart@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Car Parts</label>
                  <input type="text" class="form-control" name="Carparts" placeholder="Car Parts">
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
