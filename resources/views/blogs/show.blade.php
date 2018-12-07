@extends('layouts.app_front')

@section('content')
<main>
    <main>

<!-- Breadcrumbs -->
<div class="maincont">

    <!-- Post Image -->
    <img src="http://placehold.it/1920x593" alt="" class="post-img">

    <div class="cont">

        <!-- Post Content - start -->
        <div class="post">
            <div class="post-info">
                <a href="#" style="margin-left: -70px">News</a>
                <h1 style="margin-left: -70px">{{ $blogs->title }}</h1>
                <time style="float: right; margin-left: 200px; width: 100%;">{{ $blogs->created_at }}</time>
            </div>
            <p>{{ $blogs->description }}</p>

            <!-- Social Share -->
            <ul class="post-share">
                <li>
                    <a href="#">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-vk"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-google-plus"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-pinterest-p"></i>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-share"></i>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Post Content - end -->
    </div>

</div>

</main>
</main>
@endsection
