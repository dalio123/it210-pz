<?php
session_start();
require "db.php";
            if(isset($_GET['id'])!="") {
                $id = $_GET['id'];
                $artikl = $_GET['artikl'];
                $cena =  $_GET['cena'];

                $query = "INSERT INTO korpa (artikl, cena, user_id) Values ('{$artikl}', '{$cena}', '{$_SESSION['email']}')";
                $result = mysqli_query($conn, $query);
                if(!$result){
                    echo "Neuspesno";
                }
                else {
                    header("Location: ../store.php");
                }
            } 
        ?>