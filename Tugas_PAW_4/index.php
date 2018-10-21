<?php 
function checklogin($username,$password){
	$dbc = new PDO('mysql:host=localhost;dbname=myapp','root','');
	$statement = $dbc-> prepare("SELECT * FROM admins WHERE username = :username and password = SHA2(:password,0)");

	$statement->bindValue(':username',$username);
	$statement->bindValue(':password',$password);
	$statement->execute();

	return $statement->rowCount()>0;
}

	if (isset($_POST['login']))
	{
		if (checklogin($_POST['username'], $_POST['password'])) 
			{
			session_start();
			$_SESSION['isAdmin'] = true;
			header('Location: index.php');
		}
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Data Mahasiswa</title>
	<link rel="stylesheet" type="text/css" href="myapp.css">
</head>
<body>
	<h1>Data Mahasiswa</h1>
	<fieldset>
		<a href="private1.php">Halaman Detil Data 1 | </a>
		<a href="private2.php">Halaman Detil Data 2 | </a>
		<?php
			session_start();
			if (@$_SESSION['isAdmin']==true) {
				echo "<a href='logout.php'>"."Halaman Logout"."</a>";
			}else{
				echo "<a href='login.php'>"."Halaman Login"."</a>";
			}
		?>
	<fieldset>
	<legend>Data Diri</legend>
		<?php
			include 'data_diri.php';
		?>
	</fieldset>
	<?php
		if (@$_SESSION['isAdmin']==false){
			?>
				<fieldset>
				<legend><b>Login</b></legend>
				<form method="POST" action="login.php">
				<table>
					<tr>
						<td ><label>Username </label></td>
						<td>:</td>
						<td><input type="text" name="username" size="31"></td>
					</tr>
					<tr>
						<td><label>Password </label></td>
						<td>:</td>
						<td><input type="password" name="password" size="31" /></td>
					</tr>
					<tr>
						<td colspan="3"><input type="submit" value="Login" name="login"/></td>
					</tr>
				</table>
				</form>
				</fieldset>
			<?php
		}
	?>
	
	</fieldset>		
</body>
</html>
