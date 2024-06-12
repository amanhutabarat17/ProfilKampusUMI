<?php
include 'koneksi.php';

if (isset($_GET['npm'])) {
    $npm = $_GET['npm'];

    $query = "DELETE FROM mahasiswa WHERE npm='$npm'";

    $result = mysqli_query($koneksi, $query);

    if ($result) {
        echo "<script>alert('Data berhasil dihapus');</script>";
        header("Location: landingpage.php");
        exit();
    } else {
        echo "<script>alert('Gagal menghapus data');</script>";
    }
}