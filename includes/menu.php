<div class="navbar">
  <a href="index.php">Home</a>
  <a href="store.php">Store</a>
  <a href="kontakt.php">Kontakt</a>
  <div class="topnav-right">
  <?php
  // check if user is admin
  if(isset($_SESSION['is_admin'])){
    if($_SESSION['is_admin'] == 1){
      echo "<a href='admin.php'>Admin</a>";
    }
  }
  ?>
    <a href='pretraga.php'>Pretraga</a>
    <!-------------------->
    <?php 
    // check if user is logged in using the session variable
    if(isset($_SESSION['name'])){
      echo "
      <div class='dropdown'>
      <button class='dropbtn'>Pozdrav " .$_SESSION['name'] ; }
    else echo "<a href='login.php'>Log in</a>"; 
    ?>
    </button>
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="korpa.php">Moja korpa</a>
      <a href="adresar.php">Moje adrese</a>
      <a href="logout.php">Logout</a>
    </div>
  </div> 
  </div>
</div>
