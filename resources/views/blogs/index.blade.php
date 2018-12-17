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
                        <th>
                            User
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
                            Created At
                        </th>
                        <th>
                            Updated At
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($blogs as $blog)
                    <tr>
                        <td>
                            {{ $blog->name}}
                        </td>
                        <td>
                            {{ $blog->title }}
                        </td>
                        <td>
                            {{ $blog->created_at }}
                        </td>
                        <td>
                            {{ $blog->updated_at }}
                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="{{route('blogsEdit',[$blog->blog_id])}}" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="{{route('blogsDestroy',[$blog->blog_id])}}" id="borrar">
                                <i class="fa fa-remove">
                                </i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>
                            User
                        </th>
                        <th>
                            Title
                        </th>
                        <th>
<<<<<<< HEAD
                            Description
                        </th>
                        <th>
=======
>>>>>>> 2762b6c1a8106119c5a54b03cfab1073548b3b6f
                            Created At
                        </th>
                        <th>
                            Updated At
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
</section>
<!-- /.row -->
<!-- /.content -->
@endsection
