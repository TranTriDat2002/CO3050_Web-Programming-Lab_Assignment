
<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <style>
        .avatar {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            overflow: hidden; /* Ensures the image is clipped to the rounded shape */
        }
        .flex-container {
            display: flex;
            align-items: stretch;
            background-color: #f1f1f1;
        }
        .candidate-name {
            font-weight: bold;
        }
        .flex-container > div {
            margin: 10px;
            text-align: center;
            /* line-height: 75px; */
            font-size: 15px;

            justify-content: center; /* Center content horizontally */
            align-items: center; /* Center content vertically */
        }
    </style>
    <script>
        $(document).ready(() => {

            $('#searchInput').on('input', function () {
                var searchValue = $(this).val().toLowerCase();
                filterTable(searchValue);
            });

            // Function to filter the table based on search value
            function filterTable(searchValue) {
                $('.table tbody tr').each(function () {
                    var name = $(this).find('td:nth-child(1)').text().toLowerCase();
                    if (name.includes(searchValue)) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                });
            }
        });
    </script>
</head>
<body>
    <div class="container">
        <h2>Search</h2>
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            </div>
            <!-- <div class="col-md-6">
                <select class="form-control" id="filterSelect">
                    <option value="all">All</option>
                    <option value="name">Name</option>
                    <option value="email">Age</option>
                </select>
            </div> -->
        </div>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th colspan='2' style="font-size: 30px">Candidates</th>
                </tr>
            </thead>
            <tbody id="searchTable">
                <?php
                require_once('database/db_connection.php');

                // Fetch and display user information
                $sql = "SELECT * FROM users";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $id = $row['id'];
                        $sql = "SELECT * FROM `resume` WHERE user_id = $id";
                        $res = $conn->query($sql);
                        $salary = "";
                        $position = "";
                        if (mysqli_num_rows($res) > 0) {
                            while ($r = $res->fetch_assoc()) {
                                $salary = number_format($r['desire_salary']) . '.000.000 VND <i class="bi bi-cash"></i>';
                                $position = $r['position'] . ' (' . $r['employment_type'] . ')';
                            }
                        }

                        $imgPath = preg_replace('/^uploads\//', 'assets/img/', $row['avatar']);

                        echo "<tr>";

                        echo "<td>";
                            echo "<div class=\"flex-container\">";
                                echo "<div>";
                                    echo "<img class=\"avatar\" src='" . $imgPath . "' alt='User Photo'>";  
                                echo "</div>";

                                echo "<div style=\"width: 200px;\">";
                                    echo "<div class=\"candidate-name\">" . $row['firstname'] . " " . $row['lastname'] . "</div>";
                                    echo "<br>";
                                    echo $row['email'];
                                echo "</div>";

                                echo "<div style=\"width: 600px;\">";
                                    echo "<div class=\"candidate-name\">" . $position . "</div>";
                                    echo "<br>";
                                    echo "Desired: ";
                                    echo $salary;
                                echo "</div>";

                            echo "</div>";
                        echo "</td>";

                        echo "<td><a href=\"?page=showCV&id=". $row['id'] ." \" type=\"button\" class=\"btn btn-info\" role=\"button\">View CV</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='2'>No users found</td></tr>";
                }

                $conn->close();
                ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            // Filter and search functionality
            $('#searchInput').on('keyup', function() {
                var filter = $('#filterSelect').val().toLowerCase();
                var value = $(this).val().toLowerCase();
                $('#studentTable tr').filter(function() {
                    if (filter === 'all') {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    } else {
                        $(this).toggle($(this).find('td:nth-child(' + (filter === 'name' ? 1 : filter === 'age' ? 2 : 3) + ')').text().toLowerCase().indexOf(value) > -1)
                    }
                });
            });
        });
    </script>
</body>
</html>
