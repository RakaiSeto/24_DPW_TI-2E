<?php
$roomType = $_POST['roomtype'];
$floor = $_POST['floor'];
$day = $_POST['days'];
$discount = $_POST['discount'];

$basePrice = 0;
$discountPrice = 0;
$finalPrice = 0;

switch ($roomType) {
    case "standard":
        $basePrice += (300000 * $day);
        break;
    case "deluxe":
        $basePrice += (500000 * $day);
        break;
    case "superior":
        $basePrice += (400000 * $day);
        break;
}

if ($floor > 5) {
    $basePrice += 50000;
}
$finalPrice = $basePrice;

if ($discount == "hut") {
    $discountPrice += 100000;
    $finalPrice -= 100000;
} else if ($discount == "member") {
    $discountPrice += 0.1 * $finalPrice;
    $finalPrice -= (0.1 * $finalPrice);
}

echo "<p class=\"mb-0\">Total Transaksi : {$basePrice}</p><p class=\"mb-2 mt-0\">Diskon : {$discountPrice}</p><p class=\"text-danger fs-2\">Jumlah yang harus dibayar : {$finalPrice}</p>";
?>