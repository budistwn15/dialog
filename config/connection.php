<?php
        try{
        $DBCONNECTION = new PDO("mysql:host=localhost;dbname=db_dialog","root","");
        }catch(PDOException $e){
            echo "Koneksi gagal ".$e->getMessage();
        }
    
?>