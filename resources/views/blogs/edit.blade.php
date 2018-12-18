@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Blog
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
            Blogs
        </li>
        <li class="active">
            Edit Blog
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
              <h3 class="box-title">Edit Blog</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" action="{{action('Blog@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Title</label>
                  <input type="title" class="form-control" name="title" placeholder="Title" value="{{$data->title}}">
                </div>
            <div class="form-group">
              <label >Description</label>
               <textarea id="editor1" name="description" rows="10" cols="80">{{$data->description}}</textarea>
            </div>
          </div>
          <input type="hidden" name="userid" value="{{auth()->user()->user_id}}">
          <input type="hidden" name="blogid" value="{{$data->blog_id}}">
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
