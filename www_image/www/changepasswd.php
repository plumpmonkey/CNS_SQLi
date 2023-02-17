/* changepasswd.php */
<?php
    $name = $_POST['Name'];
    $oldpwd = $_POST['OldPassword'];
    $newpwd = $_POST['NewPassword'];

    $conn = new mysqli("127.0.0.1", "root", "uwe", "uwe");
    $sql = "UPDATE employee 
            SET password = '$newpwd'
            WHERE name = '$name' AND password = '$oldpwd'";

    $result = $conn->query($sql);
    $conn->close();
?>
