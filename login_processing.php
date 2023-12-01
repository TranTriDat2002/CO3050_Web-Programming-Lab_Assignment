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
        $password = hash('md5', $_POST["password"]);

        // Check password in correct form
        if (strlen($_POST["password"]) < 8) {
            echo "Password must be at least 8 characters";
            exit();
        }

        $sql = "SELECT user_ID, userName FROM users WHERE username = '$username' AND password = '$password'";
        // SQL Injection!!!
    
        $result = $conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['userName'] = $row['userName'];

            setcookie('user_id', $row['userID'], time() + 3600, '/');
            // Redirect to the dashboard or another page
            echo 'Login successfully'
                . '<script>window.location = "/web_lab/lab3/?page=home";</script>';
        } else {
            echo "Incorrect username or password!";
        }
    } else {
        echo "Invalid request.";
    }

    ?>

</body>

</html>