<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <table width="30%" align="center" border="2">

        <tr>
            <th colspan="3">Employee Records</th>
        </tr>

        <tr>
            <td colspan="3"><a href="add_employee.php">Add Record</a></td>
        </tr>

        <tr>
            <td align="center">Code</td>
            <td align="center">Name</td>
            <td align="center">Salary</td>
        </tr>

        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'mcafinaldb', 3307) or die('Connection Failed: ' . mysqli_connect_error());

        mysqli_select_db($conn, 'mcafinaldb') or die('Could not found database' . mysqli_connect_error());

        $sql = "select * from emp";

        $res = mysqli_query($conn, $sql);

        while ($row = mysqli_fetch_array($res))
        //while($row=mysqli_fetch_object($res))
        {
        ?>
            <tr>
                <td align="center"><?php echo $row['code']; ?></td>
                <!--<td align="center"><?php //echo $row->code;
                                        ?></td>-->
                <td align="center"><?php echo $row['name']; ?></td>
                <td align="center"><?php echo $row['salary']; ?></td>
            </tr>
        <?php
        }

        ?>
    </table>

</body>

</html>