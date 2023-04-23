<?php
date_default_timezone_set('Asia/Kolkata');
function printer($arr) {
    echo "<pre>";
    print_r($arr);
    echo "</pre>";
}

include 'push.php';

$url = isset($_GET['url'])? $_GET['url'] : "dashboard";
$file = $url.".php";
file_exists($file)? require_once $file : 'dashboard.php';


?>