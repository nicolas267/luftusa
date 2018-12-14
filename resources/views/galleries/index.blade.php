@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Galleries
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
            Galleries
        </li>
    </ol>
</section>
<section class="content">
    <div class="box">
        <div class="box-body">
            <a class="btn btn-primary " href="{{url('galleries/create')}}" id="btnadd" style="margin-bottom: 20px;">
                <i class="fa fa-plus">
                </i>
                Create Gallery
            </a>
            <table class="table table-bordered table-striped" id="example1">
                <thead>
                    <tr>
                        <th>
                            image
                        </th>
                        <th>
                            Options
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($galleries as $gallery)
                    <tr>
                        <td>
                            <img alt="{{ $gallery->image }}" height="150px" src="storage/app/public/{{ $gallery->image }}" width="150px"/>
                        </td>
                        <td>
                            <a class="btn btn-primary editar" href="{{route('galleriesEdit',[$gallery->gallery_id])}}" id="editar">
                                <i class="fa fa-edit">
                                </i>
                            </a>
                            <a class="btn btn-danger borrar" href="{{route('galleriesDestroy',[$gallery->gallery_id])}}" id="borrar">
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
                            image
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
<!-- /.col -->
<!-- /.row -->
@endsection
