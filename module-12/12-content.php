<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<section class="type-572">
    <div class="container">
        <div class="row adudu">
            <div class="col-md-6 backgroundbody col-sm-12">
                <h2 class="cachtren">We are working according to the benefit of the client and freeland</h2>
                <p class="chumo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus ipsum numquam,
                    corrupti, nemo aliquid corporis quibusdam rem laboriosam dicta quam eum maiores ullam? Numquam quam
                    at facere assumenda, iste eveniet.</p>
                <div class="gadit">
                    <div class="col-md-4">
                        <h2 class="tomau">1,000k</h2>Jobs Posted
                    </div>
                    <div class="col-md-4">
                        <h2 class="tomau">684k</h2>Expert Candite
                    </div>
                    <div class="col-md-4">
                        <h2 class="tomau">3,580</h2>ToTalCompani
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12" style="padding:0%">
                <img src="images/body.jpg" alt="img-responsive" class="anhbody">
            </div>
        </div>
    </div>
</section>