<?php

$value =  time();

setcookie("TestCookie", $value, ['samesite' => 'None']);