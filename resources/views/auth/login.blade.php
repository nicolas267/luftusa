@extends('layouts.app_front')
@section('content')
<main>
    <div class="cont maincont" style="width: 60%;">
        <h1>
            <span>
                Login
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12" style="margin-left: -70px;">
        </span>
        <span class="maincont-line2 maincont-line22">
        </span>
        <!-- Contacts - start -->
        <div class="pagecont contacts" style="padding: 89px;">
            @if(Session::has('message'))
                <div class="alert alert-danger" >
                    {{ Session::get('message') }}
                </div>
            @endif
            <div class="contacts-form" style="width: 60%; margin-left: 20%; float: left; margin-top: 0px;">
                <form method="POST" action="{{ route('login') }}">
                    {{csrf_field()}}
                    <label class="col-md-4 col-form-label text-md-right" for="name">
                        {{ __('E-Mail Address') }}
                    </label>
                   <input id="email" type="email" class="" placeholder="Email" name="email" value="{{ old('email') }}" required autofocus>
                    <label class="col-md-4 col-form-label text-md-right" for="name">
                       {{ __('Password') }}
                    </label>
                    <input id="password" type="password" placeholder="password" class="" name="password" required>
                    <input type="submit" value="Send"/>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- Contacts - end -->
@endsection
