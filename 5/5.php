<?php
    $url_host = 'http://' . $_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';

    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
        require_once($dir_block . '/libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/5.less', 'css/5.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>5</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href="<?php echo $url_path ?>/css/bootstrap-v3.3.7.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/5.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="<?php echo $url_path ?>/css/swiper.min.css">
        <script src="<?php echo $url_path ?>/js/jquery-3.1.1.min.js"></script>
        
        
    </head>
    <body>
        <?php include '5-content.php'; ?>
        <script src="<?php echo $url_path ?>/js/swiper.min.js"></script>
       <!--  <script src="<?php echo $url_path ?>/js/5-script.js"></script> -->
        <script>
    var swiper = new Swiper('#swiper-container2', {
        watchSlidesProgress: true,
        watchSlidesVisibility: true,
        slidesPerView: 2,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
      },
      spaceBetween: 20,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  </script>
    </body>
</html>