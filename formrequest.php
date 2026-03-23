<?php
if (isset($_REQUEST['bt1'])) {
    $a = $_REQUEST['t1'];
    $b = $_REQUEST['t2'];
    $c = $a + $b;
    echo "Sum = " . $c;
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
    <form method="get" action="">

        <table width="30%" align="center" border="0">

            <tr>
                <th colspan="2">Form Handling Demo in PHP</th>
            </tr>

            <tr>
                <td align="center">First Number</td>
                <td><input type="text" name="t1" /></td>
            </tr>

            <tr>
                <td align="center">Second Number</td>
                <td><input type="text" name="t2" /></td>
            </tr>


            <tr>
                <td align="center"></td>
                <td><input type="submit" name="bt1" value="Sum" /></td>
            </tr>

        </table>
    </form>
</body>

</html>