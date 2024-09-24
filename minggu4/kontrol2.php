<?php
    $beli = 120000;
    $diskon = 0;
    if ($beli > 100000) {
        $diskon = 0.2;
    }

    $total = $beli - ($beli * $diskon);

    echo "Total yang harus dibayarkan: $total";
?>