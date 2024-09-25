<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan',
            ];

//            show data in table format
            echo "<table border='1'>";
            echo "<tr>";
            echo "<th>Nama</th>";
            echo "<th>Domisili</th>";
            echo "<th>Jenis Kelamin</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<td>{$Dosen['nama']}</td>";
            echo "<td>{$Dosen['domisili']}</td>";
            echo "<td>{$Dosen['jenis_kelamin']}</td>";
            echo "</tr>";
            echo "</table>";
        ?>
    </body>
</html>