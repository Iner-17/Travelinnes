<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/register.css">
    <title>Travellines</title>
</head>
<body>
    <?php
    $userName = "";
    $email = "";
    $password = "";
    $cfrmpassword = "";
        if (empty($_POST["username"])) {
            $userName = "username is required!";
        }
        if (empty($_POST["password"])) {
            $password = "password is required!";
        }
        if (empty($_POST["cfrmpassword"])) {
            $cfrmpassword = "confirm password is required!";
        }
    ?>
    <div class="container">
        <form action="register.php" method="POST">
            <table>
                <h1>Travellines</h1>
                <h2>Register Here</h2>
                <tbody>                   
                    <tr>
                        <td colspan="2">
                            <input type="text" name="username" placeholder="username"> <br>
                            <span><?= $userName ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="email" name="email" placeholder="Email"><br>
                            <span><?= $email ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" name="password" placeholder="Password"><br>
                            <span><?= $password ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="password" name="cfrmpassword" placeholder="Confirm Password"><br>
                            <span><?= $cfrmpassword ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn">Sign up</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="login.php">You already have an account? Sign in</a></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    
</body>
</html>