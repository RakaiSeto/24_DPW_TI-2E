<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];

$total = 0;
for ($i = 2; $i < count($nilai) - 2; $i++) {
    $total += $nilai[$i];
}

$rata2 = $total / (count($nilai) - 4);

echo "Nilai rata-rata: $rata2";
?>