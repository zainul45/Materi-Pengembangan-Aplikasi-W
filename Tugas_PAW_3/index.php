
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Puppies Data</title>
	<link rel="stylesheet" type="text/css" href="puppiesdata.css">
</head>
<body>
	<h1>Puppies Data</h1>
			<?php
			    $dbc = new PDO('mysql:host=localhost;dbname=puppies','root','');

			    $animals = $dbc->prepare("SELECT PuppyName, BreedName, Description, Price, Picture FROM breeds INNER JOIN animals ON animals.BreedID=breeds.Breed");
			    $animals->execute();    
			        echo "<table>
					<tr>
						<td>Puupy Name</td>
						<td>Breed Name</td>
						<td>Description</td>
						<td>price</td>
						<td>Picture</td>
					</tr>";
					        foreach($animals as $row){
					            echo "<tr>";
								echo "<td>".$row[0]."</td>";
								echo "<td>".$row[1]."</td>";
								echo "<td>".$row[2]."</td>";
								echo "<td>$".$row[3]."</td>";
								echo "<td><img src='puppies_images/".$row[4]."' alt='No IMG'></td>";
								echo "</tr>";
							}
					echo "</table>";
			?>
		<div>
			<a href="form.php">Tambahkan Data Puppies</a>
		</div>
</body>
</html>