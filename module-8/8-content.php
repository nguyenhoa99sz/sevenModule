<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<!-- Content -->
<div class="type-8">
    <div class="container start">
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="quote-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">         
                        <p >
                            I’m very happy interdum eget ipsum. Nunc
                            pulvinar ut nulla eget sollicitudin. In hac habitasse plat
                            ea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Int
                            eger metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                        </p>
                    </div> <br>
                    <div class="profile-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-3.png" alt="Marissa Spencer">
                        <p class="people">
                            <span class="name">Marissa Spencer</span><br>
                            <span class="title"> Curabitur commodo</span>
                        </p>  
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="quote-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">         
                        <p >
                            I’m very happy interdum eget ipsum. Nunc
                            pulvinar ut nulla eget sollicitudin. In hac habitasse plat
                            ea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Int
                            eger metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                        </p>
                    </div> <br>
                    <div class="profile-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-3.png" alt="Marissa Spencer">
                        <p class="people">
                            <span class="name">Marissa Spencer</span><br>
                            <span class="title"> Curabitur commodo</span>
                        </p>  
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="quote-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">         
                        <p >
                            I’m very happy interdum eget ipsum. Nunc
                            pulvinar ut nulla eget sollicitudin. In hac habitasse plat
                            ea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Int
                            eger metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                        </p>
                    </div> <br>
                    <div class="profile-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-3.png" alt="Marissa Spencer">
                        <p class="people">
                            <span class="name">Marissa Spencer</span><br>
                            <span class="title"> Curabitur commodo</span>
                        </p>  
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="quote-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">         
                        <p >
                            I’m very happy interdum eget ipsum. Nunc
                            pulvinar ut nulla eget sollicitudin. In hac habitasse plat
                            ea dictumst. Integer mattis varius ipsum, posuere posuere est porta vel. Int
                            eger metus ligula, blandit ut fermentum a, rhoncus in ligula. Duis luctus.
                        </p>
                    </div> <br>
                    <div class="profile-container col-md-10 col-sm-12 col-xs-12 col-md-push-1">
                        <img class="img-responsive profile " src="images/profile-3.png" alt="Marissa Spencer">
                        <p class="people">
                            <span class="name">Marissa Spencer</span><br>
                            <span class="title"> Curabitur commodo</span>
                        </p>  
                    </div>
                </div>
            </div>
            <!-- Add Pagination -->
            

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>
    </div>
</div>