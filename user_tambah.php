<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah Data</title>
</head>
<body>
    <h3>Menambah Data User</h3>
    <form action="user_tambah_action.php" method="post" >
        <table>
            <tr>
                <td>Username</td>
                <td>:</td>
                <td><input type="text" name="username" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><input type="password" name="password" id=""></td>
            </tr>
            <tr>
                <td>Email</td>
                <td>:</td>
                <td><input type="email" name="email" id=""></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><input type="text" name="alamat" id=""></td>
            </tr>
            <tr>
                <td colspan=2>
                    <input type="submit" name="simpan" value="Simpan">
                    <input type="reset" name="batal" value="Reset">
                </td>
            </tr>
        </table>
    </form>
</body>
</html>