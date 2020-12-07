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
    <title><?php print 'As, ' . date("l"). ' ir PHP';?></title>

</head>
<body>
        <h1><?php print 'Vytenis';?> -HTML <?php print' ir PHP' ;?> asas jau nuo <?php print date('Y') . ' metu';?></h1>
        <p>Viskas prasidejo <?php print date('m') . ' menesio, ' . date('d') . ' diena';?>
        </p>
</body>
</html>
