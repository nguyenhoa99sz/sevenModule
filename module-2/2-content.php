<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-2">
    <div class="container">
        <div class="row">
            <div class="adudu-fiste">
                <h3 class="adudu-h31">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sequi veniam labore
                    porro architecto
                    atque</h3>
                <p class="adudu-p1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis optio quibusdam
                    corporis officiis et,
                    rem
                    obcaecati accusamus cum ratione, voluptatem laudantium officia, nemo id ipsa. Debitis numquam nisi
                    quo
                    eos?</p>
            </div>
            <div class="col-md-4">
                <div class="divaa">
                    <img src="images/1.jpg" alt="img" class="myimg">
                </div>
                <div class="adudu-fakebtn">
                    <p>Home Page 1 <a class="adudu-a">Demo</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="divaa">
                    <img src="images/2.jpg" alt="img" class="myimg">
                </div>
                <div class="adudu-fakebtn">
                    <p>Home Page 1 <a class="adudu-a">Demo</a></p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="divaa">
                    <img src="images/3.jpg" alt="img" class="myimg">
                </div>
                <div class="adudu-fakebtn">
                    <p>Home Page 1 <a class="adudu-a">Demo</a></p>
                </div>
            </div>
        </div>
    </div>

</div>