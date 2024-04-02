<?php
    include "conn.php";

    $mahasiswa_id = $_GET['mahasiswa_id'];
    $nama = $_POST["nama"];
    $jurusan = $_POST["jurusan"];
    $univ = $_POST["univ"];

    $sql = "UPDATE `mahasiswa` SET `nama` ='".$nama."',`jurusan` ='".$jurusan."',`univ` ='".$univ."' WHERE `mahasiswa`.`mahasiswa_id` = '".$mahasiswa_id."'; ";
    echo $sql;

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Update Success";
    }else{
        $msg = "Update failed";
    }

    echo $msg;

?>