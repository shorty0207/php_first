<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


?>
<!DOCTYPE html>
<html>
<head>
    <title> PHP lydes<?php> 'As, ' . 'echo date('l \t\h\e jS')' . 'ir PHP' ?></title>


    <script src="https://kit.fontawesome.com/42762d49f1.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro:wght@200&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed:wght@600&display=swap" rel="stylesheet">


</head>
<body>
    <h1>Vytenis - galbut turesiu  <?php print rand(1,5); ?> vaikus </h1>
    <p>D.Trumpas nebebus prezidentu:<?php print date('Y-m-d', strtotime(rand(2,10) . 'year'))  ;?>ne uz kalnu!</p>

</body>
</html>
