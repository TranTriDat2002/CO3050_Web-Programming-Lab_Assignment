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
            <a class="navbar-brand" href="?page=home">My Best CV</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
                <li class="<?php echo isActive('home'); ?>"><a href="?page=home">Home</a></li>
                <li class="<?php echo isActive('about'); ?>"><a href="?page=about">About</a></li>
                <li class="<?php echo isActive('candidate'); ?>"><a href="?page=candidate">Candidate</a></li>

                <?php
                // Display My Info if user logged in set
                if (isset($_SESSION['userID'])) {
                    echo "<li class=\"". isActive('info') ."\"><a href=\"?page=info\">My Info</a></li>";
                }
                ?>
                <?php
                // Display Show CV if choosen
                if (isActive('showCV')) {
                    echo "<li class=\"active\"><a href=\"?page=showCV\">Show CV</a></li>";
                }
                ?>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <?php
                // Display user name if set
                if (isset($_SESSION['userName'])) {
                    echo '<li><a href="?page=info"><span class="glyphicon glyphicon-user"></span> ' . $_SESSION['userName'] . '</a></li>';
                }
                ?>
                <!-- Display login/logout button -->
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