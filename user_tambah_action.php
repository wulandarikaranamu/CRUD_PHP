<?php 

include "config.php";

$user = $_POST['username'];
$pass = $_POST['password'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];

$sql = "INSERT INTO user (nama, password, email, alamat)
        VALUES('$user','$pass','$email','$alamat');";

$hasil = mysqli_query($config, $sql);

if($hasil) {
    echo "Data berhasil ditambahkan";
} else {
    echo "Data gagal disimpan";
}
?>

<br> kembali ke <a href="halaman_crud.php">Halaman User</a>