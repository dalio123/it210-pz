<?php
require "db.php";
            if(isset($_GET['id'])!="") {
                $id = $_GET['id'];

                $query = "DELETE FROM adrese WHERE id='{$id}'";
                $result = mysqli_query($conn, $query);
                if(!$result){
                    echo "Neuspesno";
                }
                else {
                    header("Location: ../adresar.php");
                }
            } 
        ?>