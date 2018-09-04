<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Tambah Data siswa</h1>
    <h2><?php anchor('matapelajaran/add_matpel','Tambah Data'); ?></h2>
</center>
<form action="<?php echo base_url().'matapelajaran/action_add'; ?>" method="post">
    <table>
        <tr>
            <td>Nama Matapelajaran</td>
            <td><input type="text" name="nama_matapelajaran"></td>
        </tr>
        <tr>
            <td>Id Pengajar</td>
            <td><input type="text" name="id_pengajar"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>
</body>
</html>