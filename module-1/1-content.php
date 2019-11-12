<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1">
    <header class="top-header">
        <div class="container">
            <!--menu-->
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
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="collapsibleNavId" class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right ">
                        <li class="dropdown dmenu">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home <b
                                    ></b></a>
                        </li>
                        <li class="dropdown dmenu">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Demos <b></b></a>
                        </li>
                        <li class="dropdown dmenu">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Featured <b></b></a>
                        </li>
                        <li class="dropdown dmenu">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Supports <b></b></a>
                        </li>
                        <button class="btn-pur"><i class="fa fa-archive"></i> PURCHASE THEME $59</button>
                    </ul>

                </div><!-- /.navbar-collapse -->
            </nav>
            <!--end menu-->

        </div>

    </header>
    <div class="container">
        <div class="adudu">
            <h1 class="color1">A Prinium Mangeto Shopping Theme For Your Bunisess</h1>
            <p class="color2">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nostrum quibusdam, placeat
                voluptas obcaecati alias
                deleniti aut iusto rerum laborum recusandae? Impedit explicabo id ratione? Provident itaque velit
                corporis.
                Totam, soluta.</p>
                <button class="btn-btn">Discover Theme Demo</button>
        </div>
    </div>
</div>