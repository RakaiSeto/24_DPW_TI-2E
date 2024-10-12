<?php
$pattern = '/[a-z]/';
$text = "This is a Sample text";

if (preg_match($pattern, $text)) {
    echo "Teks berisi huruf kecil";
} else {
    echo "Teks tidak berisi huruf";
}
?>