@extends('layouts.app_front')
@section('content')
<main>
    <div class="cont maincont">
        <h1>
            <span>
                Favorites parts
            </span>
        </h1>
        <span class="maincont-line1 maincont-line12" style="margin-left: 120px;">
        </span>
        <span class="maincont-line2 maincont-line22" style="margin-bottom:40px;">
        </span>
        <!-- Catalog Filter - end -->
        <!-- Catalog Items - start -->
        <div class="section-gallery" style="margin-top: 30px;">
            @if(count($favorites)>0)
                @for ($i = 0; $i < count($favorites); $i++)
                <div class="sectgl">
                    <a class="sectgl-link" href="{{route('products.show',[$favorites[$i]->car_part_id])}}">
                        <p class="sectgl-img">
                            <img alt="" src="http://placehold.it/203x190">
                            </img>
                        </p>
                        <h3>
                            <span>
                                {{ ucwords($favorites[$i]->part) }}
                            </span>
                        </h3>
                    </a>
                    <form action="{{route('cart.store')}}" method="post">
                        @csrf
                        <p class="sectgl-info">
                            <a class="sectgl-categ" href="#">
                                Helmets
                            </a>
                            <span class="sectgl-price">
                                ${{ number_format($favorites[$i]->price,"2",",",".") }}
                            </span>
                            <input type="hidden" name="id" value="{{$favorites[$i]->car_part_id}}">
                            <input type="hidden" name="name" value="{{$favorites[$i]->part}}">
                            <input type="hidden" name="price" value="{{$favorites[$i]->price}}">
                            <input type="hidden" name="qty" value="1">
                            <button type="submit" class="sectgl-add">
                                + Add to cart
                            </button>
                        </p>
                    </form>
                </div>
                @endfor
            @else
                <div class="sectls" style="height: 150px; background: white; margin-top: 20px; position: relative; z-index: 1">
                    <div style="padding: 30px; width: 100%;">
                        <h1 style="margin-left: 40%; margin-top: 3%;">
                            Sorry at the moment we do not have content to show
                        </h1>
                    </div>
                </div>
            @endif
        </div>
        <!-- Catalog Items - end -->
        <!-- Pagination -->
        <div class="pager">
            {{ $favorites->links()}}
        </div>
    </div>
</main>
@endsection
