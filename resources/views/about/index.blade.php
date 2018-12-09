@extends('layouts.app_front')

@section('content')
<!-- Main Content - start -->
<main>
    <div class="cont maincont">
        <h1>
            <span>
                About us
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12">
        </span>
        <span class="maincont-line2 maincont-line22">
        </span>
        <!-- Slider About us - start -->
        <div class="flexslider pagecont aboutus" id="aboutus">
            <ul class="slides">
                <li class="aboutus-slide">
                    <p class="aboutus-img">
                        <img alt="" src="http://placehold.it/470x400">
                        </img>
                    </p>
                    <div class="aboutus-cont">
                        <h3>
                            Suspendisse convallis, dolor ac eleifend faucibus, arcu massa pellentesque justo
                        </h3>
                        <p>
                            Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Nunc facilisis id nunc blandit interdum. Sed convallis vel enim sit amet dictum. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue. Morbi arcu ante, vestibulum ac metus sed, commodo sollicitudin ligula. Duis justo massa, rutrum vel lectus sit amet, cursus pretium nulla.
                        </p>
                    </div>
                </li>
                <li class="aboutus-slide">
                    <p class="aboutus-img">
                        <img alt="" src="http://placehold.it/500x380">
                        </img>
                    </p>
                    <div class="aboutus-cont">
                        <h3>
                            Nunc facilisis id nunc blandit interdum
                        </h3>
                        <p>
                            Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Nunc facilisis id nunc blandit interdum. Sed convallis vel enim sit amet dictum. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue. Morbi arcu ante, vestibulum ac metus sed, commodo sollicitudin ligula. Duis justo massa, rutrum vel lectus sit amet, cursus pretium nulla.
                        </p>
                    </div>
                </li>
                <li class="aboutus-slide">
                    <p class="aboutus-img">
                        <img alt="" src="http://placehold.it/470x320">
                        </img>
                    </p>
                    <div class="aboutus-cont">
                        <h3>
                            Maecenas hendrerit purus tincidunt feugiat iaculis
                        </h3>
                        <p>
                            Nullam quis tempor ligula, nec ornare dui. Sed fermentum magna ipsum, sit amet malesuada ante pretium in. Maecenas hendrerit purus tincidunt feugiat iaculis. Donec tincidunt dolor semper fermentum lacinia. Morbi dolor ex, rhoncus quis nibh in, porta facilisis metus. Donec pulvinar bibendum lobortis. Vivamus consequat eros sit amet lorem tristique, sit amet viverra dolor maximus. Proin est nisi, ornare eu gravida eget, fringilla sit amet augue.
                        </p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Slider About us - end -->
    </div>
        <div class="cont maincont">
            <h1>
                <span>
                    Gallery
                </span>
            </h1>
            <span class="maincont-line1 maincont-line12" style="margin-left: -30px;">
            </span>
            <span class="maincont-line2 maincont-line22">
            </span>
            <!-- Gallery About us - start -->
        @if(count($galleries)>0)
            <ul class="about-gallery" id="about-gallery">
                <li class="grid-sizer">
                </li>
                @foreach($galleries as $gallery)
                    <li class="grid-item">
                        <a class="fancy-img" data-fancybox-group="about" href="storage/app/public/{{ $gallery->image }}">
                            <span>
                                <img alt="{{ $gallery->image }}" src="storage/app/public/{{ $gallery->image }}">
                                </img>
                            </span>
                        </a>
                    </li>
                @endforeach
            </ul>
        @else
            <div class="sectls" style="height: 150px; background: white; margin-top: 20px; position: relative; z-index: 1">
                <div style="padding: 30px; width: 100%;">
                    <h1 style="margin-left: 40%; margin-top: 3%;">
                        No data found
                    </h1>
                </div>
            </div>
        @endif
        </div>
</main>
<!-- Main Content - end -->
@endsection
