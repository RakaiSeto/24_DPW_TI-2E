<?php
$input = $_POST["input"];
//$input = htmlspecialchars($input, ENT_QUOTES, "UTF-8");
echo "input : " . $input;

$email = $_POST["email"];
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email berhasil validasi";
} else {
    echo "Email tidak valid";
}
?>

