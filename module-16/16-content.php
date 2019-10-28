<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <!--top header-->
    <div class="top-header">
        <div class="container">
            <div class="row header">
                <div class="col-md-6">
                    <div class="item-left">
                        <div class="nav-item">
                            <span href="#">OUR PHONE NUMBER: +09 (00)8978343</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <ul class="item-right">
                        <li class="item">
                            <a href="#"><i class="fa fa-user"></i> My Account</a>
                        </li>
                        <li class="item">
                            <a href="#">Cart</a>
                        </li>
                        <li class="item">
                            <a href="#">our location</a>
                        </li>
                        <li class="item">
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--end header-->
    <!--menu-->

    <div class="menu">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse"
                        data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="brand"><img src="./images/logo-bg.png" alt="logo" class="img-logo"></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOME<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">FAQS</a></li>
                                <li><a href="#">About me</a></li>
                                <li><a href="#">Contact us</a></li>
                                <li><a href="#">Feature</a></li>
                            </ul>
                        </li>
                        <li><a href="#">SHOP</a></li>
                        <li><a href="#">BLOG</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right top-right">
                        <li class="nav-link">
                            <a href="#">Login / Register</a>
                        </li>
                        <li>
                            <form action="" class="form-search">
                                <input type="search" class="search" placeholder="Search..." ,>
                                <i class="fa fa-search search-button"></i>
                            </form>
                        </li>
                        <li class="item-cart">
                            <a href="#" id="opennav"><i class="fa fa-shopping-cart cart-button"></i></i></a>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>

        </div>
    </div>
     <!--end menu-->

    <p class="container">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Magnam obcaecati amet, veritatis iusto porro
        dignissimos ratione excepturi iure tempora velit fugit odit sed. Repellat fuga optio dicta esse nobis dolores.
    </p>


</div>