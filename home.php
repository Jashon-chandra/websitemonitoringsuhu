<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Monitoring Suhu dan Kelembaban</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>


 <h1 class="h1" align="center">MONITORING SUHU DAN KELEMBABAN RUANGAN</h1>
<p class="keterangan" align="center">ini adalah website kami yang di gunakn untuk monitoring suhu dan kelembaban ruangan</p>

<?php 
	include "koneksi.php";

	$query = mysqli_query($koneksi, "SELECT * FROM
		tbmonitor ORDER BY id DESC LIMIT 1");
	while ($data = mysqli_fetch_array($query)) {
		
 ?>

	<div class="container">
		<div class=kotak>
			<h2 class="h2">SUHU</h2>
			<div class="nilai">
			<?php echo $data['suhu'] ?><font size="7">°C</font>
			</div>
		</div>
		<div class=kotak>
			<h2 class="h2">KELEMBABAN</h2>
				<div class="nilai">
			<?php echo $data['kelembaban'] ?><font size="7">%</font>
			</div>
		</div>
		
	</div>
<?php } ?>
</body>
</html>