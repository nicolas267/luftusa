@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Gallery
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
            Gallery
        </li>
        <li class="active">
            Edit Gallery
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
             <form role="form" action="{{route('galleriesUpdate',[$data->gallery_id])}}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">

                <div class="form-group">
                  <label >image</label>
                  <input type="file" class="form-control" name="image">
                </div>
              </div>
              <input type="hidden" name="galleryid" value="{{$data->gallery_id}}">
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
