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
                <th colspan="2">Basic Server Handling</th>
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
                <td align="center">Address</td>
                <td>
                    <textarea rows="5" cols="20" name="t3"></textarea>
                </td>
            </tr>

            <tr>
                <td align="center">State</td>
                <td>
                    <select name="s1">
                        <option value="Select">Select</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Himachal">Himachal</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td align="center">Gender</td>
                <td>
                    <input type="radio" name="r1" value="Male" />Male
                    <input type="radio" name="r1" value="Female" />Female
                </td>
            </tr>

            <tr>
                <td align="center"></td>
                <td>
                    <input type="submit" name="bt1" value="Save" />

                </td>
            </tr>

        </table>
</body>

</html>

<?php
if (isset($_POST['bt1'])) {
    $un = $_POST['t1'];
    $pwd = $_POST['t2'];
    $add = $_POST['t3'];
    $state = $_POST['s1'];
    $gen = $_POST['r1'];
    echo "Username is " . $un;
    echo "<br>Password is " . $pwd;
    echo "<br>Address is " . $add;
    echo "<br>Selected state is  " . $state;
    echo "<br>Selected gender is " . $gen;
}

?>