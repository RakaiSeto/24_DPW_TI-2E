<?php
$pattern = "/go*d/";
$string = "god is good";

if (preg_match($pattern, $string, $matches)) {
    echo "Cocokkan : " . $matches[0];
} else {
    echo "Tidak cocok";
}
?>