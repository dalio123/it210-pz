<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pretraga</title>
</head>
<body>
<?php include "includes/menu.php"; ?>
<?php include "includes/footer.php"; ?>
<div class="glavna">
<div class="forma">
<form method="post">
<input type="text" name="search" placeholder="Pretraga..">
<button type="submit" name="submit">pretrazi</button> 
<?php
include 'includes/db.php';
if(isset($_POST['submit']))
{
    if (isset($_REQUEST['submit'])){
    $search = mysqli_real_escape_string($conn, stripslashes($_REQUEST['search']));
    $sql= "SELECT * FROM artikli WHERE Artikl LIKE '%$search%' OR Opis LIKE '%$search%'";
    $result = mysqli_query($conn, $sql);    
    echo "<table border='1'>";
			while ($row = mysqli_fetch_assoc($result)) {
			    echo "<tr>";
			    foreach ($row as $field => $value) {
			        echo "<td>" . $value . "</td>";
			    }
			    echo "</tr>";
			}
			echo "</table>";
    }
    
}
 
?> 
</form>
</div>
</div>
</body>
</html>