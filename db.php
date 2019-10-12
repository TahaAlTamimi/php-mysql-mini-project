<?php
$servername = "localhost";
$username = "root";
$password = "password@123";
$dbname = "test";



//try {
    $conn = new PDO("mysql:host=$servername;dbname=test", $username, $password);

    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    $conn->exec($sql);

//    echo "New record created successfully";
//
//    echo "Connected successfully";

//}
//catch (PDOException $e) {
//    echo $sql . "<br>" . $e->getMessage();
//}







