<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Edit Data Pengajar</h1>
    <h2><?php echo anchor('pengajar/add_pengajar','Tambah Data'); ?></h2>
</center>
<?php
foreach($pengajar as $pr){
?>
<form action="<?php echo base_url().'pengajar/update' ?>" method="post">
    <table>
        <tr>
            <td>Nama Pengajar</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $pr->id_pengajar ?>">
                <input type="text" name="nama_pengajar" value="<?php echo $pr->nama_pengajar ?>">
            </td>
        </tr>
        <tr>
            <td>Id Matapelajaran</td>
            <td><input type="text" name="idm_matapelajaran" value="<?php echo $pr->idm_matapelajaran ?>"></td>
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