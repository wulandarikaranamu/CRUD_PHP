<?php 
session_start();
if(isset($_SESSION['username'])) {?>
    <h2 align=center>Control Panel</h2>
    <p align=center>Selamat Datang
        "<?php echo $_SESSION['username'];?>"klik.<a href="logout.php">
        disini</a> untuk logout.</p>

        <?php
            echo "<p align=center>Berikut ini adalah menu navigasi anda </p>";
            echo "<p align=center><a href='tabungan/halamantabungan.php'>Halaman Tabungan Siswa</a> | <a href='user/halaman_crud.php'>Halaman User</a></p>";
        ?>
        
    <?php } else { ?>
        <h2>Maaf..</h2>
        <p>anda tidak berhak mengakses halaman ini.silahkan<a href="login.php">disini</a>untuk kembali login</p>

    <?php } ?>