<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Tambah Data siswa</h1>
</center>
<center>
<hr>
<form action="<?php echo base_url().'siswa/action_add'; ?>" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat"></td>
        </tr>
        <tr>
            <td>Nama Orang Tua</td>
            <td><input type="text" name="nama_orangtua"></td>
        </tr>
        <tr>
            <td>Nomor Telepon Orang Tua</td>
            <td><input type="text" name="nomor_telepon_orangtua"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tanggal_lahir"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>
</center>
<hr>
<center>
<?php echo anchor('siswa/index','Kembali'); ?>
</center>
</body>
</html>