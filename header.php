<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Smartways Web Development & Concultancy</title>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <link rel="stylesheet" type="text/css" href="public/styles/main.css?v=5">
    <?php
      if(isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'ar'):
    ?>
        <link rel="stylesheet" type="text/css" href="public/styles/arabic.css">
    <?php
      endif;
    ?>
    <link href="https://fonts.googleapis.com/css?family=Merriweather:300|Playfair+Display" rel="stylesheet">
  </head>

  <body>
    <div class="main">
      <div class="nav">
        <div class="nav__container container">
          <div class="nav__mobile"> 00961 3 765495 </div>
          <div class="nav__language"> Language </div>
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
                <a href="#" class="menu__link" tabindex="0">
                  About Us
                </a>
              </li>
              <li class="menu__item">
                <a href="#" class="menu__link" tabindex="1">
                  What We Do
                </a>
              </li>
              <li class="menu__item">
                <a href="#" class="menu__link" tabindex="2">
                  Services
                </a>
              </li>
              <li class="menu__item">
                <a href="#" class="menu__link" tabindex="3">
                  Contact Us
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
