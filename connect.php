<?php
    $con = new mysqli("localhost", "root", "", "database");
    if ($con->connect_error)
    die ("database connection error");

    // $sql = "SELECT * FROM users";
    // $result = $con->query($sql);
    // echo json_encode($result->fetch_all());
?>