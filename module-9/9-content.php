<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <strong class="thangtop">Last News Update From Blog</strong>
    <p class="ioio"><a>All News <i class="fa fa-arrow-right"></i></a></p>
    <div class="row">
    
    <div class="col-md-4">
    <div class="blog">
        <div class="nnn" style="position:relative">
            <img src="images/menu/giay3.jpg" width="100%" height="250px">
            <div class="hnhn">
            Design,creative
            </div>
        </div>
        <div class="chumo">
        <p class="gbgb"><i class="fa fa-calendar-check"></i>Setemper 26,1019</p>
        <h4>Freelace</h4>
        <p class="gachduoi">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo fuga vero dicta, rem non placeat soluta quasi accusantium magni, aliquid ipsa eveniet at molestias architecto nulla. Vero consequuntur nulla sint!</p>
        <i class="fa fa-male dsds" style="padding-left:40px"> Admin</i>
        <i class="fa fa-comments dada" style="padding-left:160px"> 0</i>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="blog">
        <div class="nnn" style="position:relative">
            <img src="images/menu/giay2.jpg" width="100%" height="250px">
            <div class="hnhn">
            Design,creative
            </div>
        </div>
        <div class="chumo">
        <p class="gbgb"><i class="fa fa-calendar-check"></i>Setemper 26,1019</p>
        <h4>Freelace</h4>
        <p class="gachduoi">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo fuga vero dicta, rem non placeat soluta quasi accusantium magni, aliquid ipsa eveniet at molestias architecto nulla. Vero consequuntur nulla sint!</p>
        <i class="fa fa-male dsds" style="padding-left:40px"> Admin</i>
        <i class="fa fa-comments dada" style="padding-left:160px"> 0</i>
    </div>
    </div>
    </div>
    <div class="col-md-4">
    <div class="blog">
        <div class="nnn" style="position:relative">
            <img src="images/menu/giay1.jpg" width="100%" height="250px">
            <div class="hnhn">
            Design,creative
            </div>
        </div>
        <div class="chumo">
        <p class="gbgb"><i class="fa fa-calendar-check"></i>Setemper 26,1019</p>
        <h4>Freelace</h4>
        <p class="gachduoi">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo fuga vero dicta, rem non placeat soluta quasi accusantium magni, aliquid ipsa eveniet at molestias architecto nulla. Vero consequuntur nulla sint!</p>
        <i class="fa fa-male dsds" style="padding-left:40px"> Admin</i>
        <i class="fa fa-comments dada" style="padding-left:160px"> 0</i>
    </div>
    </div>
    </div>
</div>
</div>