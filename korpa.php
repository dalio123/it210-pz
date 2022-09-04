<!DOCTYPE html>
<?php   
    session_start();
    require "includes/db.php"; ?>
<html lang="en">
<head>
    <link rel="icon" href="./img/favicon.ico">
    <link rel="stylesheet" type="text/css" href="./css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "includes/menu.php"; ?>
    <?php include "includes/footer.php"; ?>
    <div class="glavna">
        <br>
    <div class="centar">
        <?php 
            $sql = "SELECT * FROM korpa WHERE user_id = '".$_SESSION['email']."';";
            $result = mysqli_query($conn, $sql);
            // print information into a table
            echo "<table border='0'>
            <tr>
            <th>Ime</th>
            <th>Cena</th>
            <th></th>
            </tr>";
            while($row = mysqli_fetch_array($result))
            {
            echo "<tr>";
            foreach ($row as $field => $value) {
                if($field == "id" || $field == "user_id" || $field == "kolicina") {
                    continue;
                }
                if($field == "artikl"){
                    echo "<td>" . $value . "</td>";
                }
                if($field == "cena"){
                    echo "<td>" . $value . "</td>";
                }
            }
            echo "<td><a href='includes/remove.php?id=" . $row['id'] . "'>Remove</a></td>";
            echo "</tr>";
            }
            echo "</table>";
        ?>
        </div>
        </div>
</body>
</html>