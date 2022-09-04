<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require "includes/db.php";
?>
<head>

    <link rel="icon" href="./img/favicon.ico">
    <script src="./js/js.js?v=<?php echo time(); ?>"></script> <!-- za refreshovanje stranice -->
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Store</title>
</head>
<body>
<?php include "includes/menu.php"; ?>
<?php include "includes/footer.php"; ?>
<div class="od">

<?php 
include "store1.php"; // ostavljeno kao primer kako se koristi include
?>

</div>


<br><br><br><br>
</body>
</html>