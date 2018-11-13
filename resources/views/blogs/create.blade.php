@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Blog
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
            Create Blog
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
            <form role="form" action="{{action('Blog@store')}}" method="post">
              @csrf
              <div class="box-body">
                <div class="form-group">
                  <label >Title</label>
                  <input type="title" class="form-control" name="title" placeholder="title">
                </div>
            <div class="box-body pad">
              <label >Description</label>
               <textarea id="editor1" name="editor1" rows="10" cols="80">
                
              </textarea>
            </div>
          </div>
          <input type="hidden" name="userid" value="1">
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
