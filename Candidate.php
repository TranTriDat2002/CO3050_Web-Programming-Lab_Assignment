
<!DOCTYPE html>
<html>
<head>
    <title>Search Page</title>
</head>
<body>
    <div class="container">
        <h2>Search</h2>
        <div class="row">
            <div class="col-md-6">
                <input type="text" class="form-control" id="searchInput" placeholder="Search...">
            </div>
            <div class="col-md-6">
                <select class="form-control" id="filterSelect">
                    <option value="all">All</option>
                    <option value="name">Name</option>
                    <option value="age">Age</option>
                    <option value="grade">Grade</option>
                </select>
            </div>
        </div>
        <br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Photo</th>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Field</th>
                </tr>
            </thead>
            <tbody id="searchTable">
                <!-- PHP code to fetch and display user information from database -->
                <?php
                // BEGIN: PHP code to fetch and display user information from database
                // Your code here
                // END: PHP code to fetch and display user information from database
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