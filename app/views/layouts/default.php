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
include_once('Blocks/header.php');
echo $content;
include_once('Blocks/footer.php');
?>
<script src="/vendor/twbs/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>