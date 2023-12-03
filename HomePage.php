<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <div class="container-fluid text-center">

        <div class="container px-3" style="margin-top: 50px; margin-bottom: 10px;">
            <div class="row">
                <div class="col-lg-6 p-2"><img class="avatar img-fluid mt-2 avatar-display" src="assets\img\avatar.svg"
                        width="400" height="400" />
                </div>

                <div class="col-lg-6">
                    <div class="mt-5">
                        <br>
                        <br>
                        <h1 class="intro-title marker" data-aos="fade-left" data-aos-delay="50">Welcome to
                            My Best CV!</h1>
                        <p class="lead text-uppercase mb-1">Find your best employees now!</p>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
    <div class="container">
        <h2 style="text-align: center; margin-bottom: 20px;">You may like</h2>
        <div class="row">
            <?php
            // Sample user data
            $users = [
                [
                    'image' => 'assets\img\tangtuandat.jpg',
                    'name' => 'Tăng Tuấn Đạt',
                    'field' => 'PDF Generate',
                    'link' => '?page=showCV&id=1'
                ],
                [
                    'image' => 'assets\img\trantridat.jpg',
                    'name' => 'Trần Trí Đạt',
                    'field' => 'Database Design',
                    'link' => '?page=showCV&id=2'
                ],
                [
                    'image' => 'assets\img\nguyenphantriduc.jpg',
                    'name' => 'Nguyễn Phan Trí Đức',
                    'field' => 'Front-end Design',
                    'link' => '?page=showCV&id=3'
                ],
                [
                    'image' => 'assets\img\nguyenchihieu.jpg',
                    'name' => 'Nguyễn Chí Hiếu',
                    'field' => 'PDF Design',
                    'link' => '?page=showCV&id=4'
                ]
            ];

            // Loop through users and display user cards
            foreach ($users as $user) {
                ?>



                <div class="col-md-3">
                    <div class="card text-center"
                        style="border-style: solid; border-width: 1px; border-radius: 4%; margin-bottom: 14px;">
                        <div style="display: flex; justify-content: center;">
                            <img class="card-img-top" style="border-radius: 5%;" src="<?php echo $user['image']; ?>"
                                alt="Card image cap">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title" style="text-align: center;">
                                <?php echo $user['name']; ?>
                            </h3>
                            <h5 class="card-text" style="text-align: center;">
                                <?php echo $user['field']; ?>
                            </h5>
                            <a href="<?php echo $user['link']; ?>" class="btn btn-primary" style="align-self: center; margin-bottom: 14px;">View</a>
                        </div>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
    <footer class="pt-4 pb-4 text-center bg-light" style=" margin-bottom: 20px;">
        <div class="container">
            <div class="" style="margin-top: 50px;">
                <h4>My Best CV</h4>
                <p>Web Programming Assignment</p>

            </div>
            <div class="text-small text-secondary">
                <div class="mb-1">&copy; MyBestCV. All rights reserved.</div>
            </div>
        </div>
    </footer>
</body>


</html>