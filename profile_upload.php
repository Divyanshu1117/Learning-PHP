<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post" action="" enctype="multipart/form-data">

        <table width="40%" align="center" border="0">
            <tr>
                <td align="center" colspan="2">Uploading Demo</td>
            </tr>

            <tr>
                <td align="center">First Name</td>
                <td><input type="text" name="t1" /></td>
            </tr>

            <tr>
                <td align="center">Last Name</td>
                <td><input type="text" name="t2" /></td>
            </tr>

            <tr>
                <td align="center">Attach</td>
                <td><input type="file" name="attach" /></td>
            </tr>

            <tr>
                <td align="center"></td>
                <td><input type="submit" name="bt1" value="Save" /></td>
            </tr>
        </table>
    </form>
</body>

</html>
<?php
if (isset($_POST['bt1'])) {
    $fn = $_POST['t1'];
    $ln = $_POST['t2'];
    $att = $_FILES['attach']['name'];

    $conn = mysqli_connect('localhost', 'root', '', 'mcafinaldb', 3307) or die('Connection Failed: ' . mysqli_connect_error());

    mysqli_select_db($conn, 'mcafinaldb');


    $sql = "insert into ProfileTb values('$fn','$ln','$att')";

    $res = mysqli_query($conn, $sql) or die('Insert failed: ' . mysqli_error($conn));

    if ($res > 0) {
        echo "<script>alert('Record saved Successfully')</script>";
        move_uploaded_file($_FILES['attach']['tmp_name'], "Upload/" . $_FILES['attach']['name']);
    } else {
        echo "<script>alert('Problem in uploading')</script>";
    }
}
?>