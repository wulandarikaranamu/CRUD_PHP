<?php 
include "../config.php";

$id_tabungan = $_POST["id"];
$tanggal_tabungan = $_POST["tanggal"];
$gender_siswa = $_POST["gender"];
$jumlah_tabungan = $_POST["total"];
$usernama = $_POST["nama_id"];

 //nama file temporary yang akan disimpan di server
$lokasifile = $_FILES['gambar']['tmp_name']; 

 //membaca nama file yang akan diupload
$namafile = $_FILES['gambar']['name']; 
 
 //folder penyimpanan berkas/file
$uploaddir = "uploads/"; 

 //menggabungkan nama folder dan nama file
$uploadfile = $uploaddir.$namafile; 
 
//Jika file berhasil di upload
if(move_uploaded_file($lokasifile, $uploadfile)){
echo "Nama File : <b>$namafile</b> sukses di upload";

//masukkan informasi file ke dalam database
$sql = "INSERT INTO tabungan_siswa(tabungan_id, tanggal_tabuangan, 
 gender_siswa, jumlah_tabungan, gambar_tabungan, nama_id) 
VALUES('$id_tabungan','$tanggal_tabungan', '$gender_siswa', '$jumlah_tabungan', '$uploadfile','$usernama')";
$hasil = mysqli_query($config, $sql);
header('location:halamantabungan.php');
} else {
echo "File gagal disimpan";
}
?>