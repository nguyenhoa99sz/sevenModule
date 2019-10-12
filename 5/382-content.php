<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-382">
<div class="col-md-6" style="padding:0;">
    <img src="images/menu/giay1.png" width="100%" height="591.14px">
</div>
<div class="col-md-6" style="padding: 0; background-color: #dad5cf;height:591.14px"> 
<h1 style="font-size: 38px;color: #b57b00;line-height: 1;text-align: center" class="vc_custom_heading font-alt vc_custom_1480277277923">New collection shoes</h1>
<h1 style="font-size: 42px;line-height: 1.1;text-align: center" class="vc_custom_heading"><strong>Elegance &amp; style shoes man sale</strong></h1>
<style>
    .swiper-container {
      width: 80%;
      height: 80%;
    }
    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: -webkit-box;
      display: -ms-flexbox;
      display: -webkit-flex;
      display: flex;
      -webkit-box-pack: center;
      -ms-flex-pack: center;
      -webkit-justify-content: center;
      justify-content: center;
      -webkit-box-align: center;
      -ms-flex-align: center;
      -webkit-align-items: center;
      align-items: center;
    }
  </style>
<script>
    var swiper = new Swiper('.swiper-container', {
      slidesPerView: 3,
      spaceBetween: 30,
      slidesPerGroup: 3,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
    });
  </script>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="images/menu/giay1.png" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>
      <div class="swiper-slide"><img src="images/menu/giay1.jpg" width="370px" height="300px"></div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>
</div>