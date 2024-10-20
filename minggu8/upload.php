<?php
if (isset($_POST["submit"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myfile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");
    $maxSize = 1024 * 1024 * 5; // 2 MB

    if (in_array($fileType, $allowedExtensions) && $_FILES["myfile"]["size"] < $maxSize) {
        if (move_uploaded_file($_FILES["myfile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diupload";
        } else {
            echo "Gagal mengupload file";
        }
    } else {
        echo "Tipe file tidak diizinkan atau ukuran file terlalu besar";
    }
} else {
    echo "tidak muncul apa2";
}
?>