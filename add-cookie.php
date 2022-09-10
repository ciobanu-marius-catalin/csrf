<?php
ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
session_start();
$value =  time();
$_SESSION["favcolor"] = "green";
setcookie("TestCookie", $value, [
    'expires' => time() + 86400,
    'path' => '/',
    'domain' => 'csrf.catalinciobanu.com',
    'secure' => true,
    'httponly' => true,
    'samesite' => 'None',
]);