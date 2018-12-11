@extends('layouts.app_front')

@section('content')
<main class="main-blogs">
    <!-- Breadcrumbs -->
    @if(count($blogs)>0)
	    <div class="cont maincont">
	        <h1>
	            <span>
	                Blog
	            </span>
	        </h1>
	        <span class="maincont-line1 maincont-line12">
	        </span>
	        <span class="maincont-line2 maincont-line22 blog-line">
	        </span>
	        <!-- Blog Sections -->
	        <ul class="cont-sections">
	            <li class="active">
	                <a href="#">
	                    All
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    News
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    Sport
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    Videos
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    Workshop
	                </a>
	            </li>
	            <li>
	                <a href="#">
	                    Other
	                </a>
	            </li>
	        </ul>
	        <div class="blog blog-full">
	            <!-- Blog Posts List - start -->
		            <div class="blog-cont">
		                <div id="blog-grid">
		            		@foreach($blogs as $blog)
			                    <div class="blog-grid-i">
			                        <div class="blog-i">
			                            <a class="blog-img" href="{{route('blogsShow',$blog->blog_id)}}">
			                                <img alt="" src="http://placehold.it/370x208">
			                                </img>
			                            </a>
			                            <p class="blog-info">
			                                <a href="{{route('blogsShow',$blog->blog_id)}}">
			                                    {{ $blog->name }}
			                                </a>
			                                <time datetime="2016-04-07 12:00">
			                                   {{ $blog->created_at }}
			                                </time>
			                            </p>
			                            <h3>
			                                <a href="{{route('blogsShow',$blog->blog_id)}}">
			                                    {{ $blog->title }}
			                                </a>
			                            </h3>
			                            <p>
			                                {{$blog->description}}
			                            </p>
			                        </div>
			                    </div>
		            		@endforeach
		                </div>
		                <!-- Pagination -->
		                <div class="pager">
				            {{ $blogs->links()}}
				        </div>
		            </div>
	            <!-- Blog Posts List - end -->
	        </div>
	    </div>
	 @else
     	<div class="cont maincont">
     		<h1>
	            <span>
	                Blog
	            </span>
	        </h1>
     	</div>
     	<div class="blog blog-full">
        <!-- Blog Posts List - start -->
            <div class="blog-cont">
				 <div style="text-align: center; font-size: 18px;" class="blog-info">
					Sorry at the moment we do not have content to show
				 </div>
            </div>
		</div>
    @endif
</main>
<!-- Main Content - end -->
@endsection