<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_COOKIE['uinfo'])) {
        $un = $_COOKIE['uinfo'];
        echo "Welcome  " . $un;
    } else {
        echo "<script>document.location.href='index.php'</script>";
    }
    ?>
</body>

</html>