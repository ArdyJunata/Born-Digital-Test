<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Login</title>
</head>

<body>
    <h3>Login</h3>
    Username :
    <input name="username" id="username" type="text">
    <br>
    Password :
    <input name="password" id="password" type="text">
    <br>
    <button id="btnLogin">Login</button>
    <br>
    <span id="message"></span>
</body>
<script src="https://code.jquery.com/jquery-3.6.1.js" integrity="sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=" crossorigin="anonymous"></script>

<script>
    $("#btnLogin").click(() => {
        let username = $("#username").val().trim();
        let password = $("#password").val().trim();
        $.ajax({
            url: 'loginCheck.php',
            type: 'post',
            data: {
                username: username,
                password: password
            },
            success: function(response) {
                var msg = "";
                if (response == 1) {
                    window.location = "home.php";
                } else {
                    msg = "Invalid Login!";
                }
                $("#message").html(msg);
            }
        });
    })
</script>

</html>