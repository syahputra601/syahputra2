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
    <h2>Data-data Matapelajaran</h2>
    <h3><?php echo anchor('matapelajaran/add_matpel','Tambah Data'); ?></h3>
    </center>
<table border="1" align="center">
    <tr>
        <td>Nama Matapelajaran</td>
        <td>Id Pengajar</td>
        <td>Action</td>
    </tr>
<?php
foreach($matpel as $mp){?>
    <tr>
        <td><?php echo $mp->nama_matapelajaran ?></td>
        <td><?php echo $mp->id_pengajar ?></td>
        <td>
            <?php echo anchor('matapelajaran/edit/'.$mp->idm_matapelajaran,'Edit'); ?>
            <?php echo anchor('matapelajaran/delete/'.$mp->idm_matapelajaran,'Delete'); ?>
        </td>
    </tr>
<?php
}
?>
</table>


            </div>


            
        </div>