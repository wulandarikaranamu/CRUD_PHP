<?php 
$config = mysqli_connect("localhost", "root", "", "datasiswa_0080");
if (!$config) {
    die('Gagal terhubung ke MySQLI :'.mysqli_connect_error());
}

?>