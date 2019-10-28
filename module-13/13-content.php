<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-13">
    <div class="container">
        <h1>Meet Our Professional Team</h1>
        <div class="row">
            <div class="col-md-3">
                <div class="list-inner">
                    <div class="img-top">
                        <img src="./images/1.jpg" alt="" class="img-responsive">
                        <div class="icon-share">
                            <ul>
                                <a href="#"><li class="social-facebook "><i class="fa fa-facebook"></i></li></a>
                                <a href="#"><li class="social-twitter "><i class="fa fa-twitter"></i></li></a>
                                <a href="#"><li class="social-google "><i class="fa fa-google-plus"></i></li></a>
                                <a href="#"><li class="social-in "><i class="fa fa-linkedin"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="depcition">
                        <h4><a href="#">Marketing Administrator</a></h4>
                        <span>Duane Villalta</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-inner">
                    <div class="img-top">
                        <img src="./images/2.jpg" alt="" class="img-responsive">
                        <div class="icon-share">
                            <ul>
                            <a href="#"><li class="social-facebook "><i class="fa fa-facebook"></i></li></a>
                                <a href="#"><li class="social-twitter "><i class="fa fa-twitter"></i></li></a>
                                <a href="#"><li class="social-google "><i class="fa fa-google-plus"></i></li></a>
                                <a href="#"><li class="social-in "><i class="fa fa-linkedin"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="depcition">
                        <h4><a href="#">Chief Executive Officer</a></h4>
                        <span>Joseph Farner</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-inner">
                    <div class="img-top">
                        <img src="./images/3.jpg" alt="" class="img-responsive">
                        <div class="icon-share">
                            <ul>
                            <a href="#"><li class="social-facebook "><i class="fa fa-facebook"></i></li></a>
                                <a href="#"><li class="social-twitter "><i class="fa fa-twitter"></i></li></a>
                                <a href="#"><li class="social-google "><i class="fa fa-google-plus"></i></li></a>
                                <a href="#"><li class="social-in "><i class="fa fa-linkedin"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="depcition">
                        <h4><a href="#">Marketing Manager</a></h4>
                        <span>Johanne Deyoung</span>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="list-inner">
                    <div class="img-top">
                        <img src="./images/4.jpg" alt="" class="img-responsive">
                        <div class="icon-share">
                            <ul>
                            <a href="#"><li class="social-facebook "><i class="fa fa-facebook"></i></li></a>
                                <a href="#"><li class="social-twitter "><i class="fa fa-twitter"></i></li></a>
                                <a href="#"><li class="social-google "><i class="fa fa-google-plus"></i></li></a>
                                <a href="#"><li class="social-in "><i class="fa fa-linkedin"></i></li></a>
                            </ul>
                        </div>
                    </div>
                    <div class="depcition">
                        <h4><a href="#">Assistant Manager</a></h4>
                        <span>Thomas Moriz</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>