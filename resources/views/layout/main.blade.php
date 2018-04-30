

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Indian Cuisine</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- Custom Theme files -->
    <link href="{{asset('dist/css/bootstrap.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('dist/css/style.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('dist/css/menu.css')}}" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('dist/css/swipebox.css')}}">
    <link href="{{asset('dist/css/menu.css')}}" type="text/css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="{{asset('//code.jquery.com/ui/1.11.2/themes/smoothness/jquery-ui.css')}}">


    <link href="{{asset('dist/css/font-awesome.css')}}" rel="stylesheet">


    <link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link href="//fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">


</head>
<body>

    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="{{url('/')}}"><span>I</span>NDIAN <span>C</span>UISINE</a></h1>
                </div>
                <!-- navbar-header -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            @if(Auth::check() && Auth::user()->isAdmin())
                                <a href="{{url('/admin')}}" class="hvr-underline-from-center">ADMIN PANEL</a>
                            @endif
                        </li>
                        <li>
                        <li><a href="{{url('/')}}" class="hvr-underline-from-center">Home</a></li>
                        <li><a href="#" class="hvr-underline-from-center scroll">Contact us </a></li>
                        <li><a href="{{url('menus')}}" class="hvr-underline-from-center">Menu</a></li>
                        
                        @if (Route::has('login'))
                            @auth
                                <li><a href="{{url('/home')}}" class="hvr-underline-from-center">{{Auth::user()->name}}</a></li>
                                <li><a href="{{url('/logout')}}">LOGOUT</a></li>




                            @else
                                <li><a href="{{ route('login') }}">LOGIN</a></li>
                                <li><a href="{{ route('register') }}">REGISTER</a></li>

                            @endauth
                        @endif
                        <li><a href="{{route('cart.index')}}">MY CART <span class="badge badge-light">{{Cart::count()}}</span></a></li>








                    </ul>
                </div>
                <div class="clearfix"> </div>
            </nav>

        </div>
    </div>
  


    <!-- //header -->
    <!-- banner-text -->

    <!-- //header -->
    <!-- banner-text -->
    <div class="row">

    <div class="col-md-3 col-md-offset-8">

        @if(session()->has('notif'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <strong>Notificaton</strong> {{session()->get('notif')}}
                </div>

        @endif
    </div>
    </div>
        @yield('content')
    <br>

<!-- Footer -->
<div class="w3l-footer">
    <div class="container">
        <div class="footer-info-agile">
            <div class="col-md-4 footer-info-grid address">
                <h4>Contact <span class="opening">Us</span></h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit Agile ac.</p>
                <address>
                    <ul>
                        <li>New York City</li>
                        <li>40019 Bronx,Morris Park</li>

                        <li>Telephone </li>
                        <li>Email : <a class="mail" href="mailto:mail@example.com">info(at)example.com</a></li>
                    </ul>
                </address>
            </div>
            <div class="col-md-4 footer-info-grid opening_hours">
                <h4>Opening <span class="opening">Hours</span></h4>
                <ul class="times">

                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Monday</span><div class="hours">09 am - 010 pm</div>  <div class="clearfix"></div></li>
                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Tuesday</span><div class="hours">09 am - 010 pm</div>  <div class="clearfix"></div></li>
                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Wednesday</span><div class="hours">09 am - 010 pm</div>  <div class="clearfix"></div></li>
                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Thursday</span><div class="hours">09 am - 010 pm</div>  <div class="clearfix"></div></li>
                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Friday</span><div class="hours">11 am - 08 pm</div>  <div class="clearfix"></div></li>
                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Saturday</span><div class="hours">10 am - 11 pm</div>  <div class="clearfix"></div></li>
                    <li><i class="glyphicon glyphicon-time"> </i><span class="week">Sunday</span><div class="hours">Closed</div>  <div class="clearfix"></div></li>

                </ul>
            </div>
            <div class="col-md-4 footer-grid">
                <h4>Our <span class="opening">INSTAGRAM</span></h4>

                <div class="footer-grid-instagram">
                    <a href=#"><img src="{{asset('dist/images/f1.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href=#"><img src="{{asset('dist/images/f2.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href=#"><img src="{{asset('dist/images/f3.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href=#"><img src="{{asset('dist/images/f4.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href=#"><img src="{{asset('dist/images/f5.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="footer-grid-instagram">
                    <a href=#"><img src="{{asset('dist/images/f6.jpg')}}" alt=" " class="img-responsive"></a>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="clearfix"></div>
        </div>

        <div class="connect-agileits">
            <div class="col-md-6 connect-social">
                <h5>CONNECT WITH US</h5>
                <section class="social">
                    <ul>
                        <li><a class="icon fb" href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a class="icon tw" href="#"><i class="fa fa-twitter"></i></a></li>

                        <li><a class="icon pin" href="#"><i class="fa fa-pinterest"></i></a></li>
                        <li><a class="icon db" href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li><a class="icon gp" href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                </section>

            </div>
            <div class="col-md-6 newsletter">
                <h5>NEWSLETTER</h5>

                <form action="#" method="post" class="newsletter">
                    <input class="email" type="email" placeholder="Your email address..." required="">

                    <input type="submit" class="submit" value="">
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
    <div class="copyright-wthree">
<p>OAMK</p>    </div>
</div>



<a href=#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

<!-- //smooth-scrolling-of-move-up -->
<!-- js -->
<script src="{{asset('dist/js/jquery-2.2.3.min.js')}}"></script>
<!-- //js -->
<!--banner-Slider-->
    <script src="{{asset('dist/js/responsiveslides.min.js')}}"></script>

<script>
    // You can also use "$(window).load(function() {"
    $(function () {
        // Slideshow 4
        $("#slider3").responsiveSlides({
            auto: true,
            pager:true,
            nav:false,
            speed:500,
            namespace: "callbacks",
            before: function () {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function () {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!-- Calendar -->
<link rel="stylesheet" href="{{asset('dist/css/jquery-ui.css')}}" />
<script src="{{asset('dist/js/jquery-ui.js')}}"></script>
    <script src="{{asset('js/app1.js')}}"></script>


    <script>
    $(function() {
        $( "#datepicker" ).datepicker();
    });
</script>
<!-- //Calendar -->
<!--//banner-Slider-->
<!-- swipe box js -->
<script src="{{asset('dist/js/jquery.adipoli.min.js')}}" type="text/javascript"></script>
<script type="text/javascript">
    $(function(){
        $('.row2').adipoli({
            'startEffect' : 'overlay',
            'hoverEffect' : 'sliceDown'
        });
    });

</script>
<script src="{{asset('dist/js/jquery.swipebox.min.js')}}"></script>
<script type="text/javascript">
    jQuery(function($) {
        $(".swipebox").swipebox();
    });
</script>
<!-- //swipe box js -->
<!-- smooth-scrolling-of-move-up -->
<script type="text/javascript">
    $(document).ready(function() {
        /*
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
        };
        */

        $().UItoTop({ easingType: 'easeOutQuart' });

    });
</script>

<!-- start-smooth-scrolling -->
<script type="text/javascript" src="{{asset('dist/js/move-top.js')}}"></script>

    <script type="text/javascript" src="{{asset('dist/js/easing.js')}}"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- //end-smooth-scrolling -->
<script src="{{asset('dist/js/bootstrap.js')}}"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        var stripe = Stripe('pk_test_FZz1641WpWy8vHCcYoxhtmVL');
        var elements = stripe.elements();


        var style = {
            base: {
                // Add your base input styles here. For example:
                fontSize: '16px',
                color: "#32325d",
            }
        };

        // Create an instance of the card Element.
        var card = elements.create('card', {style: style});

        // Add an instance of the card Element into the `card-element` <div>.
        card.mount('#card-element');

        card.addEventListener('change', function(event) {
            var displayError = document.getElementById('card-errors');
            if (event.error) {
                displayError.textContent = event.error.message;
            } else {
                displayError.textContent = '';
            }
        });

        // Create a token or display an error when the form is submitted.
        var form = document.getElementById('payment-form');
        form.addEventListener('submit', function(event) {
            event.preventDefault();

            stripe.createToken(card).then(function(result) {
                if (result.error) {
                    // Inform the customer that there was an error.
                    var errorElement = document.getElementById('card-errors');
                    errorElement.textContent = result.error.message;
                } else {
                    // Send the token to your server.
                    stripeTokenHandler(result.token);
                }
            });
        });
        function stripeTokenHandler(token) {
            // Insert the token ID into the form so it gets submitted to the server

            var form = document.getElementById('payment-form');
            var hiddenInput = document.createElement('input');
            hiddenInput.setAttribute('type', 'hidden');
            hiddenInput.setAttribute('name', 'stripeToken');
            hiddenInput.setAttribute('value', token.id);
            form.appendChild(hiddenInput);

            // Submit the form
            form.submit();
        }
    </script>

    <script src="{{asset('//code.jquery.com/jquery-1.10.2.js')}}"></script>
    <script src="{{asset('//code.jquery.com/ui/1.11.2/jquery-ui.js')}}"></script>
    <script>
        $(function() {
            $( "#datepicker" ).datepicker({

            });


        });


    </script>



</div>
</body>
</html>