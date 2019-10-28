<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="text-wrap">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="text-left">
                <h1>Get Start Your New Job With Us !</h1>
                <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis</span>
                </div>
                
            </div>
            <div class="col-md-4">
                <button class="btn create-account">Create an Account <span class="badge badge-primary"></span></button> 
            </div>
        </div>
    </div>
    </div>
    
</div>