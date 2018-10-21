<?php
	$error_surname = $error_firstname = $error_email = $error_number = $error_password = $error_confirm = "";
    $error_con = false;
	if (isset($_POST['surname']) || isset($_POST['firstname'])|| isset($_POST['email'])
       || isset($_POST['number'])|| isset($_POST['passwd'])|| isset($_POST['cpasswd']))
	{
		require 'validate.inc';
		validateName($error_surname, $_POST, 'surname', $error_con);
		validateFirstname($error_firstname, $_POST,'firstname', $error_con);
		validateEmail($error_email, $_POST, 'email', $error_con);
		validateNumber($error_number, $_POST, 'number', $error_con);
		validatePassword($error_password, $_POST, 'passwd', $error_con);
        validateConfirmPassword($error_confirm, $_POST, 'cpasswd', $error_con, $_POST['passwd']);

		if ($error_surname !='' || $error_firstname !='' || $error_email !='' || $error_number !='' || $error_password !='' || $error_confirm !='' ){
			// tampilkan kembali form
			include 'prosesData_form.php';
		}
		else{
			include 'sukses.php';
		}
	}
	else
	// tampilkan kembali form
	include 'prosesData_form.php';
?>