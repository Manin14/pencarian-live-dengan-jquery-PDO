<?php 
include "database.php";

$query = "SELECT * FROM orang ORDER BY id DESC";
$data = $db->prepare($query);
$data->execute();

 ?>

<form method="post" action="">
	Pencarian : <input type="text" name="cari" id="cari"> <br>
		
</form>


<hr>

<!DOCTYPE html>
<html>
<head>
	<title> Jquery </title>
</head>
<body>

 <div id="container">
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
 </div>  



<!-- jquery nya-->
<script src="js/jquery-3.4.1.min.js"></script>
<!-- ajax nya-->
<script src="js/script.js"></script>
</body>
</html>
