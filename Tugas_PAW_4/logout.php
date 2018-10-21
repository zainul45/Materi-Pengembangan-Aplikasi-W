<?php
	session_start();
	unset($_SESSION['isAdmin']);
	session_destroy();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Logout</title>
	<link rel="stylesheet" type="text/css" href="myapp.css">
</head>
<body>
	<h1>Selamat Anda Telah Berhasi Logout</h1>
	<a href="index.php">Kembali Ke Halaman Home</a>
</body>
</html>