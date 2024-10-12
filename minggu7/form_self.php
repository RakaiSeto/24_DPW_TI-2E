<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <?php
        $nama = "";
        $namaErr = "";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["nama"])) {
                $namaErr = "Nama tidak boleh kosong";
            } else {
                $nama = $_POST["nama"];
                echo "Nama berhasil disimpan";
                }
        }
        ?>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <label for="nama">Nama:</label>
            <input type="text" name="nama" id="nama" value="<?php echo $nama; ?>">
            <span class="error"><?php echo $namaErr; ?></span><br><br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </body>