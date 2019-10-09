<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="container">
    <strong style="font-size:200%;color:aquamarine;">Magazine & Blog</strong>
    <div class="blog">
        <div class="col-md-4">
        <img src="/382/images/menu/giay1.jpg" width="350px" height="350px">
        <br>
        <strong class="st">Shoes 1<strong>
            <br>
            <small style="color: chartreuse;">Leave a Comment<small>
                <br>
            <a style="color: #907878;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel itaque, nulla pariatur amet deserunt possimus. Sapiente ab dicta sunt explicabo adipisci ipsam, voluptates beatae, blanditiis at perferendis cum placeat.</a>
            <br>
            <p class="acc"><b><a href="#" target="_blank" style="color: #black;">Read More</a></b></p>
                <style>
                acc:link {
                text-decoration: none;
                }

                acc:visited {
                text-decoration: none;
                }

                acc:hover {
                text-decoration: underline;
                }

                acc:active {
                text-decoration: underline;
                }
                </style>
                <br>
                <b class="pp">Creative,Hobbies</b>
        </div>
        <div class="blog">
        <div class="col-md-4">
        <img src="/382/images/menu/giay2.jpg" width="350px" height="350px">
        <br>
        <strong class="st">Shoes 1<strong>
            <br>
            <small style="color: chartreuse;">Leave a Comment<small>
                <br>
            <a style="color: #907878;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel itaque, nulla pariatur amet deserunt possimus. Sapiente ab dicta sunt explicabo adipisci ipsam, voluptates beatae, blanditiis at perferendis cum placeat.</a>
            <br>
            <p class="acc"><b><a href="#" target="_blank" style="color: #black;">Read More</a></b></p>
                <style>
                acc:link {
                text-decoration: none;
                }

                acc:visited {
                text-decoration: none;
                }

                acc:hover {
                text-decoration: underline;
                }

                acc:active {
                text-decoration: underline;
                }
                </style>
                <br>
                <b class="pp">Creative,Hobbies</b>
        </div>
        <div class="blog">
        <div class="col-md-4">
        <img src="/382/images/menu/giay3.jpg" width="350px" height="350px">
        <br>
        <strong class="st">Shoes 1<strong>
            <br>
            <small style="color: chartreuse;">Leave a Comment<small>
                <br>
            <a style="color: #907878;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias vel itaque, nulla pariatur amet deserunt possimus. Sapiente ab dicta sunt explicabo adipisci ipsam, voluptates beatae, blanditiis at perferendis cum placeat.</a>
            <br>
            <p class="acc"><b><a href="#" target="_blank" style="color: #black;">Read More</a></b></p>
                <style>
                acc:link {
                text-decoration: none;
                }

                acc:visited {
                text-decoration: none;
                }

                acc:hover {
                text-decoration: underline;
                }

                acc:active {
                text-decoration: underline;
                }
                </style>
                <br>
                <b class="pp">Creative,Hobbies</b>
        </div>
    </div>
    <div class="col-md-4 t1">08 <br> AG</div>
    <div class="col-md-4 t2">08 <br> AG</div>
    <div class="col-md-4 t3">08 <br> AG</div>
</div>