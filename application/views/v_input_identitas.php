<section>
<h1><?php echo @$judul ?></h1>

<form action="<?php echo base_url().'web/action_input' ?>" method="post">
	<tr>
		<td>Nama :</td>
		<td>
			<input type="text" name="nama"><br>
			<?php echo form_error('nama'); ?>
		</td>
	</tr>
	<tr>
		<td>Alamat :</td>
		<td>
			<input type="text" name="alamat"><br>
			<?php echo form_error('alamat'); ?>
		</td>
	</tr>
	<tr>
		<td>Pekerjaan :</td>
		<td>
			<input type="text" name="pekerjaan"><br>
			<?php echo form_error('pekerjaan'); ?>
		</td>
	</tr>
	<tr>
		<td></td>
		<td>
			<input type="submit" value="Save">
		</td>
	</tr>
</form>
</section>