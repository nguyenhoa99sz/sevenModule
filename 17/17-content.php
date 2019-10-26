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
     <a>V.Harison</a> / <a>Life Style</a> / <a>Leave a comment</a> <br> <br>
      <p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
      <a class="theread">Read More</a>
    </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>About Me</h2>
      <div class="hbhb">
      <span><a class="maria">Creative</span></a> <br>
      <span><a class="maria">Future</span></a> <br>
      <span><a class="maria">Hobbies</span></a> <br>
      <span><a class="maria">international</span></a> <br> 
      <span><a class="maria">Life Style</span></a><br> 
      <span><a class="maria">Travel</span></a><br>
      </div>
      
    </div>
    <div class="card">
      <h3 class="mnb">Recents Post</h3>
      <div><img class="theimg" src="images/giay3.jpg">
      <span><a class="maria">Maria OzaWa</a></span>
      <p class="thep">August 8,2015</p>
    </div>
      <div><img class="theimg" src="images/giay3.jpg">
      <span><a class="maria">Maria OzaWa</a></span>
      <p class="thep">August 8,2015</p>
    </div>
      <div><img class="theimg" src="images/giay3.jpg">
      <span><a class="maria">Maria OzaWa</a></span>
      <p class="thep">August 8,2015</p>
    </div>
  </div>
  </div>
</div>
</div>
</div>