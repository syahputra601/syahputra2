<html>
<head>
    <title>Sekolah ABC</title>
</head>
<body>
<center>
    <h1>Tambah Data Nilai SIswa</h1>
    <h2><?php anchor('siswa/add_nilaisiswa','Tambah Data'); ?></h2>
</center>
<center>
<form action="<?php echo base_url().'siswa/action_addnilai'; ?>" method="post">
    <table>
        <tr>
            <td>Id Siswa</td>
            <td><input type="text" name="idsiswa"></td>
        </tr>
        <tr>
            <td>Id Matapelajaran</td>
            <td><input type="text" name="idm_matapelajaran"></td>
        </tr>
        <tr>
            <td>Id Nilai</td>
            <td><input type="text" name="id_nilai"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Save"></td>
        </tr>
    </table>
</form>
</center>
</body>
</html>