<section>
<h1><?php echo @$judul ?></h1>
<h3><?php echo anchor('web/input_data','Tambah Data') ?></h3>
<table border="1">
	<tr>
		<td>No</td>
		<td>Nama</td>
		<td>Alamat</td>
		<td>Pekerjaan</td>
		<td>Action</td>
	</tr>

<?php 
$no = $this->uri->segment('3') + 1;
foreach($user as $us){ ?>
	<tr>
		<td><?php echo $no ?></td>
		<td><?php echo $us->nama ?></td>
		<td><?php echo $us->alamat ?></td>
		<td><?php echo $us->pekerjaan ?></td>
		<td>
			<?php echo anchor('web/edit/'.$us->Id_identitas,'Edit') ?>
			<?php echo anchor('web/delete/'.$us->Id_identitas,'Delete') ?>
		</td>
	</tr>
<?php 
$no++;
} ?>
</table>
<br>
<?php
echo $this->pagination->create_links();
?>
</section>