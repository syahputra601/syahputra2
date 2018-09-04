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
<label><h2><b>Join 2 Table CodeIgniter</b></h2></label>
<table>
  <tr>
    <th>No.</th>
    <th>Nama Matapelajaran</th>
    <th>Nama Pengajar</th>  
  </tr>
  <?php 
  $no=1; 
  foreach ($join2 as $row) { ?>
  <tr>
  <td><?php echo $no++;?></td>
  <td><?php echo $row->nama_matapelajaran;?></td>
  <td><?php echo $row->nama_pengajar;?></td>
  </tr>
    <?php } ?>
    
</table>

</body>
</html>