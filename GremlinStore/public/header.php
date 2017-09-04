<!DOCTYPE HTML>
<html>
    <head>
        <title>Gremlin Store</title>
        <link href="public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all"/>
        <link href="public/css/style.css" rel="stylesheet" type="text/css" media="all" />
        <link href="public/css/font-awesome.css" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="New Shop Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
        <script type="application/x-javascript"> 
            addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); 
        function hideURLbar(){ 
            window.scrollTo(0,1); 
        } 
        </script>
        <script src="public/js/jquery.min.js"></script>
        <link href='//fonts.googleapis.com/css?family=Cagliostro' rel='stylesheet' type='text/css'>
        <link href='//fonts.googleapis.com/css?family=Open+Sans:400,800italic,800,700italic,700,600italic,600,400italic,300italic,300' rel='stylesheet' type='text/css'>
        <link href="public/css/coreSlider.css" rel="stylesheet" type="text/css">
        <script src="public/js/coreSlider.js"></script>
        <script src="public/js/main.js"></script>
        <script src="public/js/responsiveslides.min.js"></script>
        <script>
            $(function () {
                $("#slider").responsiveSlides({
                    auto: true,
                    nav: true,
                    speed: 500,
                    namespace: "callbacks",
                    pager: true,
                });
            });
        </script>
        <script type="text/javascript" src="public/js/bootstrap-3.1.1.min.js"></script>
        <script src="public/js/simpleCart.min.js"></script>
        <script src="public/js/jstarbox.js"></script>
        <link rel="stylesheet" href="public/css/jstarbox.css" type="text/css" media="screen" charset="utf-8" />
        <script type="text/javascript">
            jQuery(function () {
                jQuery('.starbox').each(function () {
                    var starbox = jQuery(this);
                    starbox.starbox({
                        average: starbox.attr('data-start-value'),
                        changeable: starbox.hasClass('unchangeable') ? false : starbox.hasClass('clickonce') ? 'once' : true,
                        ghosting: starbox.hasClass('ghosting'),
                        autoUpdateAverage: starbox.hasClass('autoupdate'),
                        buttons: starbox.hasClass('smooth') ? false : starbox.attr('data-button-count') || 5,
                        stars: starbox.attr('data-star-count') || 5
                    }).bind('starbox-value-changed', function (event, value) {
                        if (starbox.hasClass('random')) {
                            var val = Math.random();
                            starbox.next().text(' ' + val);
                            return val;
                        }
                    })
                });
            });
        </script>
    </head
    <body>
        <div class="header">
            <div class="header-top">
                <div class="container">
                    <div class="top-left">
                        <a href="#">Help <i class="glyphicon glyphicon-phone" aria-hidden="true"></i>+(506) 8944-68-78</a>
                    </div>
                    <div class="top-right">
                        <ul>
                            <?php
                                if(!(session_status() != 2)){
                                    if(isset($_SESSION['UserEmail'])){
                                        echo '<li><a href="?controlador=Client&accion=logOut">Log out</a></li>';
                                    }else{
                                        echo '<li><a href="?controlador=Default&accion=login">Log in</a></li>';
                                        echo '<li><a href="?controlador=Default&accion=register">Sign in</a></li>';
                                    }
                                }else{
                                    echo '<li><a href="?controlador=Default&accion=login">Log in</a></li>';
                                    echo '<li><a href="?controlador=Default&accion=register">Sign in</a></li>';
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
            <div class="heder-bottom">
                <div class="container">
                    <div class="logo-nav">
                        <div class="logo-nav-left">
                            <h1><a href="?controlador=Default&accion=index"><img src="public/images/image3688.png" alt=" "/></a></h1>
                        </div>
                        <div class="logo-nav-left1">
                            <nav class="navbar navbar-default">
                                <div class="navbar-header nav_2">
                                    <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div> 
                                <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                                    <ul class="nav navbar-nav">
                                        <li class="active"><a href="?controlador=Default&accion=index" class="act">Home</a></li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Products<b class="caret"></b></a>
                                            <ul class="dropdown-menu multi-column columns-3">
                                                <div class="row">
                                                    <div class="col-sm-3  multi-gd-img">
                                                        <ul class="multi-column-dropdown">
                                                            <h6>Gremlin Store</h6>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=All">All</a></li>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=T-Shirts">T-Shirts</a></li>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=Sweathers">Sweathers</a></li>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=Shoes">Shoes</a></li>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=Jewerly">Jewerly</a></li>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=Bags">Bags</a></li>
                                                            <li><a href="?controlador=Product&accion=getProducts&type=Hats">Hats</a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="col-sm-3  multi-gd-img">
                                                        <a href="products.html"><img src="public/images/woo.jpg" alt=" "/></a>
                                                    </div> 
                                                    <div class="col-sm-3  multi-gd-img">
                                                        <a href="products.html"><img src="public/images/woo1.jpg" alt=" "/></a>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </ul>
                                        </li>
                                        <?php
                                            if(!(session_status() != 2)){
                                                if(isset($_SESSION['UserEmail'])){
                                                    echo '<li class="dropdown">
                                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Account<b class="caret"></b></a>
                                                            <ul class="dropdown-menu multi-column columns-3">
                                                                <div class="row">
                                                                    <div class="col-sm-3  multi-gd-img">
                                                                        <ul class="multi-column-dropdown">
                                                                        <h6>Account data</h6>
                                                                            <li><a href="?controlador=Default&accion=updateClient">Update  data</a></li>
                                                                            <li><a href="products.html">Drop account</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </ul>
                                                        </li>
                                                        <li><a href="?controlador=Default&accion=mail">Mail Us</a></li>';
                                                }
                                            }
                                        ?>
                                    </ul>
                                </div>
                            </nav>
                        </div>
                        <div class="header-right2">
                            <div class="cart box_1">
                                <a href="checkout.html">
                                    <h3> <div class="total">
                                            <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                                        <img src="public/images/bag.png" alt="" />
                                    </h3>
                                </a>
                                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                                <div class="clearfix"> </div>
                            </div>	
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
            </div>
        </div>
