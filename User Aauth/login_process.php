<?php
if (isset($_POST['btn'])) {
    $un = $_POST['username'];
    $pwd = $_POST['password'];

    if (($un == "sdimt@gmail.com") && ($pwd == "admin")) {
        if (isset($_POST['remember']))
            setcookie('uinfo', $un, time() + (3600 * 24 * 7), '/');
        else
            setcookie('uinfo', $un, false, '/');

        echo "<script>document.location.href='welcome.php'</script>";
    } else {
        echo "invalid username/password";
    }
}

?>