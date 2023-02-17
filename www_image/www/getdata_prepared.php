<?php
    $name = $_GET['Name'];
    $pwd = $_GET['Password'];

    $conn = new mysqli("127.0.0.1", "root", "uwe", "uwe");
    $sql = "SELECT Name, Salary, Birth
            FROM users 
            WHERE name = ? AND password = ?";           # ? = Placeholders

    if ($stmt = $conn->prepare($sql)) {                 # Send the code
        $stmt->bind_param("ss", $name, $pwd);           # Send the data
        $stmt->execute();                               # Execute

        $stmt->bind_result($name, $salary, $birth);
        while ($stmt->fetch()) {
            printf("%s %s %s\n, $name, $salary, $birth");
        }
    }

    $conn->close();
?>

