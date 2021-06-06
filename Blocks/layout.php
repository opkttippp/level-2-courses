<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <link href="/vendor/twbs/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="/style.css" rel="stylesheet">

    <title>Mysite</title>
</head>
<body>

<?php
if ((isset($_GET['id'])) && ($_GET['id'] == 'Login' || $_GET['id'] == 'Reg' || $_GET['id'] ==
    'Profile' || $_GET['id'] == 'Posts')) {
    $sourse = $_GET['id'];
    $sourse .= '.php';
} else {
    $sourse = 'Blocks/home.php';
}

include_once('Blocks/header.php');
include_once("$sourse");
include_once('Blocks/footer.php');
?>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>