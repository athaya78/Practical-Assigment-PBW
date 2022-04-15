<?php
include "../database/connection.php";
if(isset($_POST['submit'])){
    
    $no_absen = $_POST['no_absen'];
    $nama = $_POST['nama']; 
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

   $query = mysqli_query($conn, "insert into siswa set no_absen = '$no_absen', nama = '$nama', kelas = '$kelas', alamat = '$alamat'");

   if ($query) {
    $message = "Data berhasil ditambahkan!";
    $message = urlencode($message);
    header("Location:siswa.php?message={$message}");
    } else {
        $message = "Data gagal ditambahkan!";
        $message = urlencode($message);
        header("Location:siswa.php?message={$message}");
    }
}

?>