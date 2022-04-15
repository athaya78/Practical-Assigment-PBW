<?php
include "../database/connection.php";

if(isset($_GET['no_absen'])){
    $no_absen = $_GET['no_absen'];
    $query = mysqli_query($conn, "delete from siswa where npm=$npm");
    if ($query) {
        $message = "Data berhasil dihapus!";
        $message = urlencode($message);
        header("Location:siswa.php?message={$message}");
        } else {
            $message = "Data gagal dihapus!";
            $message = urlencode($message);
            header("Location:siswa.php?message={$message}");
    }
}