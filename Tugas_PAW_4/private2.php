<?php
	session_start();
	if (!$_SESSION['isAdmin']){
		$_SESSION['priv2']='private2';
		header('Location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="myapp.css">
</head>
<body>
	<h1>Halaman Detil Data 2</h1>
	<fieldset>
		<a href="index.php">Halaman Utama | </a>
		<a href="private1.php">Halaman Detil Data 1 | </a>
		<a href="logout.php">Halaman Logout</a>

		<?php
		echo "<fieldset>";
		echo "<legend>"."Riwayat Pendidikan SD , SMP , SMA/SEDERAJAT"."</legend>";
		include 'riwayat_pdd.php';
		echo "</fieldset>";

			    $dbc = new PDO('mysql:host=localhost;dbname=myapp','root','');

			    $mhs = $dbc->prepare("SELECT kode, nama_matkul, semester, sks FROM matkul");
			    $mhs->execute();
			    	echo "<fieldset>";
					echo "<legend>"."Riwayat Pendidikan UNIVERSITAS"."</legend>";    
			        echo "<table>
					<tr>
						<td><b>Kode Mata Kuliah</b></td>
						<td><b>Nama Mata Kuliah</b></td>
						<td><b>Semester</b></td>
						<td><b>SKS</b></td>
					</tr>";
					        foreach($mhs as $row){
					            echo "<tr>";
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "<td>".$row[3]."</td>";
								
								echo "</tr>";
							}
					echo "</table>";
					echo "</fieldset>";
			?>	
	</fieldset>		
</body>
</html>