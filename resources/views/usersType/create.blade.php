@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create User Type
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
            User Type
        </li>
        <li class="active">
            Create User Type
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
            <form role="form" action="{{action('Usertype@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >User Type</label>
                  <input type="text" class="form-control" name="usertype" placeholder="User Type">
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
