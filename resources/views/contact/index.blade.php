@extends('layouts.app_front')

@section('content')
<!-- Header - end -->
<!-- Main Content - start -->
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Contacts
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12">
        </span>
        <span class="maincont-line2 maincont-line22">
        </span>
        <!-- Contacts - start -->
        <div class="pagecont contacts">
            <ul class="contacts-col1">
                <li>
                    <p>
                        <b>
                            Information
                        </b>
                    </p>
                    <p>
                        Quisque leo velit, laoreet vel turpis id
                    </p>
                </li>
                <li>
                    <p>
                        <b>
                            Address
                        </b>
                    </p>
                    <p>
                        Forbes Ave, Pittsburgh, PA, USA
                    </p>
                </li>
                <li>
                    <p>
                        <b>
                            Email
                        </b>
                    </p>
                    <p>
                        <a href="mailto:motor@stockware.ru">
                            motor@stockware.ru
                        </a>
                    </p>
                </li>
            </ul>
            <ul class="contacts-col2">
                <li>
                    <p>
                        <b>
                            Phone
                        </b>
                    </p>
                    <p>
                        (765)-130-7804
                    </p>
                </li>
                <li>
                    <p>
                        <b>
                            Business Hours
                        </b>
                    </p>
                    <p>
                        Monday-Friday: 8am to 6pm
                    </p>
                    <p>
                        Saturday: 10am to 2pm
                    </p>
                    <p>
                        Sunday: Closed
                    </p>
                    <p>
                        Support 24/7
                    </p>
                </li>
            </ul>
            <div class="contacts-form" style="margin-top: 0px;">
                <h3>
                    Send us a message
                </h3>
                <form action="#" class="form-validate" method="post">
                    @csrf
                    <input data-required="text" name="name" placeholder="Name" type="text"/>
                    <input data-required="text" data-required-email="email" name="email" placeholder="Email address" type="text"/>
                    <input data-required="text" name="subject" value="Message from Contact" type="hidden"/>
                    <textarea name="message" id="" rows="5" data-required="text" placeholder="Message"></textarea>
                    <input type="submit" value="Send"/>
                </form>
            </div>
        </div>
    </div>
</main>
<!-- Contacts - end -->
<!-- Map -->
<div class="contacts-map">
<iframe src="https://maps.google.com/maps?q=2367%20Coral%20Way%2C%20Mami%20FL33145%20Dominican&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="420" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- Main Content - end -->
@endsection
