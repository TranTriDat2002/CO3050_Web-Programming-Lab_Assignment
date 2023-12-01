<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="p-3 m-0 border-0 bd-example m-0 border-0">

    <form id="loginForm" method="post">
        <div class="mb-3">
            <label for="InputUsername" class="form-label" >Username </label>
            <input id="username" type="text" class="form-control" name="username" required>
        </div>
        <div class="mb-3">
            <label for="InputPassword" class="form-label">Password</label>
            <input id="password" type="password" name="password" class="form-control" pattern=".{8,}"
                title="At least 8 character length" required>
        </div>
        <div id="result"></div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

    <!-- Check with server database -->
    <script>
        $(document).ready(function () {
            $("#loginForm").submit(function (e) {
                e.preventDefault();

                var username = $("#username").val();
                var password = $("#password").val();
                $.ajax({
                    type: "POST",
                    url: "login_processing.php",
                    data: {
                        username: username,
                        password: password
                    },
                    success: function (response) {
                        // Display the response on the page
                        $("#result").html(response);
                    }
                });
            });
        });
    </script>



</body>

</html>