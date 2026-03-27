<?php
session_start();
if (isset($_POST['bt1'])) {
	$un = $_POST['t1'];
	$pwd = $_POST['t2'];
	if ($un == "admin@gmail.com" && $pwd == "admin123") {

		$_SESSION['info'] = $un;
		header("Location:welcome.php");
	} else
		echo "Invalid username or password";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<form method="post" action="">

		<table width="30%" align="center" border="0">

			<tr>
				<th colspan="2">Login Form</th>
			</tr>

			<tr>
				<td align="center">Username</td>
				<td><input type="text" name="t1" /></td>
			</tr>

			<tr>
				<td align="center">Password</td>
				<td><input type="password" name="t2" /></td>
			</tr>

			<tr>
				<td align="center"></td>
				<td><input type="submit" name="bt1" value="Login" /></td>
			</tr>

		</table>

	</form>

</body>

</html>