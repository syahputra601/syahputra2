<!DOCTYPE html>
<html>
<head>
<title><?php echo $title;?></title>
<style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
</head>
<body>
<label><h2><b>Data Siswa dengan Matapelajarannya</b></h2></label>
<table>
  <tr>
    <th>No.</th>
    <th>Nama Pengajar</th>  
    <th>Alamat</th>  
    <th>Nama Orang Tua</th>  
    <th>Jenis Kelamin</th>
    <th>Nama Matapelajaran</th>  
  </tr>
  <?php 
  $no=1; 
  foreach ($join2 as $row) { ?>
  <tr>
  <td><?php echo $no++;?></td>
  <td><?php echo $row->nama;?></td>
  <td><?php echo $row->alamat;?></td>
  <td><?php echo $row->nama_orangtua;?></td>
  <td><?php echo $row->jenis_kelamin;?></td>
  <td><?php echo $row->nama_matapelajaran;?></td>
  </tr>
    <?php } ?>
    
</table>

</body>
</html>