<?php 
    include "config.php";
    $user = $_GET['nama'];

    $sql = "DELETE FROM user WHERE nama ='$user'";
    $hasil = mysqli_query($config, $sql);

    echo "<script>alert('Data Berhasil Dihapus')</script>";
    header("location:halamanuser2.php");
    // header("location:halamanuser2.php") ini dimatikan untuk membuat alertnya muncul


?>