@extends('layouts.app_front')

@section('content')
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Profile
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12" style="margin-left: -30px;">
        </span>
        <span class="maincont-line2 maincont-line22">
        </span>
        <!-- Contacts - start -->
        <div class="pagecont contacts">
            <div class="mmenu" >
                <div class="profile"><a href="" title="">Profile</a></div>
                <div class="reset"><a href="" title="">Reset</a></div>
                <div class="addresses"><a href="" title="">Addresses</a></div>
                <div class="payment"><a href="" title="">Payment</a></div>
            </div>
            <div class="img-profile">
                <img src="{{Request::root()}}/public/frontend_template/HTML/img/logo.png" alt="">
            </div>
            <div class="contacts-form" style="width: 80%; float: left; margin-left: 10%; margin-top: 280px;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <form action="{{action('Profile@update')}}" method="POST" class="form-profile">
                                        @csrf
                                        <div class="form-group row" style="width: 49%; float: left;">
                                            <label class="col-md-4 col-form-label text-md-right" for="name">
                                                {{ __('Name') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input autofocus="" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" id="name" name="name" placeholder="Name" required="" type="text" value="{{auth()->user()->name}}">
                                                    @if ($errors->has('name'))
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>
                                                            {{ $errors->first('name') }}
                                                        </strong>
                                                    </span>
                                                    @endif
                                                </input>
                                            </div>
                                        </div>
                                        <div class="form-group row" style="width: 49%; float: right; margin-left: 2%; ">
                                            <label class="col-md-4 col-form-label text-md-right" for="name">
                                                Last Name
                                            </label>
                                            <div class="col-md-6">
                                                <input autofocus="" class="form-control{{ $errors->has('lastname') ? ' is-invalid' : '' }}" id="lastname" name="lastname" placeholder="Last Name" required="" type="text" value="{{auth()->user()->lastname}}"/>
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
                                            <label class="col-md-4 col-form-label text-md-right" for="email">
                                                {{ __('E-Mail Address') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" id="email" name="email" required="" type="email" value="{{auth()->user()->email}}"/>
                                                @if ($errors->has('email'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        {{ $errors->first('email') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right" for="password">
                                                {{ __('Password') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" id="password" name="password" placeholder="Password" type="password"/>
                                                @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>
                                                        {{ $errors->first('password') }}
                                                    </strong>
                                                </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-4 col-form-label text-md-right" for="password-confirm">
                                                {{ __('Confirm Password') }}
                                            </label>
                                            <div class="col-md-6">
                                                <input name="userid" type="hidden" value="{{auth()->user()->user_id}}"/>
                                                <input class="form-control" id="password-confirm" name="password_confirmation" placeholder="Conform Password" type="password"/>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-0" style="width: 20%; margin-left: 40%;">
                                            <div class="col-md-6 offset-md-4">
                                                <input type="submit" value=" Save"/>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
