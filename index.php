<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Find My CV</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */
        .navbar {
            margin-bottom: 0;
            border-radius: 0;
        }

        /* Add a gray background color and some padding to the footer */
        footer {
            background-color: #f2f2f2;
            padding: 25px;
        }
    </style>
</head>

<body>

    <?php
    // Create database
    include 'createDB.php';
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 'home';
    }

    ?>

    <?php
    // Check if the current page is active
    function isActive($pageName)
    {
        $currentPage = $_GET['page'];
        return ($currentPage === $pageName) ? 'active' : '';
    }
    ?>

    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="?page=home">Find My CV</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="<?php echo isActive('home'); ?>"><a href="?page=home">Home</a></li>
                    <li class="<?php echo isActive('search'); ?>"><a href="?page=search">Search</a></li>
                    <li class="<?php echo isActive('display'); ?>"><a href="?page=display">Display</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <?php
                    // Display user name if set
                    if (isset($_SESSION['userName'])) {
                        echo '<li><a href="?page=home"><span class="glyphicon glyphicon-user"></span> ' . $_SESSION['userName'] . '</a></li>';
                    }
                    // Display user level if set
                    if (isset($_SESSION['userLevel'])) {
                        echo '<li><a href="?page=home"><span class=""></span> ' . 'Level: ' . $_SESSION['userLevel'] . '</a></li>';
                    }
                    ?>
                    <?php if (isset($_SESSION['userName'])) {
                        echo '<li><a href="?page=logout"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>';
                    } else {
                        echo '<li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>';
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>

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
        case 'search':
            include 'SearchPage.php';
            break;
        case 'display':
            include 'DisplayPage.php';
            break;
        default:
            include '404.php';
            break;
    }
    ?>

</body>

</html>