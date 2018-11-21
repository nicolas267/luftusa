@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Edit Car
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
            Cars
        </li>
        <li class="active">
            Edit Car
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
                <form action="{{action('Car@upgrade')}}" method="post" role="form">
                    @csrf
                    <div class="box-body">
                        @foreach($datas as $data)
                        <div class="form-group">
                            <label for="title">
                                Car Model
                            </label>
                            <select aria-hidden="true" class="form-control " name="carmodel" style="width: 100%;" tabindex="-1">
                                <option value="{{$data->car_model_id}}">
                                    {{$data->car_model}}
                                </option>
                                @foreach($carmodels as $carmodel)
                                <option value="{{$carmodel->car_model_id}}">
                                    {{$carmodel->car_model}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">
                                Car Version
                            </label>
                            <select aria-hidden="true" class="form-control " name="carversion" style="width: 100%;" tabindex="-1">
                                <option value="{{$data->car_version_id}}">
                                    {{$data->car_version}}
                                </option>
                                @foreach($carversions as $carversion)
                                <option value="{{$carversion->car_version_id}}">
                                    {{$carversion->car_version}}
                                </option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="title">
                                Car Years
                            </label>
                            <select aria-hidden="true" class="form-control " name="year" style="width: 100%;" tabindex="-1">
                                <option>
                                    {{$data->year}}
                                </option>
                                @for($i = 1950; $i <= $year; $i++)
                                <option value="{{$i}}">
                                    {{ $i }}
                                </option>
                                @endfor
                            </select>
                        </div>
                        <input name="carid" type="hidden" value="{{$data->car_id}}">
                            @endforeach
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
