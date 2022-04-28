<?php
include "../database/connection.php";

$nama = $_POST['nama']; 
$jurusan = $_POST['jurusan'];

$query = mysqli_query($conn, "INSERT INTO mahasiswa SET nama = '$nama', jurusan = '$jurusan'");

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