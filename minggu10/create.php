<!DOCTYPE html>
<html>
    <head>
        <title>Tambah data anggota</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Tambah data anggota</h2>
            <form action="proses.php?aksi=tambah" method="POST">
                <label for="nama">Nama:</label>
                <input type="text" name="nama" id="nama" required>
                <label for="jenis_kelamin">Jenis Kelamin:</label>
                <div class="radio-group">
                    <input type="radio" name="jenis_kelamin" id="laki" value="L" required><label for="laki">Laki-laki</label>
                    <input type="radio" name="jenis_kelamin" id="perempuan" value="P" required><label for="perempuan">Perempuan</label>
                </div>
                <label for="alamat">Alamat:</label>
                <input type="text" name="alamat" id="alamat" required>
                <label for="no_telp">No. Telp:</label>
                <input type="text" name="no_telp" id="no_telp" required>
                <button type="submit">Simpan data</button>
                <a href="index.php" class="btn-kembali">Kembali</a>
            </form>
        </div>
    </body>
</html>