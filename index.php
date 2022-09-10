<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Hello world
<?php
session_start();
echo 'session cookie';
print_r($_SESSION);
print_r($_COOKIE)
?>
</body>
</html>