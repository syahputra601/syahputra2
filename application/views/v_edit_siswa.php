<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Edit Data siswa</h1>
    <h2><?php echo anchor('siswa/add','Tambah Data'); ?></h2>
</center>
<?php
foreach($siswa as $as){
?>
<form action="<?php echo base_url().'siswa/update_data' ?>" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $as->idsiswa ?>">
                <input type="text" name="nama" value="<?php echo $as->nama ?>">
            </td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><input type="text" name="alamat" value="<?php echo $as->alamat ?>"></td>
        </tr>
        <tr>
            <td>Nama Orang Tua</td>
            <td><input type="text" name="nama_orangtua" value="<?php echo $as->nama_orangtua ?>"></td>
        </tr>
        <tr>
            <td>Nomor Telepon Orang Tua</td>
            <td><input type="text" name="nomor_telepon_orangtua" value="<?php echo $as->nomor_telepon_orangtua ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td><input type="text" name="jenis_kelamin" value="<?php echo $as->jenis_kelamin ?>"></td>
        </tr>
        <tr>
            <td>Tempat Lahir</td>
            <td><input type="text" name="tempat_lahir" value="<?php echo $as->tempat_lahir ?>"></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td><input type="text" name="tanggal_lahir" value="<?php echo $as->tanggal_lahir ?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
<?php
}
?>
</body>
</html>