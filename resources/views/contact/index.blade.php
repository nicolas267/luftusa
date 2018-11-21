@extends('layouts.app_front')

@section('content')
<!-- Header - end -->
<!-- Main Content - start -->
<main>
    <!-- Breadcrumbs -->
    <div class="b-crumbs-wrap">
        <div class="cont b-crumbs">
            <ul>
                <li>
                    <a href="index.html">
                        Motor
                    </a>
                </li>
                <li>
                    <span>
                        Contacts
                    </span>
                </li>
            </ul>
        </div>
    </div>
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
            <div class="contacts-form">
                <h3>
                    Send us a message
                </h3>
                <form action="#" class="form-validate">
                    <input data-required="text" name="name4" placeholder="Name" type="text">
                        <input data-required="text" data-required-email="email" name="email4" placeholder="Email address" type="text">
                            <input data-required="text" name="phone4" placeholder="Phone number" type="text">
                                <input type="submit" value="Send">
                                </input>
                            </input>
                        </input>
                    </input>
                </form>
            </div>
        </div>
        <!-- Contacts - end -->
    </div>
    <!-- Map -->
    <div class="contacts-map" id="contacts-map">
    </div>
</main>
<!-- Main Content - end -->
@endsection
