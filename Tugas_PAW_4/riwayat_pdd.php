<?php
$dbc = new PDO('mysql:host=localhost;dbname=myapp','root','');

	$mhs = $dbc->prepare("SELECT tingkat, nama_sekolah, tahun_masuk, tahun_lulus, website FROM riwayat_pendidikan");
	$mhs->execute();   
	echo "<table>
		<tr>
		<td><b>Tingkat</b></td>
		<td><b>Nama Sekolah</b></td>
		<td><b>Tahun Masuk</b></td>
		<td><b>Tahun Lulus</b></td>
		<td><b>Website</b></td>
		</tr>";
		foreach($mhs as $row){
			echo "<tr>";
			echo "<td>".$row[0]."</td>";
			echo "<td>".$row[1]."</td>";
			echo "<td>".$row[2]."</td>";
			echo "<td>".$row[3]."</td>";
			echo "<td>"."<a href='$row[4]'>".$row[4]."</a>"."</td>";
			echo "</tr>";
			}
	echo "</table>";
?>