<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">

</head>

<body>

    <?php

    include 'db_connection.php';

    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        $sql = "SELECT id, userName, password FROM users WHERE username = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();

        if ($result->num_rows == 1) {
            if (password_verify($password, $user['password'])) {
                $_SESSION['userID'] = $user['id'];
                $_SESSION['userName'] = $user['userName'];
                setcookie('user_id', $user['id'], time() + 3600, '/');
                // Redirect to the dashboard or another page
                echo 'Login successfully'
                    . '<script>window.location = "index.php";</script>';
            } else {
                echo "Wrong password!";
            }

        } else {
            echo "Username not found!";
        }
    } else {
        echo "Invalid request.";
    }

    ?>

</body>

</html>