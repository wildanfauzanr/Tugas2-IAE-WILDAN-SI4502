<?php
    include "conn.php";
    $mahasiswa_id = isset($_POST["mahasiswa_id"]) ? $_POST["mahasiswa_id"] : "";
    $sql = "DELETE FROM `mahasiswa` WHERE `mahasiswa_id` = '".$mahasiswa_id."'";
    echo $sql;
    $query = mysqli_query($conn, $sql);
    if($query){
        $msg = "Delete Success";
    }else{
        $msg = "Delete failed";
    }

    echo $msg;

    // $mahasiswa_id = isset($_POST["mahasiswa_id"]) ? $_POST["mahasiswa_id"] : "";
    // if($mahasiswa_id) {
    //     // $mahasiswa_id = $_POST["mahasiswa_id"];


    //     $sql = "DELETE FROM `mahasiswa` WHERE `mahasiswa_id` = '".$mahasiswa_id."'";


    //     $query = mysqli_query($conn, $sql);


    //     if($query) {
    //         $msg = "Delete Success";
    //     } else {
    //         $msg = "Delete failed";
    //     }
    // } else {

    //     $msg = "ID mahasiswa not provided";
    // }


    // echo $msg;
?>