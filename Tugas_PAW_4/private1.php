<?php
	session_start();
	if (!$_SESSION['isAdmin']){
		$_SESSION['priv1']='private1';
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
	<h1>Halaman Detil Data 1</h1>
	<fieldset>
		<a href="index.php">Halaman Utama | </a>
		<a href="private2.php">Halaman Detil Data 2 | </a>
		<a href="logout.php">Halaman Logout</a>	
	
		<?php
		echo "<fieldset>";
		echo "<legend>"."Data Diri"."</legend>";
		include 'data_diri.php';
		echo "</fieldset>";

			    $dbc = new PDO('mysql:host=localhost;dbname=myapp','root','');

			    $mhs = $dbc->prepare("SELECT nama_panggilan, jenis_kelamin, alamat, email FROM data_mhs");
			    $mhs->execute();   
			    echo "<fieldset>";
			    echo "<legend>"."Detil Data Diri"."</legend>"; 
			        echo "<table>
					<tr>
						<td><b>Nama Panggilan</b></td>
						<td><b>Jenis Kelamin</b></td>
						<td><b>Alamat</b></td>
						<td><b>Email</b></td>
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
			?><br/>
	</fieldset>
</body>
</html>