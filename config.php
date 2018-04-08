<?php

$environment = "development";

if($environment == "development"):
  // $siteUrl = 'http://localhost/smartways/';
  $siteUrl = 'http://localhost:8888/smartways/';
else:
  $siteUrl = 'http://localhost/smartways/';
endif;
