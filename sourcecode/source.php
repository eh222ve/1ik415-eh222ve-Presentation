<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="source.css">
</head>
<body>
<?php

include('CSource.php');

$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..', 'add_ignore' => array('.htaccess')));


echo $source->View();
?>
</body>
</html>