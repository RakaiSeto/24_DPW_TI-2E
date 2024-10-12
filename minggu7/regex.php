<?php
$pattern = '/apple/';
$replacement = 'banana';
$string = 'I like apple pie';
$new_text = preg_replace($pattern, $replacement, $string);
echo $new_text;
?>