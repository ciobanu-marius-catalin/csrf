<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
Hello world
session_start();
<?php echo 'session cookie'; ?>
<?php print_r($_SESSION); ?>
<?php print_r($_COOKIE)?>
</body>
</html>