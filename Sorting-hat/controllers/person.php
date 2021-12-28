<?php
    include_once("../inlcudes/config.php");
    if(isset($_POST['submit'])) {
        $firstname = $_POST["firstname"];
        $lastname = $_POST["lastname"];
        $age = $_POST["age"];
        $description = $_POST["description"];
        $power = $_POST["power"];

        $sql = "INSERT INTO Person (Firstname, Lastname, Age, Discription, power) VALUES ('$firstname', '$lastname', '$age', '$description', '$power');";
        $result = mysqli_query($conn, $sql);
        header("http://localhost:8888/sorting-hat/show.php?id=1", true, 303);

    }
?>
