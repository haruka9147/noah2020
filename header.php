<?php ini_set( 'display_errors', 1 );?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="canonical" href="<?php echo (empty($_SERVER["HTTPS"]) ? "http://" : "https://") . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"]; ?>">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.min.css">
    <link rel="stylesheet" href="/css/animate.min.css">
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
</head>
<body>
    <div class="container">
        <!--<div class="contents">
            
        </div>--><!-- //.contents -->
        <header<?php if($page != 'top'){ echo ' class="under"'; } ?>>
           <h1 class="pcNone"><img src="/images/common/logo.svg" width="25" alt="NOAH">株式会社NOAH</h1>
            <input type="checkbox" id="navcheck" role="button" title="menu">
            <label for="navcheck" aria-hidden="true" title="menu">
                <span class="menuBtn">
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="line"></span>
                    <span class="menuTxt">MENU</span>
                 </span>
            </label>
            <nav id="menu">
                <a href="/">TOP</a>
                <a href="/company">COMPANY</a>
                <a href="/service">SERVICE</a>
                <a href="/salon">N's SALON</a>
                <a href="/contact">CONTACT US</a>
            </nav>
            <div class="nav">
                <p><img src="/images/common/logo.svg" alt="NOAH"></p>
                <nav>
                    <ul>
                        <li class="active"><a href="/">TOP</a></li>
                        <li><a href="/company">COMPANY</a></li>
                        <li><a href="/service">SERVICE</a></li>
                        <li><a href="/salon">N's SALON</a></li>
                        <li><a href="/contact">CONTACT US</a></li>
                    </ul>
                </nav>
            </div><!-- //.nav -->
        </header>
        
        <main class="contents<?php if($page != 'top'){ echo ' '.$page.'Page';}?>">