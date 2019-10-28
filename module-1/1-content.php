<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <div class="container">
        <!--menu-->
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo-menu" href="#"><img src="./images/logo_white.png" alt=""></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div id="collapsibleNavId" class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right ">
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home <b class="caret"></b></a>
                        <ul class="dropdown-menu sm-menu">
                            <li><a href="#">Action</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Employers <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu sm-menu">
                            <li><a href="#">Action</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu sm-menu">
                            <li><a href="#">Action</a></li>
                        </ul>
                    </li>
                    <li class="dropdown dmenu">
                        <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Pages <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu sm-menu">
                            <li><a href="#">Action</a></li>
                        </ul>
                    </li>
                    <li><a href="#" class="login">Login</a></li>
                    <li><a href="#" class="register">Register</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
        <!--end menu-->
        <div class="banner">
            <h1>Million Offers Waiting for You !</h1>
            <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua.
                Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip</span>
            <form class="form-inline">
                <div class="form-group mx-sm-3 mb-2">
                    <label for="inputText" class="sr-only">Job title or keywword</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Job title or keywword">
                    <div class="btn-group dropup">
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdow-button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            All Categories <b class="caret"></b>
                        </button>
                        <div class="dropdown-menu">
                            <li><a href="#">Acountin</a></li>
                            <li><a href="#">Grafic design</a></li>
                        </div>
                    </div>
                    <label for="inputText" class="sr-only">Location</label>
                    <input type="text" class="form-control" id="inputText" placeholder="Location">
                </div>
                <button type="submit" class="btn btn-primary mb-2 identity">Find Jobs</button>
            </form>
            <span>Trending Keywords:</span> <a href="#">Designer, </a><a href="#">Developer, </a>
            <a href="#">Marketing, </a><a href="#"> Business, </a><a href="#"> Creative</a>
        </div>
    </div>
</div>