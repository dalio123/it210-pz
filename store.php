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
$sql = "SELECT * FROM `artikli`;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if (isset($_REQUEST['submit'])){
  $query = "INSERT INTO `korpa` (`Artikl`, `Cena`, `user_id`) VALUES ('{$row['Artikl']}', '{$row['Cena']}', '{$_SESSION['id']}')";}
while($row = $result->fetch_assoc()) {
    echo '
<div class="card">
  <img src="'.$row["Slika"].'" style="width:100%">
  <h1>'.$row["Artikl"].'</h1>
  <p class="price">'.$row["Cena"].'RSD</p>
  <p>'.$row["Opis"].'</p>
  <form method="post"> <button type="submit" name="submit">Dodaj u korpu</button></form> '.// dodati u novu formu koristeci '.$row["Id"].' '.$row["Artikl"].' '.$row["Cena"].'
'</div> ' ;
}   
?>

</div>


<br><br><br><br>
</body>
</html>