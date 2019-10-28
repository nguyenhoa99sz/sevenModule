<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-11">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-6">
                        <div class="list-inner">
                            <div class="img-top">
                                <img src="./images/blog1.jpg" alt="" class="img-responsive">
                                <button class="btn categories-name">Design & Creative</button>
                            </div>
                            <div class="depcition">
                                <span><i class="fa fa-calendar-check-o"></i> September 26, 2019</span>
                                <h2><a href="#">Freelance Content Copywriter and Blogging Badass</a></h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam</span>
                            </div>
                            <div class="actor">
                                <a href="#"><i class="fa fa-user"></i> admin</a>
                                <a href="#"><i class="fa fa-comments-o coment" aria-hidden="true"> 0</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-inner">
                            <div class="img-top">
                                <img src="./images/blog2.jpg" alt="" class="img-responsive">
                                <button class="btn categories-name">Busines</button>
                            </div>
                            <div class="depcition">
                                <span><i class="fa fa-calendar-check-o"></i> August 23, 2019</span>
                                <h2><a href="#">Blog Writing with Experience in Copywriting and SEO</a></h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam</span>
                            </div>
                            <div class="actor">
                                <a href="#"><i class="fa fa-user"></i> admin</a>
                                <a href="#"><i class="fa fa-comments-o coment" aria-hidden="true"> 2</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-inner">
                            <div class="img-top">
                                <img src="./images/blog3.jpg" alt="" class="img-responsive">
                                <button class="btn categories-name">IT & Computer</button>
                            </div>
                            <div class="depcition">
                                <span><i class="fa fa-calendar-check-o"></i> September 26, 2019June 23, 2019</span>
                                <h2><a href="#">Writers Needed with Experience of Portable</a></h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam</span>
                            </div>
                            <div class="actor">
                                <a href="#"><i class="fa fa-user"></i> admin</a>
                                <a href="#"><i class="fa fa-comments-o coment" aria-hidden="true"> 0</i> </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="list-inner">
                            <div class="img-top">
                                <img src="./images/blog4.jpg" alt="" class="img-responsive">
                                <button class="btn categories-name">Photography</button>
                            </div>
                            <div class="depcition">
                                <span><i class="fa fa-calendar-check-o"></i> May 23, 2019</span>
                                <h2><a href="#">What Marketing Tips Didn’t Work?</a></h2>
                                <span>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                                    doloremque laudantium, totam</span>
                            </div>
                            <div class="actor">
                                <a href="#"><i class="fa fa-user"></i> admin</a>
                                <a href="#"><i class="fa fa-comments-o coment" aria-hidden="true"> 3</i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="search">
                    <form action="" method="get">
                        <div class="input-group">
                            <input type="text" placeholder="Search" name="s" class="form-control">
                            <button type="submit" class="btn btn-sm btn-search"><i class="fa fa-search "></i></button>
                            <input type="hidden" name="post_type" value="post" class="post_type">
                        </div>
                    </form>
                </div>
                <div class="categories">
                    <h4>Browse Category</h4>
                    <a href="#">Business (2)</a>
                    <a href="#">Design & Creative (2)</a>
                    <a href="#">Education (1)</a>
                    <a href="#">IT & Computer (2)</a>
                    <a href="#">Photography (1)</a>
                </div>
                <div class="laters">
                    <h4>Latest Post</h4>
                    <ul>
                        <li>
                            <div class="image">
                                <a href="#"><img src="./images/blog1.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="inner">
                                <a href="#">Freelance Content Copywriter and Blogging</a>
                                <span>September 26, 2019</span>
                            </div>
                        </li>
                        <li>
                            <div class="image">
                                <a href="#"><img src="./images/blog2.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="inner">
                                <a href="#">Blog Writing with Experience in Copywriting</a>
                                <span>August 23, 2019</span>
                            </div>
                        </li>
                        <li>
                            <div class="image">
                                <a href="#"><img src="./images/blog3.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="inner">
                                <a href="#"> Writers Needed with Experience of Portable </a>
                                <span>June 23, 2019</span>
                            </div>
                        </li>
                        <li>
                            <div class="image">
                                <a href="#"><img src="./images/blog4.jpg" alt="" class="img-responsive"></a>
                            </div>
                            <div class="inner">
                                <a href="#"> What Marketing Tips Didn’t Work Marketing</a>
                                <span>May 23, 2019</span>
                            </div>
                        </li>
                    </ul>



                </div>
            </div>

        </div>
    </div>
</div>