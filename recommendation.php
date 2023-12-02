<!DOCTYPE html>
<html>

<head>
    <title>User Gallery</title>
    <style>
        .user-card {
            margin-bottom: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>User Gallery</h1>
        <div class="row">
            <?php
            // Sample user data
            $users = [
                [
                    'image' => 'user1.jpg',
                    'name' => 'John Doe',
                    'field' => 'Web Development'
                ],
                [
                    'image' => 'user2.jpg',
                    'name' => 'Jane Smith',
                    'field' => 'Graphic Design'
                ],
                [
                    'image' => 'user3.jpg',
                    'name' => 'Mike Johnson',
                    'field' => 'Mobile App Development'
                ]
            ];

            // Loop through users and display user cards
            foreach ($users as $user) {
                ?>
                <div class="col-md-4">
                    <div class="card user-card">
                        <img src="<?php echo $user['image']; ?>" class="card-img-top" alt="User Image">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo $user['name']; ?>
                            </h5>
                            <p class="card-text">
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