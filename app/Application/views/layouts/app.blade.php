<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{--<title>{{ config('app.name', 'Laravel') }} | @yield('title')</title>--}}
    <title>@yield('title')</title>
    {{--<link href="{{ asset('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" type="text/css" href="{{url('website/source/bootstrap-3.3.6-dist/css/bootstrap.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/source/font-awesome-4.5.0/css/font-awesome.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/style/slider.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('website/style/mystyle.css')}}">




    @if(getDir() == 'rtl')
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.css">
    @endif
    {{ Html::style('css/sweetalert.css') }}
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
    @stack('css')



</head>



<body>




        <!-- Header -->
        <div class="allcontain">
            <div class="header">
                <ul class="socialicon">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
                <ul class="givusacall">
                    <li>Give us a call : +66666666 </li>
                </ul>
                <ul class="logreg">
                    <li><a href="#">Login </a> </li>
                    <li><a href="#"><span class="register">Register</span></a></li>
                </ul>
            </div>
            <!-- Navbar Up -->
            <nav class="topnavbar navbar-default topnav">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed toggle-costume" data-toggle="collapse" data-target="#upmenu" aria-expanded="false">
                            <span class="sr-only"> Toggle navigaion</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand logo" href="#"><img src="{{url('website/image/logo1.png')}}" alt="logo"></a>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="upmenu">
                    <ul class="nav navbar-nav" id="navbarontop">
                        <li class="active"><a href="#">HOME</a> </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle"	data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">CATEGORIES <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdowncostume">
                                <li><a href="#">Sport</a></li>
                                <li><a href="#">Old</a></li>
                                <li><a href="#">New</a></li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">DEALERS <span class="caret"></span></a>
                            <ul class="dropdown-menu dropdowncostume">
                                <li><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="3">3</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="contact.html">CONTACT</a>

                        </li>
                        <button><span class="postnewcar">POST NEW CAR</span></button>
                    </ul>
                </div>
            </nav>
        </div>
        <!--_______________________________________ Carousel__________________________________ -->
        <div class="allcontain">
            <div id="carousel-up" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner " role="listbox">
                    <div class="item active">
                        <img src="{{url('website/image/oldcar.jpg')}}" alt="oldcar">
                        <div class="carousel-caption">
                            <h2>Porsche 356</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('website/image/porche.jpg')}}" alt="porche">
                        <div class="carousel-caption">
                            <h2>Porche</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{{url('website/image/benz.jpg')}}" alt="benz">
                        <div class="carousel-caption">
                            <h2>Car</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur ,<br>
                                sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                </div>
                <nav class="navbar navbar-default midle-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed textcostume" data-toggle="collapse" data-target="#navbarmidle" aria-expanded="false">
                            <h1>SEARCH TEXT</h1>
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarmidle">
                        <div class="searchtxt">
                            <h1>SEARCH TEXT</h1>
                        </div>
                        <form class="navbar-form navbar-left searchformmargin" role="search">
                            <div class="form-group">
                                <input type="text" class="form-control searchform" placeholder="Enter Keyword">
                            </div>
                        </form>
                        <ul class="nav navbar-nav navbarborder">
                            <li class="li-category">
                                <a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Category<span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                                <ul class="dropdown-menu" id="mydd">
                                    <li><a href="#">Epic</a></li>
                                    <li><a href="#">Old</a></li>
                                    <li><a href="#">New</a></li>
                                </ul>
                            </li>
                            <li class="li-minyear"><a class="btn  dropdown-toggle btn-costume"  id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Min Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                                <ul class="dropdown-menu" id="mydd2">
                                    <li><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                </ul>
                            </li>
                            <li class="li-maxyear"><a class="btn dropdown-toggle btn-costume"  id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Max Year <span class="glyphicon glyphicon-chevron-down downicon"></span></a>
                                <ul class="dropdown-menu" id="mydd3">
                                    <li><a href="#">1900</a></li>
                                    <li><a href="#">2000</a></li>
                                    <li><a href="#">2016</a></li>
                                </ul>
                            </li>
                            <li class="li-slideprice">
                                <p> <label class="slidertxt" for="amount">Price </label>
                                    <input class="priceslider" type="text" id="amount" readonly="readonly">
                                </p>
                                <div id="slider-range"></div>

                            </li>
                            <li class="li-search"> <button class="searchbutton"><span class="glyphicon glyphicon-search "></span></button></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </div>
        <div class="container">
        @yield('content')

        <!-- ____________________Featured Section ______________________________-->
        <div class="allcontain">
            <div class="feturedsection">
                <h1 class="text-center"><span class="bdots">&bullet;</span>F E A T U R E S<span class="carstxt">C A R S</span>&bullet;</h1>
            </div>
            <div class="feturedimage">
                <div class="row firstrow">
                    <div class="col-lg-6 costumcol colborder1">
                        <div class="row costumrow">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img1colon">
                                <img src="{{url('website/image/featurporch.jpg')}}" alt="porsche">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                                <div class="featurecontant">
                                    <h1>LOREM IPSUM</h1>
                                    <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                        sed do eiusmod tempor incididunt </p>
                                    <h2>Price &euro;</h2>
                                    <button id="btnRM" onclick="rmtxt()">READ MORE</button>
                                    <div id="readmore">
                                        <h1>Car Name</h1>
                                        <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                            sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                            sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                            sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                            sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br>
                                        </p>
                                        <button id="btnRL">READ LESS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 costumcol colborder2">
                        <div class="row costumrow">
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 img2colon">
                                <img src="{{url('website/image/featurporch1.jpg')}}" alt="porsche1">
                            </div>
                            <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 txt1colon ">
                                <div class="featurecontant">
                                    <h1>LOREM IPSUM</h1>
                                    <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                        sed do eiusmod tempor incididunt </p>
                                    <h2>Price &euro;</h2>
                                    <button id="btnRM2">READ MORE</button>
                                    <div id="readmore2">
                                        <h1>Car Name</h1>
                                        <p>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                            sed do eiusmod tempor incididunt <br>"Lorem ipsum dolor sit amet, consectetur ,<br>
                                            sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1 ,
                                            sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1
                                            sed do eiusmod tempor incididunt"Lorem ipsum dolor sit amet, consectetur1<br></p>
                                        <button id="btnRL2">READ LESS</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>



        <!-- ______________________________________________________Bottom Menu ______________________________-->
        <div class="bottommenu">
            <div class="bottomlogo">
                <span class="dotlogo">&bullet;</span><img src="{{url('website/image/collectionlogo1.png')}}" alt="logo1"><span class="dotlogo">&bullet;;</span>
            </div>
            <ul class="nav nav-tabs bottomlinks">
                <li role="presentation" ><a href="#/" role="button">ABOUT US</a></li>
                <li role="presentation"><a href="#/">CATEGORIES</a></li>
                <li role="presentation"><a href="#/">PREORDERS</a></li>
                <li role="presentation"><a href="#/">CONTACT US</a></li>
                <li role="presentation"><a href="#/">RECEIVE OUR NEWSLETTER</a></li>
            </ul>
            <p>"Lorem ipsum dolor sit amet, consectetur,  sed do eiusmod tempor incididunt <br>
                eiusmod tempor incididunt </p>
            <img src="{{url('website/image/line.png')}}" alt="line"> <br>
            <div class="bottomsocial">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-pinterest"></i></a>
            </div>
            <div class="footer">
                <div class="copyright">
                    &copy; Copy right 2016 | <a href="#">Privacy </a>| <a href="#">Policy</a>
                </div>
                <div class="atisda">
                    Designed by <a href="http://www.webdomus.net/">Web Domus Italia - Web Agency </a>
                </div>
            </div>
        </div>






    {!! Links::track(true) !!}

    {{ Html::script('js/sweetalert.min.js') }}

        <script type="text/javascript" src="{{url('website/source/bootstrap-3.3.6-dist/js/jquery.js')}}"></script>
        <script type="text/javascript" src="{{url('website/source/js/isotope.js')}}"></script>
        <script type="text/javascript" src="{{url('website/source/js/myscript.js')}}"></script>
        <script type="text/javascript" src="{{url('website/source/bootstrap-3.3.6-dist/js/jquery.1.11.js')}}"></script>
        <script type="text/javascript" src="{{url('website/source/bootstrap-3.3.6-dist/js/bootstrap.js')}}"></script>

    <script type="application/javascript">
        function deleteThisItem(e){
            var link = $(e).data('link');
            swal({
                        title: "Are you sure?",
                        text: "You will not be able to recover this Item Again!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#DD6B55",
                        confirmButtonText: "Yes, delete it!",
                        closeOnConfirm: false
                    },
                    function(){
                        window.location = link;
                    });
        }
    </script>
    @include('sweet::alert')
    @stack('js')









</body>
</html>
