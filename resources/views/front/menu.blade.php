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
                <div class="col-md-4 break snacks">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('dist/images/recype/recype-1.jpg')}}" alt='what'>
                        </div>
                        <div class="media-body">
                            <a href="#"><h3>grass Flavour</h3></a>
                            <h4>$32</h4>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                            <a class="read_mor_btn" href="#">Add To Cart</a>

                        </div>
                    </div>
                </div>
                <div class="col-md-4 break coffee">
                    <div class="media">
                        <div class="media-left">
                            <img src="{{asset('dist/images/recype/recype-2.jpg')}}" alt="">
                        </div>
                        <div class="media-body">
                            <a href="#"><h3>Vegetable Flavour</h3></a>
                            <h4>$32</h4>
                            <p>Lorem ipsum dolor sit amets, consectetur adipiscing </p>
                            <a class="read_mor_btn" href="#">Add To Cart</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>







@endsection