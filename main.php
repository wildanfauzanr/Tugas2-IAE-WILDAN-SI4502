<?php
    include "conn.php";

    $sql = "SELECT * FROM mahasiswa";
    $query = mysqli_query($conn, $sql);
    while($data = mysqli_fetch_array($query)){
        $item[] = array(
            'mahasiswa_id' => $data["mahasiswa_id"],
            'nama' => $data["nama"],
            'jurusan' => $data["jurusan"],
            'univ' => $data["univ"],
        ); 
    }

    $response = array(
        'status' => 'OK',
        'data' => $item
    );

    echo json_encode($response)
?>