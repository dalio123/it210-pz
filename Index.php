<!DOCTYPE html>
<html lang="en">
<?php
session_start();
?>
<head>

    <link rel="icon" href="./img/favicon.ico">
    <script src="./js/js.js?v=<?php echo time(); ?>"></script> <!-- za refreshovanje stranice -->
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Violet Design</title>
</head>
<body style="overflow: hidden" onload="anim()">
<?php include "includes/menu.php"; ?>
<div class="pozdrav"><H1> DOBRODOSLI<br> U <br>VIOLET DESIGN</H1></div>
<div>
    <div id="anim" >  
    <img src="./img/logo.png" alt="logo" >
    </div>
    </div>
    <?php include "includes/footer.php"; ?>
</body>
</html>