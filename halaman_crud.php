<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
</head>
<body>
    <h3>Data User</h3>
    <p>[<a href="user_tambah.php">Tambah User</a>]</p>
    <table width="720" border="1" cellpadding="5" cellspasing="0">
        <tr>
            <th width="30">No.</th>
            <th width="30">Username</th>
            <th width="30">Password</th>
            <th width="30">Email</th>
            <th width="30">Alamat</th>
            <th width='150'>Kelola</th>
        </tr>
    <?php 
    include "config.php";

    $sql = "SELECT nama, password, email, alamat FROM user ORDER BY nama";

    $hasil = mysqli_query($config, $sql);
    $no = 1;
    while ($data = mysqli_fetch_array($hasil)) {
?>
<tr>
    <td><?php echo $no; ?></td>
    <td><?php echo $data['nama']; ?></td>
    <td><?php echo $data['password']; ?></td>
    <td><?php echo $data['email']; ?></td>
    <td><?php echo $data['alamat']; ?></td>
    <td align="center">
        <a href="user_edit.php?nama=<?php echo
        $data['nama'];?>">Edit</a> |
        <a href="user_hapus.php?nama=<?php echo
        $data['nama'];?>">Hapus</a>
    </td>
</tr>
    
<?php
    $no++;
    }
        echo "</table>";
    ?>
    </table>
</body>
</html>