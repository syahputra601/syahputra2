<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header"><center><?php echo @$judul ?></h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <?php echo form_open("cbarang/saveAdd/") ?>
    <div class="row">
        <div class="col-lg-12">

            <center>
            <div id="body">
                
                
                <div>
                    <img src="<?php echo base_url('images/sid-logo.png');?>"/>
                </div>
            </center>

<center>
    <h1>Data Sekolah ABC</h1>
    <h2>Data-data Siswa</h2>
    <h3><?php echo anchor('siswa/add_student','Tambah Data'); ?></h3>
<form action="<?php echo base_url().'siswa/carinama'; ?>" method="post">
    <table>
        <tr>
            <td>Nama :</td>
            <td><input type="text" name="nama"></td>
            <td><input type="submit" value="Cari"></td>
        </tr>
    </table>
</form>
    </center>
<br>
<table border="1" align="center">
    <tr>
        <td>Nama</td>
        <td>Alamat</td>
        <td>Nama Orang Tua</td>
        <td>Nomor Telepon Orang Tua</td>
        <td>Jenis Kelamin</td>
        <td>Tempat Lahir</td>
        <td>Tanggal Lahir</td>
        <td>Action</td>
    </tr>
<?php
foreach($siswa as $as){?>
    <tr>
        <td><?php echo $as->nama ?></td>
        <td><?php echo $as->alamat ?></td>
        <td><?php echo $as->nama_orangtua ?></td>
        <td><?php echo $as->nomor_telepon_orangtua ?></td>
        <td><?php echo $as->jenis_kelamin ?></td>
        <td><?php echo $as->tempat_lahir ?></td>
        <td><?php echo $as->tanggal_lahir ?></td>
        <td>
            <?php echo anchor('siswa/edit/'.$as->idsiswa,'Edit'); ?>
            <?php echo anchor('siswa/delete/'.$as->idsiswa,'Delete'); ?>
        </td>
    </tr>
<?php
}
?>
</table>
<hr><br>
<center>
<?php echo anchor('siswa/add_siswamatpel','Tambah Data Matapelajaran Siswa'); ?><br>
<?php echo anchor('siswa/add_siswamatapelajaran','Tambah Data siswa'); ?><br>
<?php echo anchor('siswa/add_nilaisiswa','Tambah Data Nilai siswa'); ?><br>
</center>
<hr>


            </div>


            
        </div>