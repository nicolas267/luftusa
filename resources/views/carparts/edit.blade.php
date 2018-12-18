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
                <form action="{{action('Carpart@upgrade')}}" method="post" role="form">
                    @csrf
                    <div class="box-body">
                        <label>
                            Cars
                        </label>
                        <select aria-hidden="true" class="form-control " name="cars" style="width: 100%;" tabindex="-1">
<<<<<<< HEAD
                            <option value="{{$datas->car_id}}">
                                {{$datas->car_id}}
                            </option>
                            @foreach($cars as $car)
                            <option value="{{$car->car_id}}">
                                {{$car->car_id}}
=======
                            @foreach($cars as $car)
                            <option value="{{$car->car_id}}">
                                {{$car->car_model}} {{$car->car_version}} {{$car->year}}
>>>>>>> 2762b6c1a8106119c5a54b03cfab1073548b3b6f
                            </option>
                            @endforeach
                        </select>
                        <div class="form-group">
                            <label>
                                Part
                            </label>
                            <input class="form-control" name="part" placeholder="Part" type="text" value="{{$datas->part}}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Price
                            </label>
                            <input class="form-control" name="price" placeholder="Price" type="text" value="{{$datas->price}}">
                            </input>
                        </div>
                        <div class="form-group">
                            <label>
                                Stock
                            </label>
                            <input class="form-control" name="stock" placeholder="Stock" type="text" value="{{$datas->stock}}">
                            </input>
                        </div>
                        <input name="carpartid" type="hidden" value="{{$datas->car_part_id}}">
                        </input>
                    </div>
                    <div class="box-footer">
                        <button class="btn btn-primary" type="submit">
                            Edit
                        </button>
                    </div>
                </form>
            </div>
            <!--/.col (right) -->
        </div>
        <!-- /.row -->
    </div>
</section>
@endsection
