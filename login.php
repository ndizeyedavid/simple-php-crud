<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RDL - Login</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <div class="form-wrapper">
        <fieldset>
            <legend>Rwanda Driving License</legend>

            <form action="php/login.php" method="post">
                <div>
                    <label>Email: </label>
                    <input type="email" name="email">
                </div>

                <div>
                    <label>Password: </label>
                    <input type="password" name="pswd">
                </div>

                <input type="submit" id="submit" value="Login" name="login">

            </form>

        </fieldset>
    </div>
</body>

</html>