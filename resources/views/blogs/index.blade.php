@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
         Blogs
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
    </ol>
</section>
<section class="content">
    <div class="box">
            <div class="box-body">
              <a href="{{url('blogs/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Blog</a>
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>User</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($blogs as $blog)
                <tr>
                  <td>{{ $blog->name }}</td>
                  <td>{{ $blog->title }}</td>
                  <td>{{ $blog->description }}</td>
                  <td>{{ $blog->created_at }}</td>
                  <td>{{ $blog->updated_at }}</td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('blogsEdit',[$blog->blog_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('blogsDestroy',[$blog->blog_id])}}"><i class="fa fa-remove">
                </i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>User</th>
                  <th>Title</th>
                  <th>Description</th>
                  <th>Created At</th>
                  <th>Updated At</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
@endsection
