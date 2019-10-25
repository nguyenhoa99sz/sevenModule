<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-17">
<div class="container">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <div class="img-hover-zoom--brightness" style="height:200px;">
        <img src="images/giay1.jpg" class="img-responsive">
        <div class="hnhn">
          <span>24</span>
          <span>JUN</span>
        </div>
      </div>
      <br>
      <h1>Viverra metus parturient</h1>
      <br><b class="theb"> Posted By</b>
     <a>V.Harison</a> / <a>Life Style</a> / <a>Leave a comment</a>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <a class="theread">Read More</a>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="hbhb">
      <span>Creative</span> <br>
      <span>Future</span> <br>
      <span>Hobbies</span> <br>
      <span>international</span> <br> 
      <span>Life Style</span><br> 
      <span>Travel</span><br>
      </div>
      
    </div>
    <div class="card">
      <h3>Recents Post</h3>
      <div class="theimg"><img src="images/giay3.jpg"></div><br>
      <div class="theimg"><img src="images/giay3.jpg"></div><br>
      <div class="theimg"><img src="images/giay3.jpg"></div>
    </div>
  </div>
</div>
</div>
</div>