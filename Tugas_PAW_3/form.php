<?php
function displayBreedID(){
        $dbc = new PDO('mysql:host=localhost;dbname=puppies','root','');

        $statement = $dbc->prepare("SELECT Breed, BreedName FROM breeds");
        $statement->execute();
        
        foreach($statement as $row){
            echo "<option value='{$row['Breed']}'>{$row['BreedName']}</option>";
        }
    }

function addPuppies($name, $breedid, $descrip, $price, $picture){
        $dbc = new PDO('mysql:host=localhost;dbname=puppies','root','');

        $statement = $dbc->prepare("INSERT INTO animals (PuppyName, BreedID, Description, Price, Picture) VALUES                                    (:PuppyName, :BreedID, :Description, :Price, :Picture)");
        $statement->bindValue(':PuppyName', $name);
        $statement->bindValue(':BreedID', $breedid);
        $statement->bindValue(':Description', $descrip);
        $statement->bindValue(':Price', $price);
        $statement->bindValue(':Picture', $picture);
        $statement->execute();
    }
if (isset($_POST['submit'])){
        addPuppies($_POST['puppyname'], $_POST['breedid'], $_POST['description'], $_POST['price'], $_POST['picture']);
        header("Location: http://localhost/Tugas_PAW_3/sukses.html");
    }
?> 
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Form Input</title>
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<fieldset>	
			<legend>Animals Details</legend>
			<form class='' name="myform" action="form.php" method="POST">
				<table class="tbl">
					<tr>
						<td class="field"><label>Puppy Name </label></td>
						<td>:</td>
						<td><input type="text" name="puppyname" size="31" id="puppyname"/></td>
					</tr>
					<tr>
						<td>Breed ID </td>
						<td>:</td>
						<td>
							<select name="breedid" id="breedid"><?php displayBreedID(); ?></select>
						</td>
					</tr>
					<tr>
						<td class="field"><label>Description </label></td>
						<td>:</td>
						<td><input type="text" name="description" size="31" id="description"/></td>
					</tr>
					<tr>
						<td class="field"><label>Price </label></td>
						<td>:</td>
						<td><input type="text" name="price" size="31" id="price"/></td>
					</tr>
					<tr>
						<td class="field"><label>Picture </label></td>
						<td>:</td>
						<td><input type="text" name="picture" size="31" id="picture"/></td>
					</tr>
				</table>	
				<div>
					<label>&nbsp;</label>
					<input type="submit" value="Submit" name="submit"/>
					<input type="reset" value="Reset" name="reset"/>
				</div>
			</form>
		</fieldset>
	</body>
</html>