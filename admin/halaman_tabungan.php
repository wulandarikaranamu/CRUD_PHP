<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Tabungan Siswa</title>
</head>
<body>
    <p align="left">Anda Login Sebagai "<?php echo 
    $_SESSION['username']; ?>" | Klik <a href="logout.php">disini</a> untuk logout.</p>
    
    <h3>Data Tabungan</h3>
    <p><a href="tabungan_tambah.php">[+Tambah Daftar Tabungan Siswa]</a> </p>
    <table width='900' border='1' cellpadding="5" cellspacing="0">
        <tr>
            <th width='30'>No.</th>
            <th width='100'>Id Tabungan</th>
            <th width='300'>Tanggal</th>
            <th width='200'>Jenis Kelamin</th>
            <th width='350'>Jumlah Tabungan</th>
            <th width='350'>Gambar Tabungan</th>
            <th width='350'>Pemilik Tabungan</th>
            <th width="100">Kelola</th>
        </tr>
    <?php
    include "../config.php";

    $sql="SELECT tabungan_id, tanggal_tabungan, gender_siswa, jumlah_tabungan, gambar_tabungan, nama_id FROM tabungan_siswa ORDER BY tabungan_id";
    $hasil = mysqli_query($config, $sql);
    $no=1;
    while ($data=mysqli_fetch_array($hasil)){
    ?>
        <tr>
            <td><?php echo $no;?></td>
            <td><?php echo $data['tabungan_id']?></td>
            <td><?php echo $data['tanggal_tabungan']?></td>
            <td><?php echo $data['gender_siswa']?></td>
            <td><?php echo $data['jumlah_tabungan']?></td>
            <td><img src="<?php echo $data['gambar_tabungan']?>" 
            width="100%"></td>
            <td><?php echo $data['nama_id']?></td>
            <td align="center"><a href="tabungan_ubah.php?tabungan_id=<?php echo 
            $data['tabungan_id'];?>">Edit</a>|<a href="tabungan_hapus.php?tabungan_id=<?php echo 
            $data['tabungan_id'];?>">Hapus</a>
            </td>
        </tr>
    <?php 
        $no++;
    }
    echo "</table>";
    ?>
</body>
</html>