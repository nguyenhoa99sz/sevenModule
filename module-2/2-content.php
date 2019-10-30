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
            <div class="col-md-8">
                <div class="top-title">
                    <span>Showing 1 – 10 of 14 results</span>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Default
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">HTML</a></li>
                            <li><a href="#">CSS</a></li>
                            <li><a href="#">JavaScript</a></li>
                        </ul>
                    </div>
                    <div class="dropdown">
                        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">10 Per Page
                            <span class="caret"></span></button>
                        <ul class="dropdown-menu">
                            <li><a href="#">All</a></li>
                        </ul>
                    </div>
                </div>
                <div class="item-wrap">
                    <div class="list-job">
                        <div class="logo">
                            <img src="./images/bitcon.jpg" alt="biton" class="img-responsive">
                            <a href="#" class="item-heart"><i class="fa fa-heart-o"></i></a>
                        </div>
                        
                        <div class="information">
                            <span class="time">Part time</span><br>
                            <a href="#" class="title">Professional Copywriter for Advertising</a><br>
                            <a href="#" class="info">Bitcon</a><span> - Posted 1 month ago</span><br>
                            <span>Location: <b>9 Remsen St Brooklyn, NY</b> </span>
                            <span>Salary: <b>$18 - $25 per hour</b> </span>
                        </div>
                    </div>
                    <div class="list-job">
                        <div class="logo">
                            <img src="./images/amar.jpg" alt="biton" class="img-responsive">
                            <a href="#" class="item-heart"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="information">
                            <span class="time">Temporary</span><br>
                            <a href="#" class="title">Bank Transfer Operations Team Leader</a><br>
                            <a href="#" class="info">Amar</a><span> - Posted 1 month ago</span><br>
                            <span>Location: <b>305 Hicks St Brooklyn, NY</b> </span>
                            <span>Salary: <b>$120 - $150 per week</b> </span>
                        </div>
                    </div>
                    <div class="list-job">
                        <div class="logo">
                            <img src="./images/sapient.jpg" alt="biton" class="img-responsive">
                            <a href="#" class="item-heart"><i class="fa fa-heart-o"></i></a>
                        </div>
                        <div class="information">
                            <span class="time">Freelance</span><br>
                            <a href="#" class="title">Principal DevOps Engineer (Senior Manager, Technology)</a><br>
                            <a href="#" class="info">Visy</a><span> - Posted 1 month ago</span><br>
                            <span>Location: <b>38-78 Bergen St Brooklyn</b> </span>
                            <span>Salary: <b>$100 - $130 per week </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="search">
                    <h3><a href="#">Search keywords</a> </h3>
                    <input class="form-control" type="text" placeholder="web-design" aria-label="Search">
                </div>
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne" class='collapsed'>
                                    Categories
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingOne">
                            <div class="panel-body">
                                <input type="checkbox" name="vehicle1" value="Bike">Accounting & Finance(5)<br>
                                <input type="checkbox" name="vehicle2" value="Car">Education & Training(7)<br>
                                <input type="checkbox" name="vehicle3" value="Boat">Graphics Design(8)<br>
                                <input type="checkbox" name="vehicle1" value="Bike">Health & Hospital(6)<br>
                                <input type="checkbox" name="vehicle2" value="Car">Restaurant & Food(7)<br>
                                <input type="checkbox" name="vehicle3" value="Boat">Website & Software(6)<br>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Job Type
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingTwo">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion"
                                    href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Salary
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingThree">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck
                                quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
