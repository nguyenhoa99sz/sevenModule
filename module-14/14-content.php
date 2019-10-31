<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-14">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="title">
                    <h1>Dowload NowJobsala Application for More Opportunity !</h1>
                    <span>Jobzone is one of the best job portal website in this world. Now it’s avaliable
                        for Play Store & also App Store. So Download now !</span>
                </div>
                <button class="google">Google play</button >
                <button class="store">App store</button >
             
            </div>
            <div class="col-md-6">
                <img src="./images/app.png" alt="" class="img-responsive app">
            </div>
        </div>
    </div>


</div>