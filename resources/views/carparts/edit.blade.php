@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car Parts
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
            Car Parts
        </li>
        <li class="active">
            Edit Car Parts
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
            <form role="form" action="{{action('Carpart@upgrade')}}" method="post">
              @csrf
              <div class="box-body">
                <label >Cars</label>
                <select class="form-control " style="width: 100%;" name="cars" tabindex="-1" aria-hidden="true">
                          <option value="{{$datas->car_id}}">{{$datas->car_id}}</option>
                        @foreach($cars as $car)
                          <option value="{{$car->car_id}}">{{$car->car_id}}</option>
                        @endforeach
                      </select>
                <div class="form-group">
                  <label >Part</label>
                  <input type="text" class="form-control" name="part" placeholder="Part" value="{{$datas->part}}">
                </div>
                <div class="form-group">
                  <label >Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Price" value="{{$datas->price}}">
                </div>
                <div class="form-group">
                  <label >Stock</label>
                  <input type="text" class="form-control" name="stock" placeholder="Stock" value="{{$datas->stock}}">
                </div>
                <input type="hidden" name="carpartid" value="{{$datas->car_part_id}}">
              </div>
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
