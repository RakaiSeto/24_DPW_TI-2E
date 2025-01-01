<?php
include("koneksi.php");

$aksi = $_GET['aksi'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];
$no_telp = $_POST['no_telp'];

if ($aksi == "tambah") {
    $query = "INSERT INTO ANGGOTA (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

    if (sqlsrv_query($koneksi, $query)) {
        header("location:index.php");
    } else {
        echo "Data gagal disimpan<br>";
        print_r(sqlsrv_errors());
    }
} elseif ($aksi == "ubah") {
    if (isset($_POST['id'])) {
        $id = $_POST['id'];

        $query = "UPDATE anggota SET nama = '$nama', jenis_kelamin = '$jenis_kelamin', alamat = '$alamat', no_telp = '$no_telp' WHERE id = '$id'";

        if (sqlsrv_query($koneksi, $query)) {
            header("location:index.php");
            exit();
        } else {
            echo "Gagal mengupdate data: " . sqlsrv_errors();
        }
    } else {
        echo "ID tidak valid";
    }
} elseif ($aksi == "hapus") {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $query = "DELETE FROM anggota WHERE id = '$id'";

        if (sqlsrv_query($koneksi, $query)) {
            header("location:index.php");
            exit();
        } else {
            echo "Gagal menghapus data: " . sqlsrv_errors();
        }
    } else {
        echo "ID tidak valid";
    }
}

sqlsrv_close($koneksi);
