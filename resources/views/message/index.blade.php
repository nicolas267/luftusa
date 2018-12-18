@extends('layouts.app')

@section('content')
<section class="content-header">
    <h1>
        Menssages
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
           Menssages
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
                                    Name
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Created at
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
                            @for ($i = 0; $i < count($message); $i++)
                            <tr>
                                <td>
                                    {{ ucwords($message[$i]->name) }}
                                </td>
                                <td>
                                    {{ ucwords($message[$i]->subject) }}
                                </td>
                                <td>
                                    {{ $message[$i]->created_at }}
                                </td>
                                <td>
                                    {{ $message[$i]->updated_at }}
                                </td>
                                <td>
                                    <button class="btn btn-primary editar"  data-toggle="modal" data-target="#modal-default" value="{{$message[$i]->message_id}}" id="show">
                                        <i class="fa fa-eye">
                                        </i>
                                    </button>
                                
                                    <a class="btn btn-danger borrar" href="{{route('messageDestroy',[ $message[$i]->message_id ])}}" id="borrar">
                                        <i class="fa fa-remove">
                                        </i>
                                    </a>
                                </td>
                            </tr>
                            @endfor
                        </tbody>
                        <tfoot>
                            <tr>
                               <th>
                                    Name
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Created at
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
            </div>
        </div>
    </div>
</section>
  <div class="modal fade" id="modal-default">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title">Menssages</h4>
	      </div>
	      <div class="modal-body">
	        <div class="id_content">
	        	
	        </div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	      </div>
	    </div>
	    <!-- /.modal-content -->
	  </div>
	  <!-- /.modal-dialog -->
	</div>
	<!-- /.modal -->
	<script>
		$.ajaxSetup({
            headers: { 
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
            } 
	    });
	    $(document).on('click','#show',function(e){
	        e.preventDefault();
	        var id_message = $(this).val();
	        $.ajax({
	           type:'POST',
	           url:'{{action('Message@show')}}',
	           data:{id_message:id_message},
               dataType: 'json',
	           success:function(data){
                    $.each(data, function(key, data){
        	            $('.id_content').html(
                            '<div style="width:100%;">'+
                                '<div class="titulo" style=""><h2>'+''+data.name+'</h2></div>'+
                                '<div class="fecha" style="position:absolute;right:20px;top:40px;">'+''+data.created_at+'</div>'+
                                '<div class="name" style=""><h5><strong>'+''+data.name+'</strong><h5></div>'+
                                '<div class="email"><h5><strong>'+''+data.email+'</strong><h5></div><br>'+
                                '<div class="email"><h4>Menssage:</h4></div>'+
                                '<div class="message"><p>'+''+data.message+'</p></div>'+
                            '</div>'
                        );
                    });
	           }
	        });
		});
	</script>
@endsection
