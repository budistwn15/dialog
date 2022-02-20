<?php
    require_once '../../config/connection.php';
    session_start();
    $username = $_POST["username"]; 
   $password = md5($_POST["password"]);
   $query = $DBCONNECTION->prepare("SELECT * FROM `user` WHERE `username`='$username' AND `password`='$password'");
   $query->execute();
   if($query->rowCount() >= 1){
        while($data = $query->fetch(PDO::FETCH_LAZY)){
            $akses = $data["level"];
            $id_user = $data["id_user"];
            if($akses == "admin"){
                $_SESSION["login"] = true;
                $_SESSION["id_user"] = $id_user;
                $_SESSION["akses"] = "admin";
                header('location: ../../admin/index.php');
            }else{      
                $query2 = $DBCONNECTION->prepare("SELECT * FROM `pengunjung` WHERE `id_user` = '$id_user'");
                $query2->execute();
                while($data2 = $query2->fetch(PDO::FETCH_LAZY)){
                    $_SESSION["akses"] = "pengunjung ";
                    $_SESSION["nama"] = $data2["nama"];
                    $_SESSION["id_pengunjung"] =$data2["id_pengunjung"];
                }
                header('location: ../../index.php');
            }
        }
   }else{
        echo "<script>window.location='../../login.php?status=failed'</script>";
   }
   
?>