<?php
session_start();
require "includes/db.php";
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dodaj adresu</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body>
    <?php include 'includes/menu.php'; ?>
    <?php include 'includes/footer.php'; ?>
    <div class="glavna">
    <div class="od">
    <form action="dodajadresu.php" method="post">
        <label for="ime">Ime:</label>
        <input type="text" name="ime" id="ime" required>
        <label for="prezime">Prezime:</label>
        <input type="text" name="prezime" id="prezime" required>
        <label for="ulica">Ulica i broj:</label>
        <input type="text" name="ulica" id="ulica" required>
        <label for="pbroj">Postanski broj:</label>
        <input type="text" name="pbroj" id="pbroj" required>
        <label for="grad">Grad:</label>
        <input type="text" name="grad" id="grad" required>
        <input type="submit" value="Dodaj adresu" />
    </form>
    <?php
    if (isset($_POST['ime']) && isset($_POST['prezime']) && isset($_POST['ulica']) && isset($_POST['pbroj']) && isset($_POST['grad'])) {
        $ime = $_POST['ime'];
        $prezime = $_POST['prezime'];
        $ulica = $_POST['ulica'];
        $pbroj = $_POST['pbroj'];
        $grad = $_POST['grad'];
        $email = $_SESSION['email'];
        $sql = "INSERT INTO adrese (ime, prezime, ulica, pbroj, grad, email) VALUES ('$ime', '$prezime', '$ulica', '$pbroj', '$grad', '$email')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "Adresa uspješno dodana!";
        } else {
            echo "Greška!";
        }
    }
    ?>
    </div>
    </div>
    </body>
    </html>