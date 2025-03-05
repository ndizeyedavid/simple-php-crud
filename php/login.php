<?php

include "connect.php";

session_start();
$out = "";

if (isset($_POST['login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['pswd']);

    $login = mysqli_query($con, "SELECT * FROM admin WHERE email='{$email}' AND password='{$password}' ");
    if (mysqli_num_rows($login)) {
        $data = mysqli_fetch_assoc($login);

        $_SESSION['name'] = $data['admin_name'];
        $_SESSION['email'] = $data['email'];

        $out = "
            <script>
                alert('Welcome back " . $_SESSION['name'] . "');
                window.location.assign('../');
            </script>
        ";
    } else {
        $out = "
            <script>
                alert('Access Denied. Incorrect Credentials');
                window.location.assign('../');
            </script>
        ";
    }
} else {
    $out = "
            <script>
                window.location.assign('../');
            </script>
        ";
}

echo $out;
