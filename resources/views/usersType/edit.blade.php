@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit User Type
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
            Edit User Type
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
            <form role="form" action="{{action('Usertype@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >User Type</label>
                  <input type="User Type" class="form-control" name="usertype" placeholder="User Type" value="{{$data->user_type}}">
                </div>
              </div>
              <input type="hidden" name="usertypeid" value="{{$data->user_types_id}}">
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
