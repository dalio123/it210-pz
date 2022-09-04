<?php 
$sql = "SELECT * FROM `artikli`;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
while($row = $result->fetch_assoc()) {  
    $delete = "includes/add2cart.php?id=" .$row["Id"]."&artikl=".$row["Artikl"]."&cena=".$row["Cena"];
    echo '
<div class="card">
  <img src="'.$row["Slika"].'" style="width:100%">
  <h1>'.$row["Artikl"].'</h1>
  <p class="price">'.$row["Cena"].'RSD</p>
  <p>'.$row["Opis"].'</p>';
echo "<button type=\"submit\"><a href='{$delete}' class='btn btn-danger'>Dodaj u korpu</a>  </button>
 
 </div>";
}   
?>