<!DOCTYPE html>
<?php
    $lang = isset($_COOKIE['lang']) ? $_COOKIE['lang'] : 'en';
?>
<html lang="<?php echo $lang; ?>">
  <head>
    <?php
        /**
        *  try to get the language from the cookie
        *  if its not set default it to english
        **/

        getTranslations($lang);

    ?>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?php echo translate('website-title-label'); ?></title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>

    <link rel="stylesheet" type="text/css" href="public/styles/main.css?v=6">

    <?php if($lang == 'ar'): ?>
        <link rel="stylesheet" type="text/css" href="public/styles/arabic.css">
    <?php  endif; ?>
    <link href="public\styles\fontawesome-free-5.0.9\web-fonts-with-css\css\fontawesome-all.css"

    <link href="https://fonts.googleapis.com/css?family=Merriweather:300|Playfair+Display" rel="stylesheet">
    <script defer src="https://use.fontawesome.com/releases/v5.0.9/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
  </head>

  <body>
    <div class="main">
      <div class="nav">
        <div class="nav__container container">
          <div class="nav__mobile  fas fa-envelope"> 00961 3 765495 </div>
          <div class="nav__language" id="jsToggleLanguage"><?php echo translate('label-language'); ?></div>
        </div>
      </div>
      <div class="header">
        <div class="header__container container">
          <a href="#" class="header__logo">
            <img src="public/assets/logo/logo.png">
          </a>
          <nav class="header__menu">
            <ul class="menu">
              <li class="menu__item">
                <a href="#jsAboutUs" class="menu__link jsScrollTo" tabindex="0">
                  <?php echo translate('label-menu-about-us'); ?>
                </a>
              </li>
              <li class="menu__item">
                <a href="#jsServices" class="menu__link jsScrollTo" tabindex="1">
                    <?php echo translate('label-menu-services'); ?>
                </a>
              </li>
              <li class="menu__item">
                <a href="#jsWorkWithUs" class="menu__link jsScrollTo" tabindex="2">
                  <?php echo translate('label-menu-workwithus'); ?>
                </a>
              </li>
              <li class="menu__item">
                <a href="#jsContactUs" class="menu__link jsScrollTo" tabindex="3">
                   <?php echo translate('label-menu-contactus'); ?>
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
