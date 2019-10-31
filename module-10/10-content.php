<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-10">
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
                        <div class="col-md-2">
                            <img src="images/ong1.jpg" alt="img-responsive" class="chinhsua">
                        </div>
                        <div class="col-md-8 quaqua">
                            <a class="desegn">Graphics Design & Software</a>
                            <p class="nameman">Jerry Thomas <span class="fa fa-star checked"></span></p>
                            <p class="socola">Location : <a class="desegn1">194 Green Point Ava BrokLyn</a></p>
                            <Button class="mybutton">HTML</Button> <Button class="mybutton">PhotoShop</Button> <Button class="mybutton">PHP</Button>
                        </div>
                        <div class="col-md-3">
                            Salary:40 per Hours 
                        </div>
                    </div>
                    <div class="list-job">
                        <div class="col-md-2">
                            <img src="images/ong1.jpg" alt="img-responsive" class="chinhsua">
                        </div>
                        <div class="col-md-8 quaqua">
                            <a class="desegn">Graphics Design & Software</a>
                            <p class="nameman">Jerry Thomas <span class="fa fa-star checked"></span></p>
                            <p class="socola">Location : <a class="desegn1">194 Green Point Ava BrokLyn</a></p>
                            <Button class="mybutton">HTML</Button> <Button class="mybutton">PhotoShop</Button> <Button class="mybutton">PHP</Button>
                        </div>
                        <div class="col-md-3">
                            Salary:40 per Hours 
                        </div>
                    </div>
                    <div class="list-job">
                        <div class="col-md-2">
                            <img src="images/ong1.jpg" alt="img-responsive" class="chinhsua">
                        </div>
                        <div class="col-md-8 quaqua">
                            <a class="desegn">Graphics Design & Software</a>
                            <p class="nameman">Jerry Thomas <span class="fa fa-star checked"></span></p>
                            <p class="socola">Location : <a class="desegn1">194 Green Point Ava BrokLyn</a></p>
                            <Button class="mybutton">HTML</Button> <Button class="mybutton">PhotoShop</Button> <Button class="mybutton">PHP</Button>
                        </div>
                        <div class="col-md-3">
                            Salary:40 per Hours 
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!-- <div class="search">
                    <h3><a href="#">Search keywords</a> </h3>
                    <input class="form-control" type="text" placeholder="web-design" aria-label="Search">
                </div> -->
                <div class="panel panel-default">
                        <div class="panel-heading" role="tab" id="headingthree">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsethree"
                                    aria-expanded="true" aria-controls="collapsethree" class='collapsed'>
                                    Search
                                </a>
                            </h4>
                        </div>
                        <div id="collapsethree" class="panel-collapse collapse" role="tabpanel"
                            aria-labelledby="headingthree">
                            <div class="panel-body">
                            <input class="form-control" type="text" placeholder="web-design" aria-label="Search">
                            </div>
                        </div>
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
