<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>My Best CV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>

    <?php
    include "navbar.component.php";
    // Navigate to homepage
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }

    ?>






    <!-- Navigate to home when $_GET['page'] is not set -->
    <?php
    if (!isset($_GET['page'])) {
        header('Location: ?page=home');
        exit;
    }
    ?>

    <!-- Display the page content -->
    <?php
    $page = $_GET['page'];

    switch ($page) {
        case 'home':
            include 'HomePage.php';
            break;
        case 'about':
            include 'About.php';
            break;
        case 'info':
            include 'MyInfo.php';
            break;
        case 'candidate':
            include 'Candidate.php';
            break;
        case 'showCV':
            include 'ShowCV.php';
            break;
        case 'login':
            include 'Login.php';
            break;
        case 'logout':
            include 'Logout.php';
            break;
        default:
            include '404.php';
            break;
    }
    ?>

</body>

</html>