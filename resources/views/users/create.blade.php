@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create User
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
            Create User
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
            <form role="form" action="{{action('User@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Name</label>
                  <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="form-group">
                  <label >Lastname</label>
                  <input type="text" class="form-control" name="lastname" placeholder="Lastname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="title">User Type</label>
                      <select class="form-control " style="width: 100%;" name="usertype" tabindex="-1" aria-hidden="true">
                        @foreach($userstypes as $usertype)
                          <option value="{{$usertype->user_type_id}}">{{$usertype->user_type}}</option>
                        @endforeach
                      </select>
                </div>
              </div>
              <!-- /.box-body -->

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
