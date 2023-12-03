<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container-fluid text-center">
        <div class="row content">
            <div class="col-sm-2 sidenav">
            </div>
            <div class="col-sm-8 text-left">
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
    <div class="container">
        <h2 style="text-align: center;">You may like</h2>
        <div class="row">
            <?php
            // Sample user data
            $users = [
                [
                    'image' => 'assets\img\female1.jpg',
                    'name' => 'John Doe',
                    'field' => 'Web Development'
                ],
                [
                    'image' => 'assets\img\female2.jpg',
                    'name' => 'Jane Smith',
                    'field' => 'Graphic Design'
                ],
                [
                    'image' => 'assets\img\female3.jpg',
                    'name' => 'Mike Johnson',
                    'field' => 'Mobile App Development'
                ]
            ];

            // Loop through users and display user cards
            foreach ($users as $user) {
                ?>
                <div class="col-md-4">
                    <div class="card user-card">
                        <div style="display: flex; justify-content: center;">
                            <img src="<?php echo $user['image']; ?>" class="card-img-top" alt="User Image" >
                        </div>
                        <div class="card-body">
                            <h5 class="card-title" style="text-align: center;">
                                <?php echo $user['name']; ?>
                            </h5>
                            <p class="card-text" style="text-align: center;">
                                <?php echo $user['field']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>

</body>


</html>