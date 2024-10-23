<?php
$email = $_POST['email'];
$password = $_POST['password'];

//validate input
if (empty($email)) {
    echo "Username harus diisi";
} elseif (empty($password)) {
    echo "Password harus diisi";
} elseif (strlen($password) < 5) {
    echo "Password minimal 5 karakter";
} elseif (!preg_match("/[0-9]/", $password) || !preg_match("/[a-zA-Z]/", $password)) {
    echo "Password harus terdiri dari huruf dan angka";
} else {
    echo "true";
    setcookie("username", $email, time()+3600);
}

?>