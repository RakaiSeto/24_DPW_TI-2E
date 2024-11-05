<!DOCTYPE html>
<html>
    <head>
        <title>Data Anggota</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Data Anggota</h2>
            <a href="create.php" class="btn-tambah">Tambah anggota</a>
            <br>
            <?php
                include("koneksi.php");

                $query = "SELECT * FROM anggota";
                $result = mysqli_query($koneksi, $query);

                if (mysqli_num_rows($result) > 0) {
                    $no = 1;
                    echo "<table>";
                        echo "<tr>";
                            echo "<th>No</th>";
                            echo "<th>Nama</th>";
                            echo "<th>Alamat</th>";
                            echo "<th>Jenis Kelamin</th>";
                            echo "<th>No. HP</th>";
                            echo "<th>Aksi</th>";
                        echo "</tr>";
                    while ($row = mysqli_fetch_array($result)) {
                        $kelamin = ($row['jenis_kelamin'] == "L") ? "Laki-laki" : "Perempuan";
                        echo "<tr>";
                            echo "<td>" . $no . "</td>";
                            echo "<td>" . $row['nama'] . "</td>";
                            echo "<td>" . $row['alamat'] . "</td>";
                            echo "<td>" . $kelamin . "</td>";
                            echo "<td>" . $row['no_telp'] . "</td>";
                            echo "<td>";
                                echo "<a href='edit.php?id=" . $row['id'] . "' class='btn-edit'>Edit</a><br>";
                                echo "<a href='#' data-id='" . $row['id'] . "' data-nama='" . $row['nama'] . "' class='btn-hapus'>Hapus</a>";
                            echo "</td>";
                        echo "</tr>";
                        $no++;
                    }
                    echo "</table>";
                } else {
                    echo "tidak ada data";
                }
                mysqli_close($koneksi);
            ?>
        </div>
        <script>
            var btnHapus = document.getElementsByClassName("btn-hapus")

            for (var i = 0; i < btnHapus.length; i++) {
                btnHapus[i].addEventListener("click", function() {
                    var id = this.getAttribute("data-id");
                    var nama = this.getAttribute("data-nama");
                    if (confirm("Apakah anda yakin ingin menghapus data " + nama + "?")) {
                        window.location.href = "proses.php?aksi=hapus&id=" + id;
                    }
                })
            }
        </script>
    </body>
</html>