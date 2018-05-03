@extends('layout.main')

@section('content')
    <br>
    <br>
    <div class="recipes-w3l-agile" id="menu">
        <div class="container">
            <h3 class="tittle">DELICIOUS MENU</h3>
            <div class="agileits-tabs">
                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                    <ul id="myTab" class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">CHICKEN</a></li>
                        <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile" aria-expanded="false">LAMB</a></li>
                        <li role="presentation"><a href="#rating" id="rating-tab" role="tab" data-toggle="tab" aria-controls="rating" aria-expanded="true">BEEF</a></li>
                        <li role="presentation"><a href="#imdb" role="tab" id="imdb-tab" data-toggle="tab" aria-controls="imdb" aria-expanded="false">VEGETABLE</a></li>
                    </ul>
                    <div id="myTabContent" class="tab-content">
                        <div role="tabpanel" class="tab-pane fade active in" id="home" aria-labelledby="home-tab">
                            <div class="w3_agile_recipe-grid">

                                <div class="col-md-6 menu-grids">

                                    <div class="menu-text">
                                        @forelse($menus as $menu)


                                            <div class="menu-text-left">
                                                <div class="rep-w3l-img">
                                                    <img src="{{url('images',$menu->image)}}/">
                                                </div>
                                                <div class="rep-w3l-text">
                                                    <h4>{{$menu->name}}</h4>
                                                    <h6>{{$menu->description}}</h6>
                                                    <br>
                                                    <br>
                                                    <a href="{{route('cart.addItem',$menu->id)}}">Add To Cart</a>

                                                </div>

                                                <div class="clearfix"> </div>
                                                <br>
                                                <br>


                                            </div>
                                            <div class="menu-text-right">
                                                <h4> ${{$menu->price}}</h4>

                                            </div>
                                            <div class="clearfix"> </div>
                                        @empty
                                            <h2>no menu</h2>
                                        @endforelse
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>kana Korma</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <a href="{{route('cart.addItem',$menu->id)}}">Add To Cart</a>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Kana vindaloo</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <a href="{{route('cart.addItem',$menu->id)}}">Add To Cart</a>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Kana Mushroomr</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <a href="{{route('cart.addItem',$menu->id)}}">Add To Cart</a>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Kana Tandoori</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <a href="{{route('cart.addItem',$menu->id)}}">Add To Cart</a>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Kana Kebab</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <a href="{{route('cart.addItem',$menu->id)}}">Add To Cart</a>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">

                            <div class="w3_agile_recipe-grid">
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="rating" aria-labelledby="rating-tab">
                            <div class="w3_agile_recipe-grid">
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>with wild mushrooms and asparagus</h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="imdb" aria-labelledby="imdb-tab">
                            <div class="w3_agile_recipe-grid">
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>Itaque earum rerum hic tenetur </h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>Itaque earum rerum hic tenetur </h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>Itaque earum rerum hic tenetur </h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="col-md-6 menu-grids">
                                    <div class="menu-text">

                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>Itaque earum rerum hic tenetur </h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$ 50</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>

                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>Itaque earum rerum hic tenetur </h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>

                                        <div class="menu-text-right">
                                            <h4>$25</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                    <div class="menu-text">
                                        <div class="menu-text-left">
                                            <div class="rep-w3l-img">
                                                <img src="images/d1.jpg" alt=" " class="img-responsive">
                                            </div>
                                            <div class="rep-w3l-text">
                                                <h4>Lorem ipsum dolor</h4>
                                                <h6>Itaque earum rerum hic tenetur </h6>
                                                <br>
                                                <br>
                                                <h6> add to cart</h6>
                                            </div>

                                            <div class="clearfix"> </div>
                                        </div>
                                        <div class="menu-text-right">
                                            <h4>$30</h4>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>
                                <div class="clearfix"> </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>












@endsection
