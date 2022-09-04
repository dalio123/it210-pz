<!DOCTYPE html>
<?php 
session_start();
require "includes/db.php";
?>
<html lang="en">
<head>
<script src="js/kontakt.js?v=<?php echo time(); ?>"></script>
  <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>"> <!-- za refresh css-a -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kontakt</title>
</head>
<body>
  
<?php include "includes/menu.php"; ?>
<?php  include "includes/footer.php"; ?>
<?php 
// ako je forma submitovana, unesi vrednosti u bazu podataka
 if (isset($_REQUEST['submit'])){
  // brise backslashes i escapes specialne karaktere iz stringa
$ime = mysqli_real_escape_string($conn, stripslashes($_REQUEST['ime']));
$prezime = mysqli_real_escape_string($conn, stripslashes($_REQUEST['prezime'])); 
$naslov = mysqli_real_escape_string($conn, stripslashes($_REQUEST['naslov']));
$poruka = mysqli_real_escape_string($conn, stripslashes($_REQUEST['poruka']));
$tel = mysqli_real_escape_string($conn, stripslashes($_REQUEST['tel']));
$query = "INSERT into kontakt (ime, prezime, naslov, poruka, tel) VALUES ('$ime', '$prezime', '$naslov', '$poruka', '$tel')";
$result = mysqli_query($conn, $query);}
  ?>
     
  <div class="glavna">
    <div class="forma">
      <form method="post" id="myForm">
      <div>
      <input type="text" name="ime" id="ime" class="ime" placeholder="Ime" onkeyup="samoslovaime()" required>
      </div>
      <div>
        <input type="text" name="prezime" id="prezime" class="prezime" placeholder="Prezime"  onkeyup="samoslovaprezime()" required>
      </div>
      <div>
      <input type="text" name="naslov" id="naslov" placeholder="Naslov" required>
      </div>
      <div>
      <textarea name="poruka" id="poruka" cols="30" rows="7" placeholder="Poruka"  minlength=5 maxlength=360 required></textarea>
      </div>
      <div>
      <input type="tel" name="tel" id="tel" placeholder="Broj Telefona" onkeyup="samobrojevi()" required>
      </div>
      <div>
      <button type="submit" name="submit">Posalji poruku</button>
      </div>
      <?php
      if (isset($_REQUEST['submit'])){
        if($result){
          echo "
          <h3>Uspesno ste se registrovali.</h3><br/>";
      } else {
          echo "Registracija nije uspela";
      }} ?>
      </form>
      <div class="kolona">
        <p>
        <b> Podaci o firmi</b><br>
        Poslovno ime: Violet Design DOO <br>
        Pravna forma: DOO - Društvo sa ograničenom odgovornošću <br>
        Obveznik PDV: da <br>
        Poreski identifikacioni broj: 15561328 <br>
        Matični broj pravnog lica: 135583413 <br>
        Registarski broj: 384153485 <br>
        Broj obveznika PDV-a: 1635412843 <br> <br>

          <b> Podaci o sedištu </b><br>
          Grad: Pančevo <br>
          Opština: Pančevo <br>
          Ulica i broj: Dositeja Obradovića 8 <br>
          Država: Srbija <br>
          E-mail adresa: david.kandas@hotmail.com <br>
          Broj telefona: 061-23-33-573 <br>
          Web sajt: 127.0.0.1 // trenutno
      </p>
      </div>
      <div class="kolona">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1413.9553064291815!2d20.639148140262954!3d44.864114484688386!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a7ec3f8cb97e5%3A0xb9bdfa79c6e8cf81!2sTami%C5%A1%20kapija!5e0!3m2!1sen!2srs!4v1662104745186!5m2!1sen!2srs" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>  
    </div>   

</body>
</html>