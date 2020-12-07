<?php
//$page = $_SERVER['PHP_SELF'];
//$sec = "1";
//header("Refresh: $sec; url=$page");
?>
<?php  date_default_timezone_set('Europe/Vilnius');?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>PHP lydes  <?php print date('Y-m-d', strtotime(rand(0, 10) . 'year')); ?></title>

</head>
<body>
        <h1><?php print 'Vytenis';?> - Galbut turesiu <?php print rand(1, 5); ?></h1>
        <p> D. Trumpas nebebus prezidentu: <?php print date('Y', strtotime(rand(2,10) . 'year')); ?>
        </p>
</body>
</html>
