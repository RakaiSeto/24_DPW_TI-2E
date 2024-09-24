<?php
    $nilaiNumerik = 92;

    if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
        echo "Nilai huruf: A";
    } elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 89) {
        echo "Nilai huruf: B";
    } elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 79) {
        echo "Nilai huruf: C";
    } elseif ($nilaiNumerik >= 60 && $nilaiNumerik <= 69) {
        echo "Nilai huruf: D";
    }

    echo "<br>";

    $jarakSaatIni = 0;
    $jarakTarget = 500;
    $peningkatanHarian = 30;
    $hari = 0;

    while ($jarakSaatIni < $jarakTarget) {
        $jarakSaatIni += $peningkatanHarian;
        $hari++;
    }

    echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak $jarakTarget.";

    echo "<br>";

    $jumlahLahan = 10;
    $tanamanPerLahan = 5;
    $buahPerTanaman = 10;
    $jumlahBuah = 0;

    for ($i = 1; $i <= $jumlahLahan; $i++) {
        $jumlahBuah += ($tanamanPerLahan * $buahPerTanaman);
    }

    echo "Jumlah buah yang diperlukan: $jumlahBuah";

    $skorUjian = [85, 92, 78, 96, 88];
    $totalSkor = 0;

    foreach ($skorUjian as $skor) {
        $totalSkor += $skor;
    }

    echo "<br>";
    echo "Total skor ujian: $totalSkor";

    $nilaiSiswa = [85, 92, 58, 64, 90, 55, 89, 79, 70, 96];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai < 60) {
            echo "Nilai: $nilai tidak lulus <br>";
            continue;
        }
        echo "Nilai: $nilai lulus <br>";
    }
?>