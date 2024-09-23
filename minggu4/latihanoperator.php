<?php
    $kursi = 45;
    $kursiDiisi = 28;
    $persenKursi = ($kursi - $kursiDiisi) / $kursi * 100;

    echo "Kursi asal: {$kursi}<br>";
    echo "Kursi yang diisi: {$kursiDiisi}<br>";
    echo "Persentase kursi yang diisi: {$persenKursi}<br>";
?>