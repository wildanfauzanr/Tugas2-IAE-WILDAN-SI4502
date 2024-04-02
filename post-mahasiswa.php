<?php
    include "conn.php";

    $nama = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $jurusan = isset($_POST["jurusan"]) ? $_POST["jurusan"] : "";
    $univ = isset($_POST["univ"]) ? $_POST["univ"] : "";

    $sql = "INSERT INTO `mahasiswa` (`nama`, `jurusan`, `univ`) VALUES ('".$nama."','".$jurusan."','".$univ."');";
    echo $sql;

    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Post Success";
    }else{
        $msg = "Post failed";
    }

    echo $msg;
?>