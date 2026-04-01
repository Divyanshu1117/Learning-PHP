<?php
if (isset($_POST['bt1'])) {
    $a = $_POST['t1'];
    $b = $_POST['t2'];
    $c = $_POST['t3'];

    $conn = mysqli_connect('localhost', 'root', '', 'mcafinaldb', 3307) or die('Connection Failed: ' . mysqli_connect_error());

    mysqli_select_db($conn, 'mcafinaldb') or die('Could not found database' . mysqli_connect_error());

    $sql = "insert into emp values('$a','$b','$c')";
    $res = mysqli_query($conn, $sql);
    if ($res > 0) {
        echo "<script>alert('Record Saved Successfully')</script>";
    } else
        echo "<script>alert('Problem in insert command...')</script>";
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
                <th colspan="2">Employee Record System</th>
            </tr>

            <tr>
                <td align="center">Code</td>
                <td><input type="text" name="t1" /></td>
            </tr>

            <tr>
                <td align="center">Name</td>
                <td><input type="text" name="t2" /></td>
            </tr>

            <tr>
                <td align="center">Salary</td>
                <td><input type="text" name="t3" /></td>
            </tr>

            <tr>
                <td align="center"></td>
                <td>
                    <input type="submit" name="bt1" value="Save" />
                    <a href="employee_records.php">Show Records</a>

                </td>
            </tr>

        </table>
    </form>

</body>

</html>