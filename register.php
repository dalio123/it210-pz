<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Registracija</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    <body style="overflow: hidden"> 
        <?php
            require('includes/db.php');

            // ako je forma submitovana, unesi vrednosti u bazu podataka
            if (isset($_REQUEST['submit'])){
                // brise backslashes i escapes specialne karaktere iz stringa
            	$name = mysqli_real_escape_string($conn, stripslashes($_REQUEST['name']));
                $surrname = mysqli_real_escape_string($conn, stripslashes($_REQUEST['surrname'])); 
            	$email = mysqli_real_escape_string($conn, stripslashes($_REQUEST['email']));
            	$password = mysqli_real_escape_string($conn, stripslashes($_REQUEST['password']));
               /* $adresa = mysqli_real_escape_string($conn, stripslashes($_REQUEST['adresa']));
                $grad = mysqli_real_escape_string($conn, stripslashes($_REQUEST['grad']));
                $pbroj = mysqli_real_escape_string($conn, stripslashes($_REQUEST['pbroj']));
                $telefon = mysqli_real_escape_string($conn, stripslashes($_REQUEST['telefon']));*/

                $query = "INSERT INTO users (name, surrname, email, password) 
                        VALUES ('$name', '$surrname', '$email', '".md5($password)."')";
                $result = mysqli_query($conn, $query);
                if($result){
                    echo "<div class='form'>
                    <h3>Uspesno ste se registrovali.</h3><br/>
                    Kliknite ovde da se ulogujete: <a href='login.php'>Login</a>
                    </div>";
                } else {
                    echo "Registracija nije uspela";
                }
            }
        ?>
            <div class="row justify-content-md-center">
                <div class="col-md-2">
                    <h1>Registrujte se</h1><br>
                    <form name="registration" method="post">
                        <input type="text" name="name" placeholder="Ime" required/><br><br>
                        <input type="text" name="surrname" placeholder="Prezime" required/><br><br>
                        <input type="email" name="email" placeholder="Email" required/><br><br>
                        <input type="password" name="password" placeholder="Sifra" required/><br><br>
                        <!-- <input type="text" name="adresa" placeholder="Ulica i broj" required><br><br>
                        <input type="text" name="grad" placeholder="Grad" required><br><br>
                        <input type="text" name="pbroj" placeholder="Postanski broj" required><br><br>
                        <input type="text" name="telefon" placeholder="Telefon" required><br><br> -->
                        <button type="submit" name="submit">Registrujte se</button>
                    </form>
                </div>
            </div>
    </body> 
</html>