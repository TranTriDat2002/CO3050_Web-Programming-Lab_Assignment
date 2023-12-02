<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body class="bg-light">

    <div class="container">

        <h2 class="text-center mb-4 resize-width">Login</h2>

        <form id="loginForm" method="post">
            <div class="form-group resize-width">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>
            <div class="form-group resize-width">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password"
                    title="At least 8 characters" required>
            </div>
            <div id="result" class="mb-3"></div>
            <button type="submit" class="btn btn-primary btn-block resize-width">Submit</button>
        </form>

    </div>

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