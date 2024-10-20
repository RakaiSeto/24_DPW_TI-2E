<?php
if (isset($_FILES['files']['name'][0])) {
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
        $errors = array();
        $file_name = $_FILES['files']['name'][$i];
        $file_size = $_FILES['files']['size'][$i];
        $file_tmp = $_FILES['files']['tmp_name'][$i];
        $file_type = $_FILES['files']['type'][$i];
        @$file_ext = strtolower(end(explode('.', $_FILES['files']['name'][$i])));

        $extensions = array("png", "jpg", "jpeg", "gif");

        if (in_array($file_ext, $extensions) === false) {
            $errors[] = "Ekstensi file yang diizinkan adalah: " . implode(', ', $extensions);
        }

        if ($file_size > 2097152) {
            $errors[] = 'Ukuran file harus kurang dari 2 MB';
        }

        if (empty($errors) == true) {
            move_uploaded_file($file_tmp, "documents/" . $file_name);
            echo "File $file_name berhasil diunggah <br>";
        } else {
            echo implode(" ", $errors) . "<br>";
        }
    }
}
?>