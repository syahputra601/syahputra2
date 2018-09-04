<html>
<head>
    <title>Aplikasi Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Data Sekolah ABC</h1>
    <h2>Data-data Pengajar</h2>
    <h3><?php echo anchor('pengajar/add_pengajar','Tambah Data'); ?></h3>
    </center>
<table border="1" align="center">
    <tr>
        <td>Nama Matapelajaran</td>
        <td>Id Pengajar</td>
        <td>Action</td>
    </tr>
<?php
foreach($pengajar as $pr){?>
    <tr>
        <td><?php echo $pr->nama_pengajar ?></td>
        <td><?php echo $pr->idm_matapelajaran ?></td>
        <td>
            <?php echo anchor('pengajar/edit/'.$pr->id_pengajar,'Edit'); ?>
            <?php echo anchor('pengajar/delete/'.$pr->id_pengajar,'Delete'); ?>
        </td>
    </tr>
<?php
}
?>
</table>


</body>
</html>