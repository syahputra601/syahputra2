<section>
<h1><?php echo @$judul ?></h1>


<?php 
foreach($user as $us){
?>
<form action="<?php echo base_url().'web/action_update' ?>" method="post">
<table border="1">
	<tr>
		<td>Nama :</td>
		<td>
			<input type="hidden" name="id" value="<?php echo $us->Id_identitas ?>">
			<input type="text" name="nama" value="<?php echo $us->nama ?>"><br>
			<?php echo form_error('nama'); ?>
		</td>
	</tr>
	<tr>
		<td>Alamat :</td>
		<td>
			<input type="text" name="alamat" value="<?php echo $us->alamat ?>"><br>
			<?php echo form_error('alamat'); ?>
		</td>
	</tr>
	<tr>
		<td>Pekerjaan :</td>
		<td>
			<input type="text" name="pekerjaan" value="<?php echo $us->pekerjaan ?>"><br>
			<?php echo form_error('pekerjaan'); ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" value="Update">
		</td>
	</tr>
</table>
</form>
<?php
}
?>
</section>