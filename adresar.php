<!DOCTYPE html>
<?php
session_start();
require "includes/db.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registracija</title>
        <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
    </head>
    <body>
    <?php include 'includes/menu.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <div class="glavna">
    <div class="centar">
    <?php 	
                 if($_SESSION['is_admin'] == 1) {
					$sql = "SELECT id, ime, prezime, ulica, pbroj, grad FROM adrese";
                 } else {
                    $sql = "SELECT id, ime, prezime, ulica, pbroj, grad FROM adrese WHERE email = '".$_SESSION['email']."';";
                 }
                    $result = mysqli_query($conn, $sql);
                    echo "<br>";
					echo "<table border='0' class='table table-bordered'>";
					echo "<tr>";
					echo "<th>Ime</th>";
					echo "<th>Prezime</th>";
                    echo "<th>Ulica i broj</th>";
                    echo "<th>Postanski broj</th>";
                    echo "<th>Grad</th>";   
                    echo "<th></th>";
                    

					echo "</tr>";
                    while ($row = mysqli_fetch_assoc($result)) {
					    echo "<tr>";
					    foreach ($row as $field => $value) {
					        if ($field == "ime" || $field == "prezime" || $field == "ulica" || $field == "pbroj" || $field == "grad"){
					        	echo "<td>" . $value . "</td>";	
					        } 
					    }
					    	$delete = "includes/deladres.php?id=" . $row["id"];

						    echo "<td>
						    		<a href='{$delete}' class='btn btn-danger'>Obrisi</a>
						    	</td>";
					    
						echo "</tr>";
					}
					echo "</table>";    
                    ?>
    <form action="dodajadresu.php">
        <input type="submit" value="Dodaj adressu" />
    </form>

                    </div>
                </div>       
    </body>
    </html>