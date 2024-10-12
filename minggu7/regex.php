<?php
$pattern = '/[a-z]/';
$text = "This is a Sample text";

if (preg_match($pattern, $text)) {
    echo "Teks berisi huruf kecil";
} else {
    echo "Teks tidak berisi huruf";
}

$pattern = '/[0-9]+/';
$text = "There are 123 Apples";

if (preg_match($pattern, $text)) {
    echo "Teks berisi angka";
} else {
    echo "Teks tidak berisi angka";
}
?>