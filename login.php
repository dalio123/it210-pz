<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Logovanje</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/login.css?v=<?php echo time(); ?>">
	</head>
	<body style="overflow: hidden">
		<?php
			require('includes/db.php');
			session_start();
			// ako je forma submitovana, unesi vrednosti u bazu podataka
			if (isset($_POST['submit'])){
			    // brise backslashes i escapes specialne karaktere iz stringa
				$email = mysqli_real_escape_string($conn, stripslashes($_REQUEST['email']));
				$password = mysqli_real_escape_string($conn, stripslashes($_REQUEST['password']));
				// proverava da li je korisnik postojeci u bazi ili ne
				$query = "SELECT * FROM users WHERE email='$email' and password='".md5($password)."'";
				$result = mysqli_query($conn, $query);
				$rows = mysqli_num_rows($result);
		        if($rows == 1){
		        	$rowsingle = mysqli_fetch_array($result, MYSQLI_ASSOC);
		        	// postavlja vrednosti u session objektu
			    	$_SESSION['email'] = $email;
					$_SESSION['name'] = $rowsingle['name'];
			    	$_SESSION['user_id'] = $rowsingle['id'];
			    	$_SESSION['is_admin'] = (int) $rowsingle['is_admin'];
		        	// preusmerava korisnika na index.php
			    	header("Location: index.php");
		        } else {
					echo "<div class='form'>
					<h3>Neuspesno logovanje</h3>
					<br/>Kliknite ovde za <a href='login.php'>Login</a></div>";
				}
			} else {
		?>
		<!--
		<div class="card">
					<h4 class="title">Ulogujte se</h4><br>
					<form method="post" name="login">
					<div class="field">
						<input type="text" name="email" placeholder="Email" required/><br><br>
						</div>
						<div class="field">
						<input type="password" name="password" placeholder="Sifra" required/><br><br>
						</div>
						<button class="btn" type="submit" name="submit">Ulogujte se</button>
					</form><br>
					<p>Jos uvek niste registrovani? <a href='register.php'>Registrujte se ovde</a></p>
				</div>-->
				<div class="card">
  <h4 class="title">Log In!</h4>
  <form method="post" name="login">
    <div class="field">
      <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
      <path d="M207.8 20.73c-93.45 18.32-168.7 93.66-187 187.1c-27.64 140.9 68.65 266.2 199.1 285.1c19.01 2.888 36.17-12.26 36.17-31.49l.0001-.6631c0-15.74-11.44-28.88-26.84-31.24c-84.35-12.98-149.2-86.13-149.2-174.2c0-102.9 88.61-185.5 193.4-175.4c91.54 8.869 158.6 91.25 158.6 183.2l0 16.16c0 22.09-17.94 40.05-40 40.05s-40.01-17.96-40.01-40.05v-120.1c0-8.847-7.161-16.02-16.01-16.02l-31.98 .0036c-7.299 0-13.2 4.992-15.12 11.68c-24.85-12.15-54.24-16.38-86.06-5.106c-38.75 13.73-68.12 48.91-73.72 89.64c-9.483 69.01 43.81 128 110.9 128c26.44 0 50.43-9.544 69.59-24.88c24 31.3 65.23 48.69 109.4 37.49C465.2 369.3 496 324.1 495.1 277.2V256.3C495.1 107.1 361.2-9.332 207.8 20.73zM239.1 304.3c-26.47 0-48-21.56-48-48.05s21.53-48.05 48-48.05s48 21.56 48 48.05S266.5 304.3 239.1 304.3z"></path></svg>
      <input autocomplete="off" id="logemail" placeholder="Email" class="input-field" name="email" type="email">
    </div>
    <div class="field">
      <svg class="input-icon" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
      <path d="M80 192V144C80 64.47 144.5 0 224 0C303.5 0 368 64.47 368 144V192H384C419.3 192 448 220.7 448 256V448C448 483.3 419.3 512 384 512H64C28.65 512 0 483.3 0 448V256C0 220.7 28.65 192 64 192H80zM144 192H304V144C304 99.82 268.2 64 224 64C179.8 64 144 99.82 144 144V192z"></path></svg>
      <input autocomplete="off" id="logpass" placeholder="Password" class="input-field" name="password" type="password">
    </div>
    <button class="btn" type="submit" name="submit">Ulogujte se</button>
    <p>Jos uvek niste registrovani? <a href='register.php'>Registrujte se ovde</a></p>
  </form>
</div>
		<?php } ?>
	</body>
</html>