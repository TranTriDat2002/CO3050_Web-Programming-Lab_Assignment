<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <!-- Home page with a search bar -->
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
                <!-- Left side bar -->
            </div>
            <div class="col-sm-8 text-left">
                <!-- Main content -->
                <h1>Welcome to Find My CV</h1>
                <p>Search for potential employees now!</p>
                <form action="?page=search" method="post">
                    <div class="input-group">
                        <input type="text" class="form-control" name="search" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="submit" name="submit">Search</button>
                        </span>
                    </div>
                </form>
            </div>
        </div>
    </div>


</body>


</html>