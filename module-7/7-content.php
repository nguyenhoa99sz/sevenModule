<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-7">
    <div class="container">
        <div class="title">
            <h1>Featured Jobs Post of This Week</h1>
        </div>
        <div class="item-wrap">
            <div class="list-job">
                <div class="logo">
                    <img src="./images/bitcon.jpg" alt="biton" class="img-responsive">
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
                    <img src="./images/mvimsy.jpg" alt="biton" class="img-responsive">
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
                    <img src="./images/amar.jpg" alt="biton" class="img-responsive">
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
                    <img src="./images/sapient.jpg" alt="biton" class="">
                </div>
                <div class="information">
                    <span class="time">Freelance</span><br>
                    <a href="#" class="title">Principal DevOps Engineer (Senior Manager, Technology)</a><br>
                    <a href="#" class="info">Visy</a><span> - Posted 1 month ago</span><br>
                    <span>Location: <b>38-78 Bergen St Brooklyn</b> </span>
                    <span>Salary: <b>$100 - $130 per week</b> </span>
                </div>
            </div>
        </div>
    </div>
</div>
</div>