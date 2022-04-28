<?php
include "../database/connection.php";

$npm = $_GET['npm']; 
$nama = $_GET['nama']; 
$jurusan = $_GET['jurusan'];
$alamat = $_GET['alamat']; 

$query = mysqli_query($conn, "INSERT INTO mahasiswa SET npm = '$npm', nama = '$nama', jurusan = '$jurusan', alamat = '$alamat'");

if ($query) {
$message = "Data berhasil ditambahkan!";

$respone = array(
'status' => "OK",
'message' => $message
);
echo json_encode($respone,JSON_PRETTY_PRINT);

// $message = urlencode($message);
// header("Location:mahasiswa.php?message={$message}");
} else {
    $message = "Data gagal ditambahkan!";
    // $message = urlencode($message);
    // header("Location:mahasiswa.php?message={$message}");
}
?>
