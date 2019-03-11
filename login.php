<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body{
            background-color:#1abc9c;
            font-family:"Trebuchet MS";
        }
        div.login_form{
            width : 70%;
            margin: 5px auto;
        }

        form{
            margin-top:100px;
        }
    </style>
</head>
<body>
    
    <div class="login_form">
        <form align="center" action="login_proses.php" method="POST">

            <input type="text" placeholder="Username" name="username"><br>
            <input type="Password" placeholder="Password" name="password"><br>
            <input type="submit" value="Login">
        </form>
    </div>

</body>
</html>