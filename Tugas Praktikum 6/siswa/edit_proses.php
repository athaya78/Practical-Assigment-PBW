<?php
include "../database/connection.php";
if(isset($_POST['edit'])){
    $no_absen = $_POST['no_absen'];
    $nama = $_POST['nama']; 
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

   $query = mysqli_query($conn, "update siswa set no_absen = '$no_absen', nama = '$nama', kelas = '$kelas', alamat = '$alamat' where no_absen=$no_absen");
 
   if ($query) {
    $message = "Data berhasil diubah!";
    $message = urlencode($message);
    header("Location:siswa.php?message={$message}");
    } else {
        $message = "Data gagal diubah!";
        $message = urlencode($message);
        header("Location:siswa.php?message={$message}");
    }
}
