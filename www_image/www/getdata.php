<?php
    $name = $_GET['Name'];
    $pwd = $_GET['Password'];

    $conn = new mysqli("127.0.0.1", "root", "uwe", "uwe");
    $sql = "SELECT Name, Salary, Birth
            FROM users 
            WHERE name = '$name' AND password = '$pwd'";

    $result = $conn->query($sql);

    if ($result) {
        // Print out the result
        while ($row = $result->fetch_assoc()) {
            printf("Name: %s -- Salary: %s --  Birth: %s\n",
             $row["Name"], $row["Salary"], $row["Birth"]);
        }
        $result->free();
    }
    $conn->close();
?>

