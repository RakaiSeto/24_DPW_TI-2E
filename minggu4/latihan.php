<?php
$nilai = [
    ["Alice", 85],
    ["Bob", 92],
    ["Charlie", 78],
    ["David", 64],
    ["Eva", 90]
];
$total = 0;
foreach ($nilai as $key => $value) {
    $total += $value[1];
}

$rata = $total / count($nilai);
echo "Nilai rata-rata: " . $rata;
foreach ($nilai as $key => $value) {
    if (floatval($value[1]) > $rata) {
       echo "<br>" . $value[0] . " lulus dengan nilai " . $value[1];
    }
}
?>