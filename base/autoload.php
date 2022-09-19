<?php

include_once './base/helpers.php';
include_once './base/jdf.php';
$files = array_diff(scandir('models'),array('.','..'));

foreach($files as $file)
{
    require_once "./models/$file";
}

session_start();