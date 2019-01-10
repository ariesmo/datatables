<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<title>DataTables Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="../vendor/datatables/datatables/media/css/jquery.dataTables.css">
	
	
	<script type="text/javascript" language="javascript" src="../vendor/datatables/datatables/media/js/jquery.js"></script>
	<script type="text/javascript" language="javascript" src="../vendor/datatables/datatables/media/js/jquery.dataTables.js"></script>
	
	<script type="text/javascript" language="javascript" class="init">
		$(document).ready(function() {
			$('#example').DataTable();
		} );
	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables <span>Mahasiswa </span></h1>
			<div class="demo-html"></div>
			<table id="example" class="display" style="width:100%">
				<thead>
					<tr>
						<th>NIM</th>
						<th>Nama</th>
						<th>Jurusan</th>
						
					</tr>
				</thead>
				<tbody>
					<?php
					include '../koneksi.php';
					$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
					while($record = mysqli_fetch_array($mahasiswa)){
						echo "
						<tr>
							<td>".$record['nim']."</td>
							<td>".$record['nama']."</td>
							<td>".$record['jurusan']."</td>
						</tr>";
					}
					?>
				</tbody>
			</table>
		</section>
	</div>
</body>
</html>