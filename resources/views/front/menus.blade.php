@extends('layout.main')

@section('content')
<br>
<br>
<section class="most_popular_item_area menu_list_page">
    <div class="container">

        <div class="popular_filter">
            <ul>


                <li class="active" data-filter="*"><a href="">All</a></li>
                <li data-filter=".break"><a href="">Breakfast</a></li>
                <li data-filter=".lunch"><a href="">Lunch</a></li>
                <li data-filter=".dinner"><a href="">Dinner</a></li>
                <li data-filter=".snacks"><a href="">Snacks</a></li>
                <li data-filter=".coffee"><a href="">Coffee</a></li>
            </ul>
        </div>
        <br>
        <br>




        <div class="p_recype_item_main">


            <div class="row p_recype_item_active">
                @forelse($menus as $menu)


                <div class="col-md-4 break snacks">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{url('images',$menu->image)}}"/>

                        </div>
                        <div class="media-body">
                            <a href="{{asset('menu')}}"><h3>{{$menu->name}}</h3></a>
                            <h4>PRICE ${{$menu->price}}</h4>
                            <p>{{$menu->description}} </p>
                            <a class="read_mor_btn" href="#">Add To Cart</a>

                        </div>
                    </div>

                </div>
                @empty
                    <h2>no menu</h2>
                @endforelse

            </div>
        </div>

    </div>

</section>












@endsection
