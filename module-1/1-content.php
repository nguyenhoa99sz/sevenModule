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
                    <a class="navbar-brand logo-menu" href="#"><img src="./images/logo_white.png" alt=""></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div id="collapsibleNavId" class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav navbar-right ">
                        <li class="dropdown dmenu">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Home <b
                                    class="caret"></b></a>
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
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Blog <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu sm-menu">
                                <li><a href="#">Contact</a></li>
                            </ul>
                        </li>
                        <li class="dropdown dmenu">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown">Pages <b
                                    class="caret"></b></a>
                            <ul class="dropdown-menu sm-menu">
                                <li><a href="#">Blog</a></li>
                            </ul>
                        </li>
                        <li><a href="#" class="login">Login</a></li>
                        <li><a href="#" class="register">Register</a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </nav>
            <!--end menu-->
        </div>

    </header>
    <span>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptateLorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptateLorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptateLorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        m ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut
        quaerat voluptate
        atque explicabo. Impedit ipsum repellat quisquam, commodi numquam corrupti, minus molestias iusto quae
        itaque totam veritatis!Lore
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eveniet, reiciendis. Magnam ut quaerat voluptate
    </span>



</div>