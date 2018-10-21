<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Registration Form</title>
		<link rel="stylesheet" type="text/css" href="form.css">
	</head>
	<body>
		<h1>Registration Form</h1>
		<fieldset>	
			<legend>Person Detail</legend>
			<form class='a' name="myForm" action="prosesData.php" method="POST">
				<table class="tbl">
					<tr>
						<td  class="field"><label>Surname </label></td>
						<td>:</td>
						<td><input type="text" name="surname" size="31" value="<?php if(isset($_POST['surname'])) echo htmlspecialchars($_POST['surname'])?>"/></td>
						<td class="error">
							<span class="val"><?php echo @$error_surname ?></span>
						</td>
					</tr>
					<tr>
						<td  class="field"><label>Firstname </label></td>
						<td>:</td>
						<td><input type="text" name="firstname" size="31" value="<?php if(isset($_POST['firstname'])) echo htmlspecialchars($_POST['firstname'])?>"/></td>
						<td class="error">
							<span class="val"><?php echo @$error_firstname ?></span>
						</td>

					</tr>
					<tr>

						<td class="field"><label>Email Address </label></td>
						<td>:</td>
						<td><input type="text" name="email" size="31" value="<?php if(isset($_POST['email'])) echo htmlspecialchars($_POST['email'])?>" /></td>
						<td class="error">
								<span class="val"><?php echo @$error_email ?></span>
						</td>

					</tr>
					<tr>

						<td class="field"><label>Mobile Number </label></td>
						<td>:</td>
						<td><input type="text" name="number" size="31" value="<?php if(isset($_POST['number'])) echo htmlspecialchars($_POST['number'])?>"/></td>
						<td class="error">
							<span class="val"><?php echo @$error_number ?></span>
						</td>

					</tr>
					<tr>
						<td class="field"><label>Password </label></td>
						<td>:</td>
						<td><input type="password" name="passwd" size="31" value="<?php if(isset($_POST['passwd'])) echo htmlspecialchars($_POST['passwd'])?>"/></td>
						<td class="error">
							<span class="val"><?php echo @$error_password ?></span>
						</td>
					</tr>
					<tr>
						<td class="field"><label>Confirm Password </label></td>
						<td>:</td>
						<td><input type="password" name="cpasswd" size="31" value="<?php if(isset($_POST['cpasswd'])) echo htmlspecialchars($_POST['cpasswd'])?>"/></td>
						<td class="error">
							<span class="val"><?php echo @$error_confirm ?></span>
						</td>
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