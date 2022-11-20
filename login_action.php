<?php 
session_start();
include("config.php");

$username = $_POST['txtUsername'];
$password = $_POST['txtPassword'];

$sql = "SELECT nama FROM user
        WHERE nama= '$username'
        AND password='$password'";

$hasil = mysqli_query($config,$sql) or exit("Error query : <b>".$sql."</b>.");

    if(mysqli_num_rows($hasil)>0){
        $data = mysqli_fetch_array($hasil);
        $_SESSION['username'] = $data['nama'];
        header("location:halaman_crud.php");
        exit();
    } else { ?>
        <h2>Maaf..</h2>
        <p>Username dan Password salah. Klik <a href="login.php"> disini </a> untuk kembali login. </p> <?php
    }


?>