<?php 
include "config.php";

$user = $_POST['nama'];
$pass = $_POST['password'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "UPDATE user 
        SET password='$pass',
            email='$email',
            alamat='$alamat'
        WHERE nama ='$user'";

$sql = mysqli_query($config, $sql);

if($sql){
    echo "Data Berhasil Diubah";
}else{
    echo "Data Gagal Diubah";
}
?>

<br>kembali ke <a href="halaman_crud.php">Halaman User</a>