<html>
<head>
    <title>Aplikasi Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Data Sekolah ABC</h1>
    <h2>Data-data Nilai Siswa</h2>
    <h3><?php echo anchor('siswa/add_nilai_siswa','Tambah Data'); ?></h3>
    <h4></h4>
</center>
<hr>
<table border="1" align="center">
    <tr>
        <td>Id Siswa</td>
        <td>Id Matapelajaran</td>
        <td>Nilai</td>
        <td>Action</td>
    </tr>
<?php
foreach($nilaisiswa as $ns){?>
    <tr>
        <td><?php echo $ns->idsiswa ?></td>
        <td><?php echo $ns->idm_matapelajaran ?></td>
        <td><?php echo $ns->nilai ?></td>
        <td>
            <?php echo anchor('siswa/edit_renilai/'.$ns->idrelational_siswa_mp,'Edit'); ?>
            <?php echo anchor('siswa/delete_renilai/'.$ns->idrelational_siswa_mp,'Delete'); ?>
        </td>
    </tr>
<?php
}
?>
</table>
<hr>
<center>
<?php echo anchor('siswa/index','Home'); ?>
</center>
</body>
</html>