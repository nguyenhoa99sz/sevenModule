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
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel sequi veniam labore porro architecto atque
                quis, deleniti, assumenda maiores rerum alias quasi et, maxime sit quidem. Assumenda dolore totam
                debitis?</h3>
        </div>
    </div>

</div>