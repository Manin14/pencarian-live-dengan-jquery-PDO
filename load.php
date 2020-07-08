<?php 
require "database.php";

$cari=$_GET['cari'];

$query = "SELECT * FROM orang 
                 WHERE
               nama LIKE '$cari%' 
               ";

   $data = $db->prepare($query);
   $data->execute();

 ?>


<table border="1">
	<thead>
		<tr>
			<td>No</td>
			<td>Nama</td>
			<td>Alamat</td>
		</tr>
	</thead>

	<tbody>
		<?php 
		$no=1;
		while($person = $data->fetch(PDO::FETCH_OBJ)) {
		 ?>

			<tr>
				<td><?php echo $no ?></td>
				<td><?php echo $person->nama ?></td>
				<td><?php echo $person->alamat ?></td>
			</tr>
		<?php $no++; } ?>
	</tbody>
</table>