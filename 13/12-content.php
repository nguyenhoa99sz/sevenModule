<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<style>
    html, body {
      position: relative;
      height: 80%;
    }
    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
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
  <h1 class="oo">Related Product</h1>
<div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide"><img src="/12/images/giay1.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay2.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay3.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay4.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay5.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay6.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay7.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay8.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay9.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>
      <div class="swiper-slide"><img src="/12/images/giay10.jpg" width="900px" height="300px"><a class="pipi"><i class="fa fa-heart"></i><br><a class="pipi1"><i class="fa fa-search-plus"></i></a></a></div>

    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>