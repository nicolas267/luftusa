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
                            <div class="date_name">
                                <div class="col-md-6">
                                    <input autofocus="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Name" required="" type="text" value="{{ old('name') }}">
                                        @if ($errors->has('name'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>
                                                {{ $errors->first('name') }}
                                            </strong>
                                        </span>
                                        @endif
                                    </input>
                                </div>
                                <div class="col-md-6 lastname">
	                                    <input autofocus="" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" id="lastname" name="lastname" placeholder="Last Name" required="" type="text" value="{{ old('lastname') }}"/>
	                                    @if ($errors->has('lastname'))
	                                    <span class="invalid-feedback" role="alert">
	                                        <strong>
	                                            {{ $errors->first('lastname') }}
	                                        </strong>
	                                    </span>
	                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input class="form-control{{ $errors->has('card_type') ? ' is-invalid' : '' }}" id="email" name="card_type" required="" type="text" value="{{ old('card_type') }}" placeholder="Card Type" />
                                    @if ($errors->has('card_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('card_type') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-6">
                                    <input class="form-control{{ $errors->has('card_number') ? ' is-invalid' : '' }}" id="card_number" name="card_number" placeholder="Card Number" required="" type="text"/>
                                    @if ($errors->has('card_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>
                                            {{ $errors->first('card_number') }}
                                        </strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="date-direction">
                                <div class="col-md-6 city">
                                    <input class="form-control" id="password-confirm" name="exp" placeholder="Exp." type="text"/>
                                </div>
                                <div class="col-md-6 zip-code">
                                    <input class="form-control" id="cvv" name="cvv" placeholder="CVV" required="" type="text"/>
                                </div>
                                <div class="col-md-6 state">
                                    <input class="form-control" id="zip-code" name="z_code" placeholder="Zip Code" required="" type="text"/>
                                </div>
                            </div>
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
