
@extends('layout.main')


@section('content')


    <div class="recipes-w3l-agile" id="menu">
    <div class="container">
        <h3 class="tittle">CLICK HERE TO SEE OUR MENU</h3>
        <div class="wthree-agile-sevre-grids">

        <div class="col-md-4">
        </div>
        </div>
        <div class="wthree-agile-sevre-grids">
            <div class="col-md-4 wthree-agile-grid">
                <div class="hi-icon-wrap hi-icon-effect-7 hi-icon-effect-7b">
                    <a href="{{url('menus')}}" class="hi-icon icon1"></a>
                </div>
                <h4>Menu</h4>
            </div>


    </div>
</div>
<!--//banner-section -->

<!--/team -->
<div class="team" id="team">
    <div class="container">
        <h3 class="tittle">OUR CHEFS</h3>
        <div class="wthree-team">

            <div class="col-md-6 w3l-agile-team-grid">
                <div class="hover ehover8">
                    <img class="img-responsive" src="{{asset('dist/images/t1.jpg')}}" alt="">
                    <div class="overlay point" data-toggle="modal" data-target="#modal8">
                        <h4>Arindam Mallick</h4>
                        <p class="set1">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/indiancuisine.oulu"><i class="fa fa-facebook"></i></a>
                        </p>
                        <hr><hr>
                        <p class="set2">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 w3l-agile-team-grid">
                <div class="hover ehover8">
                    <img class="img-responsive" src="{{asset('dist/images/t2.jpg')}}" alt="">
                    <div class="overlay point" data-toggle="modal" data-target="#modal8">
                        <h4>Nusrat Bushra</h4>
                        <p class="set1">
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a target="_blank" href="https://www.facebook.com/nusrat.bushra"><i class="fa fa-facebook"></i></a>
                        </p>
                        <hr><hr>
                        <p class="set2">
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!--//team -->
<!-- Countdown-timer -->

<!-- gallery -->
<div id="gallery" class="gallery">
    <div class="container">
        <h3 class="tittle">OUR GALLERY</h3>
        <div class="gallery_gds">
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g1.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img class="img-responsive img-style row2" src="{{asset('dist/images/g1.jpg')}}" alt=""  />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g2.jpg')}}" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                        <img src="{{asset('dist/images/g2.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g3.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="{{asset('dist/images/g3.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g4.jpg')}}" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
                        <img src="{{asset('dist/images/g4.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g5.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="{{asset('dist/images/g5.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g6.jpg')}}" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                        <img src="{{asset('dist/images/g6.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g7.jpg')}}" class="swipebox" title="Praesent non purus fermentum, eleifend velit non Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis.">
                        <img src="{{asset('dist/images/g7.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g8.jpg')}}" class="swipebox" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis maximus tortor diam, ac lobortis justo rutrum quis. Praesent non purus fermentum, eleifend velit non">
                        <img src="{{asset('dist/images/g8.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="col-md-4 gal-w3l">
                <div class="agileits-img">
                    <a href="{{asset('dist/images/g2.jpg')}}" class="swipebox" title="Duis maximus tortor diam, ac lobortis justo rutrum quis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent non purus fermentum, eleifend velit non">
                        <img src="{{asset('dist/images/g2.jpg')}}" alt="" class="img-responsive img-style row2" />
                    </a>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //gallery -->
<!-- reservation -->

<!-- //reservation -->
<!-- contact -->
<div class="contact" id="contact">
    <!-- <div class="col-md-6 contact-right">
        <div class="wthree-contact-row">
            <h4>GET IN TOUCH</h4>
            <form action="#" method="post">
                <input type="text" name="Name" placeholder="Name" required="">
                <input class="email" type="email" name="Email" placeholder="Email" required="">
                <textarea placeholder="Message" name="Message" required=""></textarea>
                <input type="submit" value="SUBMIT">
            </form>
        </div>
    </div> -->
    <div class="col-md-12 contact-left">
        <iframe 
        src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJWZyXC6wygEYR-esLSuv6Smk&key=AIzaSyAY_t0g7eVuGqhcZSTLOvppGHx1i2P-j9Y"
         allowfullscreen>
    </iframe>
    </div>

    <div class="clearfix"> </div>
</div>
<!-- //contact -->
    </div>
    @endsection