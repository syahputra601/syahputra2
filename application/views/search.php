<html>
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php echo form_open('siswa/search') ?>
		<input type="text" name="keyword" placeholder="search">
		<input type="submit" name="search_submit" value="Cari">
	<?php echo form_close() ?>

	<table>
                <tr>
                    <td>Nama</td>
                    <td>Alamat</td>
                    <td>Nama Orang Tua</td>
                    <td>Nomor Telepon Orang Tua</td>
                    <td>Jenis Kelamin</td>
                    <td>Tempat Lahir</td>
                    <td>Tangal Lahir</td>
                </tr>
			<?php foreach($siswa as $sw) { ?>
				<tr>
                    <td><?php echo $sw->nama ?></td>
                    <td><?php echo $sw->alamat ?></td>
                    <td><?php echo $sw->nama_orangtua ?></td>
                    <td><?php echo $sw->nomor_telepon_orangtua ?></td>
                    <td><?php echo $sw->jenis_kelamin ?></td>
                    <td><?php echo $sw->tempat_lahir ?></td>
                    <td><?php echo $sw->tanggal_lahir ?></td>
				</tr>
			<?php } ?>


	</table>
</body>
</html>