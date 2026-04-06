<?php
$code = $_REQUEST['id'];

$conn = mysqli_connect('localhost', 'root', '', 'mcafinaldb', 3307) or die('Connection Failed: ' . mysqli_connect_error());

mysqli_select_db($conn, 'mcafinaldb') or die('Could not found database' . mysqli_connect_error());

$sql = "delete from emp where Code='$code'";
$res = mysqli_query($conn, $sql);
if ($res > 0) {
    header("Location:employee_list.php");
} else {
    echo "There is some problem in delete command";
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
</body>

</html>