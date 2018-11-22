@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Newsletters
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
            Newsletters
        </li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body">
                    <table class="table table-bordered table-striped" id="example1">
                        <thead>
                            <tr>
                                <th>
                                    Email
                                </th>
                                <th>
                                    Updated at
                                </th>
                                <th>
                                    Options
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($newsletter as $newsletter)
                            <tr>
                                <td>
                                    {{ $newsletter->email }}
                                </td>
                                <td>{{ $newsletter->updated_at }}</td>
                                <td>
                                    <a class="btn btn-danger borrar" href="{{route('newsletterDestroy',[$newsletter->newsletter_id])}}" id="borrar">
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
                                    Email
                                </th>
                                <th>
                                    Updated at
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
        </div>
    </div>
</section>
@endsection
