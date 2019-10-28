<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-5">
    <div class="container">
        <h1 class="mili">Milions Ofers Waiting For You !</h1> <br>
        <p class="mili2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis culpa voluptas voluptatum
            voluptates laborum alias excepturi nobis maxime expedita sequi, est, error esse odit atque, repellendus
            ipsam maiores! Aperiam, earum.</p>
        <div class="row qwe">
            <div class="col-md-5">
                <input type="text" class="form-control coupon-code" placeholder="Job Title or Keyboard">
            </div>
            <div class="col-md-3">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" style="width:100%; color: #ccc" type="button"
                        id="menu1" data-toggle="dropdown">All Catagories
                        <span class="caret" style="margin-left:114px"></span></button>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">HTML</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">CSS</a></li>
                        <li role="presentation"><a role="menuitem" tabindex="-1" href="#">JavaScript</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-2">
                <div class="dropdown">
                    <button class="btn btn-default dropdown-toggle" style="color: #ccc;width:100%;" type="button"
                        id="menu1" data-toggle="dropdown">All Catagories
                        <span style="margin-left:10px;">⦿</span></button>
                </div>
            </div>
            <div class="col-md-2">
                <button class="btn btn-default dropdown-toggle"
                    style="background-color:#feac36; color: white;width:100%;border-color:#feac36" type="button"
                    id="menu1" data-toggle="dropdown"><i class="fa fa-search" style="margin-right:10px"></i>Find
                    Jobs</button>
            </div>
            <div class="foot">
                <a class="tren">Trending KeyWord:</a><a class="fooot1">Designer,</a><a class="fooot1">Designer,</a><a class="fooot1">Designer,</a><a class="fooot1">Designer,</a>
            </div>
        </div>
    </div>
</div>
</div>