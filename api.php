<?php
    header('Content-Type: application/json; charset=utf8');

    $conn = mysqli_connect("localhost","root","","apicrud");

    if($_SERVER['REQUEST_METHOD']==='GET'){
        $sql = "SELECT * FROM barang";
        $query = mysqli_query($conn, $sql);
        $array_data = array();
        while($data = mysqli_fetch_assoc($query)){
            $array_data[] = $data;
        }

        echo json_encode($array_data);

    }else if($_SERVER['REQUEST_METHOD']==='POST'){
        $nama = $_POST['nama'];
        $stock = $_POST['stock'];
        $harga = $_POST['harga'];

        $sql = "INSERT INTO barang (nama, stock, harga) VALUES ('$nama',' $stock', '$harga')";
        $query = mysqli_query($conn, $sql);

        if($query){
            $data = [
                'status' => 'Berhasil'
            ];

            echo json_encode([$data]);
        }else{
            $data = [
                'status' => 'Gagal'
            ];

            echo json_encode([$data]);
        }
    }else if($_SERVER['REQUEST_METHOD'] === 'DELETE'){
        $id_barang = $_GET['id_barang'];
        $sql = "DELETE FROM barang WHERE id_barang = '$id_barang'";
        $query = mysqli_query($conn, $sql);

        if($query){
            $data = [
                'status' => 'Berhasil'
            ];

            echo json_encode([$data]);
        }else{
            $data = [
                'status' => 'Gagal'
            ];

            echo json_encode([$data]);
        }

    }else if($_SERVER['REQUEST_METHOD']==='PUT'){
        $id = $_GET['id_barang'];
        $nama = $_GET['nama'];
        $stock = $_GET['stock'];
        $harga = $_GET['harga'];

        $sql = "UPDATE barang SET nama='$nama', stock='$stock', harga='$harga' WHERE id_barang = '$id'";
        $query = mysqli_query($conn, $sql);

        if($query){
            $data = [
                'status' => 'Berhasil'
            ];

            echo json_encode([$data]);
        }else{
            $data = [
                'status' => 'Gagal'
            ];

            echo json_encode([$data]);
        }
    }
?>