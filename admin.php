<!DOCTYPE html>
<html lang="en">
<?php
session_start();
include "includes/db.php";

?>
<?php

if(!isset($_SESSION['name'])){ // provera da li je ulogovan
    header("Location: index.php");  // ako nije admin vrati ga na index
    exit(); 
}
if ($_SESSION['is_admin'] == 0){ // provera da li je admin
    header("Location: index.php");  // ako nije admin vrati ga na index
    exit();
} 
?>
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Tool</title>
</head>

<body>


<?php
include "includes/menu.php";
include "includes/footer.php";
?>
<div class="glavna">
<div class="forma">

<form name="admin" method="post">
                        <input type="text" name="title" placeholder="titl" required/><br><br>
                        <input type="text" name="slika" placeholder="slika" required/><br><br>
                        <input type="text" name="opis" placeholder="opis" required/><br><br>
                        <input type="number" name="cena" placeholder="cena" required/><br><br>
                        <button type="submit" name="submit">Salji</button>  
                        <?php
                        if (isset($_REQUEST['submit'])){
                                        // brise backslashes i escapes specialne karaktere iz stringa
                                        $title = mysqli_real_escape_string($conn, stripslashes($_REQUEST['title']));
                                        $slika = mysqli_real_escape_string($conn, stripslashes($_REQUEST['slika'])); 
                                        $opis = mysqli_real_escape_string($conn, stripslashes($_REQUEST['opis']));
                                        $cena = mysqli_real_escape_string($conn, stripslashes($_REQUEST['cena']));
                        
                                        $query = "INSERT INTO artikli (Artikl,  Opis, Slika, Cena)
                                                VALUES ('$title', '$opis', '$slika', '$cena')";
                                        $result = mysqli_query($conn, $query);
                        
                                    
                        if($result){
                    echo "<h3 class='text-center'>Uspesno ste uneli artikl.</h3><br/>";
                } else {
                    echo "Greska";
                }  }            
                ?>
                    </form>
                    </div>
                    </div>
</body>
</html>