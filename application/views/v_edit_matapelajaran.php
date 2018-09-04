<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Edit Data siswa</h1>
    <h2><?php echo anchor('matapelajaran/add_matpel','Tambah Data'); ?></h2>
</center>
<?php
foreach($matpel as $mp){
?>
<form action="<?php echo base_url().'matapelajaran/update' ?>" method="post">
    <table>
        <tr>
            <td>Nama Matapelajaran</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $mp->idm_matapelajaran ?>">
                <input type="text" name="nama_matapelajaran" value="<?php echo $mp->nama_matapelajaran ?>">
            </td>
        </tr>
        <tr>
            <td>Id Pengajar</td>
            <td><input type="text" name="id_pengajar" value="<?php echo $mp->id_pengajar ?>"></td>
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