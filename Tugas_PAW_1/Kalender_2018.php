<!DOCTYPE html>
<html lang="en">
<head>
	<title>Kalender 2018</title>
	<style>
		.main{
			border: groove;
			margin-left: 200px;
			margin-right: 200px;
			padding-left: 65px;
			background-color: rgb(30, 180, 255);
			float: left;
			font-family: Bahnschrift;
		}
		.div_h3{
			margin-right: 125px;
			text-align: center;
			font-family: Algerian;	
		}
		.divBulan{
			background-color: rgb(255, 255, 50);
			width: 237px;
			float: left;
			border: 1px solid black;
			text-align: center;
			margin-top: 50px;
			margin-left: 10px;
			margin-right: 20px;
		}
		.bawah{
			background-color: rgb(255, 255, 50);
			border: 1px solid black;
			float: left;
			margin-top: 50px;
		}
		table, th, td {
			border-collapse: collapse;
		}
		th, td {
			border: 1px solid black;
		    padding: 4px;
		    background-color: rgb(255, 255, 255);
		}
		th {
			border: 1px solid black;
		    background-color: rgb(0, 0, 255);
		    color: black;
		}
		caption {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class='main'>
	<?php 
			$liburan = array("2018-1-1" => "New Year's Day",
				"2018-2-16" => "Chinesse Lunar New Year's Day",
				"2018-3-17" => "Ball's Day of Silence and Hindu New Year",
				"2018-3-30" => "Good Friday",
				"2018-4-13" => "Ascension of the Prophet Muhammad SAW",
				"2018-5-1" => "International Labor Day",
				"2018-5-10" => "Ascension of Jesus Christ",
				"2018-5-29" => "Waisak Day (Budha's Anniversary)",
				"2018-6-1" => "Pancasila Day",
				"2018-6-11" => "First Joint Holiday before Idul Fitri",
				"2018-6-12" => "Second Joint Holiday before Idul Fitri",
				"2018-6-13" => "Third Joint Holiday before Idul Fitri",
				"2018-6-14" => "Fourth Joint Holiday before Idul Fitri",
				"2018-6-15" => "Idul Fitri Day 1",
				"2018-6-16" => "Idul Fitri Day 2",
				"2018-6-18" => "First Joint Holiday after Idul Fitri",
				"2018-6-19" => "Second Joint Holiday after Idul Fitri",
				"2018-6-20" => "Third Joint Holiday after Idul Fitri",
				"2018-6-27" => "Regional Election Day",
				"2018-8-17" => "Indonesia Independence Day",
				"2018-8-22" => "Eid al-Adha",
				"2018-9-11" => "Muharram/Islamic New Year",
				"2018-11-20" => "The Prophet Muhammad's Birthday",
				"2018-12-24" => "Chrismas Eve",
				"2018-12-25" => "Chrismas Day");
			echo "<div>";
				echo  "<h1 class='div_h3'> Calendar "."</h1>";
			echo "</div>";
//===================================================================================================================================//
			function display_month($month, $year) {
			echo "<table>";

			$hari_pertama_setiap_bulan = mktime(0, 0, 0, $month, 1, $year); 
			$hari_pertama_setiap_minggu = date('w', $hari_pertama_setiap_bulan); 
			$hari_dalam_sebulan = date('t', $hari_pertama_setiap_bulan); 
			echo  "<caption><b>".date('F-Y', $hari_pertama_setiap_bulan)."</b></caption>";
			global $liburan;
			$hari = array("Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat");
		
			echo "<tr>";
			for ($i=0; $i < 7; $i++) { 
				echo "<th>$hari[$i]</th>";
			}
			echo "</tr>";

			echo "<tr>";
			if ($hari_pertama_setiap_minggu > 0) {
					echo "<td colspan='$hari_pertama_setiap_minggu'>&nbsp;</td>";
				}

			$cek = 0;
			for ($day_of_month = 1; $day_of_month <= $hari_dalam_sebulan; $day_of_month++) { 

				if ($hari[$hari_pertama_setiap_minggu] == "Sun" and $day_of_month != 1) {

					echo "<tr>";
				}

				if ($day_of_month == date('d') and date('m-y') == date('m-y', $hari_pertama_setiap_bulan)) {
					echo "<td style='background-color:yellow'>$day_of_month</td>";
				}
				elseif (array_key_exists("$year-$month-$day_of_month", $liburan)) {
					echo "<td style='background-color:Red'>$day_of_month</td>";
				}
				elseif ($hari[$hari_pertama_setiap_minggu] == "Sun") {
					echo "<td style='background-color:Red'>$day_of_month</td>";
				}
				else{
					echo "<td>$day_of_month</td>";
				}
			

				if ($day_of_month == $hari_dalam_sebulan and $hari[$hari_pertama_setiap_minggu]!= "Sat") {

					while ($hari[$hari_pertama_setiap_minggu] != "Sat") {

						$hari_pertama_setiap_minggu++;
						$cek++;
					}
				 	echo "<td colspan='$cek'></td>";
				 }
				 if ($hari[$hari_pertama_setiap_minggu] == "Sat" or $day_of_month == $hari_dalam_sebulan) {
					echo "</tr>";
					$hari_pertama_setiap_minggu=-1;
				}
				$hari_pertama_setiap_minggu++;
				
				//-----------------------------
			}
			echo "</table>";
		}

			for ($i=1; $i <= 12; $i++) { 
				echo "<div class='divBulan'>";
					display_month($i, "2018");
				echo "</div>";
			}

			echo "<div class='bawah'>";
			echo "<h1> Hari Libur Nasional 2018 </h1>";
			foreach ($liburan as $key => $value) {
						echo "<p>$key : $value</p>";
			}
			echo "</div>";
	?>
	</div>
</body>
</html>