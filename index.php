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
    <title> Aš valdau HTML!<?php print ' ir PHP' ;?></title>


   

</head>
<body>
        <h1><?php print 'Vytenis';?> -HTML <?php print' ir PHP' ;?> asas</h1>
        <p>Kuriu dinamini turini.
        Atidaryta: <?php print $today = date("F j, Y, g:i a") ?></p>
</body>
</html>
