<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Tambah Data Pengajar</h1>
    <h2><?php anchor('pengajar/add_pengajar','Tambah Data'); ?></h2>
</center>
<form action="<?php echo base_url().'pengajar/action_add'; ?>" method="post">
    <table>
        <tr>
            <td>Nama Pengajar</td>
            <td><input type="text" name="nama_pengajar"></td>
        </tr>
        <tr>
            <td>Id Matapelajaran</td>
            <td><input type="text" name="idm_matapelajaran"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>
</body>
</html>