<?php
	$dbc = new PDO('mysql:host=localhost;dbname=myapp','root','');

	$mhs = $dbc->prepare("SELECT NIM, nama_lengkap, prodi, fakultas, universitas, foto FROM data_mhs");
	$mhs->execute();    
	echo "<table>
		<tr>
		<td><b>Foto</b></td>
		<td><b>Nama Lengkap</b></td>
		<td><b>NIM</b></td>
		<td><b>Prodi</b></td>
		<td><b>Fakultas</b></td>
		<td><b>Universitas</b></td>
		</tr>";
	foreach($mhs as $row){
		echo "<tr>";
		echo "<td><img src='img/".$row[5]."' alt='No IMG'></td>";
		echo "<td>".$row[1]."</td>";
		echo "<td>".$row[0]."</td>";
		echo "<td>".$row[2]."</td>";
		echo "<td>".$row[3]."</td>";
		echo "<td>".$row[4]."</td>";
		echo "</tr>";
	}
	echo "</table>";
?>