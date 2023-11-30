<!DOCTYPE html>
<html>

<head>
    <title>Search Page</title>

</head>

<body>
    <div class="container">
        <h2>Search for cv template</h2>
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
        <!-- Display templates as gallery -->
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="cv-template">
                        <img class="template-image" src="./assets/img/template1.webp" alt="Template 1">
                        <h3>Template 1</h3>
                        <p>Description of Template 1</p>
                        <a href="template1.pdf" class="btn btn-primary">Use this template</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cv-template">
                        <img class="template-image" src="./assets/img/template2.jpg" alt="Template 2">
                        <h3>Template 2</h3>
                        <p>Description of Template 2</p>
                        <a href="template2.pdf" class="btn btn-primary">Use this template</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cv-template">
                        <img class="template-image" src="./assets/img/template3.jpg" alt="Template 3">
                        <h3>Template 3</h3>
                        <p>Description of Template 3</p>
                        <a href="template3.pdf" class="btn btn-primary">Use this template</a>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="cv-template">
                        <img class="template-image" src="./assets/img/template1.webp" alt="Template 1">
                        <h3>Template 1</h3>
                        <p>Description of Template 1</p>
                        <a href="template1.pdf" class="btn btn-primary">Use this template</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cv-template">
                        <img class="template-image" src="./assets/img/template2.jpg" alt="Template 2">
                        <h3>Template 2</h3>
                        <p>Description of Template 2</p>
                        <a href="template2.pdf" class="btn btn-primary">Use this template</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="cv-template">
                        <img class="template-image" src="./assets/img/template3.jpg" alt="Template 3">
                        <h3>Template 3</h3>
                        <p>Description of Template 3</p>
                        <a href="template3.pdf" class="btn btn-primary">Use this template</a>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <script>
        $(document).ready(function () {
            // Filter and search functionality
            $('#searchInput').on('keyup', function () {
                var filter = $('#filterSelect').val().toLowerCase();
                var value = $(this).val().toLowerCase();
                $('#studentTable tr').filter(function () {
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