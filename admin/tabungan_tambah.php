<?php 
session_start(); //memulai session
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Input Tabungan Siswa</title>
</head>
<body>
    <h2>Daftar Tabungan Siswa</h2>
    <form method="POST" action="tabungan_tambah_action.php" enctype="multipart/form-data">
<table>
    <tr>
        <td width="150">Id Tabungan</td>
        <td>:</td>
        <td><input type="number" name="id" size="60"></td>
    </tr>
    <tr>
        <td>Tanggal</td>
        <td>:</td>
        <td><input type="date" name="tanggal"></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td> <br>
        <td>
        <input type="radio" name="gender" value="laki-laki">Laki-laki<br>
        <input type="radio" name="gender" value="perempuan">Perempuan<br>
        </td>
    </tr>
    <tr>
        <td width="150">Jumlah Tabungan</td>
        <td>:</td>
        <td><input type="number" name="total" size="60"></td>
    </tr>
    <tr>
        <td>Gambar Tabungan</td>
        <td>:</td>
        <td><input type="file" name="gambar"> </td>
    </tr>
    <tr>
        <td>Pemilik Tabungan</td>
        <td>:</td>
        <td>
        <input type="text" name="nama_id" size="60" 
        value="<?php echo $_SESSION["username"];?>" readonly>
        </td>
    </tr>
    <tr>
        <td colspan="3">
        <input type="submit" name="simpan" value="simpan">
        <input type="reset" value="reset">
        </td>
    </tr>
</table>
</form>

</body>
</html>