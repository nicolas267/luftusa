@extends('layouts.app_front')
@section('content')
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Payment
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12">
        </span>
        <span class="maincont-line2 maincont-line22">
        </span>
        <!-- Contacts - start -->
        <div class="payment">
        	<div class="credito">
        		<input type="checkbox" name="credito">
        		<img src="{{Request::root()}}/public/frontend_template/HTML/img/visa.png" alt="">
        		<img src="{{Request::root()}}/public/frontend_template/HTML/img/master-card.png" alt="">
        		<img src="{{Request::root()}}/public/frontend_template/HTML/img/american.png" alt="">
        		<img src="{{Request::root()}}/public/frontend_template/HTML/img/discover.png" alt="">
        	</div>
        	<div class="paypal">
        		<input type="checkbox" name="paypal">
        		<img src="{{Request::root()}}/public/frontend_template/HTML/img/paypal.png" alt="" height="80" width="80%">
        	</div>
        </div>
        <div class="pagecont contacts">
            <div class="contacts-form" style="width: 50%; float: left; margin-top: 0px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <form action="{{ route('payment') }}" method="POST">
                            @csrf
                           
                            
                            <div class="form-group row mb-0" style="width: 25%; float: right; margin-top: -30px">
                                <div class="col-md-6 offset-md-4">
                                    <input type="submit" value="Save"/>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
</main>
@endsection
