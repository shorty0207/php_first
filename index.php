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
    <title>PHP lydes ir <?php print date('Y-m-d', strtotime('+1 day'));?></title>

</head>
<body>
        <h1><?php print 'Vytenis';?> -PHP su manim buvo ir <?php print date('H-i-s', strtotime('-1 hour'));?></h1>
        <p> <?php print date('Y', strtotime('+1 year') );?> ne uz kalnu!
        </p>
</body>
</html>
