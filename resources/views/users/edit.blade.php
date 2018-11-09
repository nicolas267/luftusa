@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit user
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
            Users
        </li>
        <li class="active">
            Edit User
        </li>
    </ol>
</section>
<section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Edit User</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{action('User@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Name</label>
                  <input type="Name" class="form-control" name="Name" placeholder="Name" value="{{$data->names}}">
                </div>
                <div class="form-group">
                  <label >Lastname</label>
                  <input type="Name" class="form-control" name="Lastname" placeholder="Lastname" value="{{$data->lastnames}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="Email" placeholder="Enter email" value="{{$data->email}}">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="Password" placeholder="Password" value="{{$data->password}}">
                </div>
                <div class="form-group">
                    <label for="title">User Type</label>
                      <select class="form-control " style="width: 100%;" name="Usertype" tabindex="-1" aria-hidden="true">
                        @foreach($userstypes as $usertype)
                          <option value="{{$usertype->users_type_id}}">{{$usertype->users_type}}</option>
                        @endforeach
                      </select>
                </div>
              </div>
              <input type="hidden" name="userid" value="{{$data->user_id}}">
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
