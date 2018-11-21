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
              <a href="{{url('galleries/create')}}" id="btnadd" style="margin-bottom: 20px;"class="btn btn-primary "><i class="fa fa-plus"></i> Create Gallery</a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>image</th>
                  <th>Options</th>
                </tr>
                </thead>
                <tbody>
              @foreach($galleries as $gallery)
                <tr>
                  <td><img src="storage/app/public/{{ $gallery->image }}" alt="{{ $gallery->image }}" width="150px" height="150px" /></td>
                  <td>
                    <a id="editar" class="btn btn-primary editar" href="{{route('galleriesEdit',[$gallery->gallery_id])}}"><i class="fa fa-edit">
                </i></a>
                    <a id="borrar" class="btn btn-danger borrar" href="{{route('galleriesDestroy',[$gallery->gallery_id])}}"><i class="fa fa-remove">
                </i></a>
                  </td>
                </tr>
              @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>image</th>
                  <th>Options</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
</section>
@endsection
