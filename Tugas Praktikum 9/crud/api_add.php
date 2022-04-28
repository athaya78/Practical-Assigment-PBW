<?php
    include "../database/connection.php";
    $query = mysqli_query($conn, "SELECT * FROM mahasiswa");
    while($data = mysqli_fetch_array($query)){
        $item[] = array(
            'nama' => $data['nama'],
            'jurusan' => $data['jurusan']
        );
    }

    $response = array(
        'status' => 'OK',
        'data' => $item
    );

    echo json_encode($response);
    
?>