<?php
    include_once("../inlcudes/config.php");
    session_start();
    $id = $_SESSION['id'];

    if(isset($_POST['gr'])) {
        $gr = 1;
        $sql = "INSERT INTO Rating (Rating_house, Rating_person) VALUES ('$gr', '$id');";
        $result = mysqli_query($conn, $sql);
    }
    if(isset($_POST['sl'])) {
        $gr = 4;
        $sql = "INSERT INTO Rating (Rating_house, Rating_person) VALUES ('$gr', '$id');";
        $result = mysqli_query($conn, $sql);
    }if(isset($_POST['hu'])) {
        $gr = 3;
        $sql = "INSERT INTO Rating (Rating_house, Rating_person) VALUES ('$gr', '$id');";
        $result = mysqli_query($conn, $sql);
    }if(isset($_POST['ra'])) {
        $gr = 2;
        $sql = "INSERT INTO Rating (Rating_house, Rating_person) VALUES ('$gr', '$id');";
        $result = mysqli_query($conn, $sql);
    }

   
?>