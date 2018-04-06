<?php
include 'config.php';
include 'helpers.php';

setcookie('lang', $_GET['lang'], time() + (86400 * 30), "/");

header('Location:' . $siteUrl);
