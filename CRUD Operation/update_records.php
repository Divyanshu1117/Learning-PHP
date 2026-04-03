<?php
if (isset($_POST['bt1'])) {
    $x = $_POST['t1'];
    $y = $_POST['t2'];
    $z = $_POST['t3'];

    $conn = mysqli_connect('localhost', 'root', '', 'mcafinaldb', 3307) or die('Connection Failed: ' . mysqli_connect_error());

    mysqli_select_db($conn, 'mcafinaldb') or die('Could not found database' . mysqli_connect_error());

    $sql = "update emp set Name='$y',Salary='$z' where Code='$x'";
    $res = mysqli_query($conn, $sql);

    if ($res > 0) {
        header("Location:view_records.php");
    } else {
        echo "There is some problem in update command ";
    }
} else {
    $a = $_REQUEST['id'];
    $b = $_REQUEST['id1'];
    $c = $_REQUEST['id2'];
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
        Code<input type="text" name="t1" value="<?php echo $a; ?>" /><br /><br />
        Name<input type="text" name="t2" value="<?php echo $b; ?>" /><br /><br />
        Salary<input type="text" name="t3" value="<?php echo $c; ?>" /><br /><br />

        <input type="submit" name="bt1" value="Update" />
    </form>
</body>

</html>