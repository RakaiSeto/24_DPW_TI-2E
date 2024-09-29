<?php

function perkenalan($nama, $salam) {
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
}

perkenalan("Hamdana", "Hallo");

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

perkenalan($saya, $ucapanSalam);

?>
