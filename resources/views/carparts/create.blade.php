@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Create Car Part
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
           Create Car Part
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
            <form role="form" action="{{action('Carpart@store')}}" method="post">
              @csrf
              <div class="box-body">
                <label >Cars</label>
                <select class="form-control " style="width: 100%;" name="cars" tabindex="-1" aria-hidden="true">
                        @foreach($cars as $car)
                          <option value="{{$car->car_id}}">{{$car->car_id}}</option>
                        @endforeach
                      </select>
                <div class="form-group">
                  <label >Part</label>
                  <input type="text" class="form-control" name="part" placeholder="Part">
                </div>
                <div class="form-group">
                  <label >Price</label>
                  <input type="text" class="form-control" name="price" placeholder="Price">
                </div>
                <div class="form-group">
                  <label >Stock</label>
                  <input type="text" class="form-control" name="stock" placeholder="Stock">
                </div>

              </div>
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
