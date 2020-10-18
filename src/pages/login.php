<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    <title>Travellines</title>
</head>
<body>
    
        
    <div class="container">
        <form action="login.php" method="POST">
            <table>
                <h1>Travellines</h1>
                <h2>Login Here</h2>
                <tbody>
                    <tr>
                        <td colspan="1"><input type="text" name="username" placeholder="username or email" required></td>
                        <?php
                            $username = $_POST["username"];
                            $errorMessage = "";
                            if (strlen($username) < 4) {
                                $errorMessage = "Username must be 4 char or above";
                            }
                        ?>
                         * <?php echo $errorMessage ?> *
                    </tr>
                    <tr>
                        <td colspan="1"><input type="password" name="password" placeholder="Password" required></td>
                    </tr>
                    <tr>
                        <td colspan="1"><button class="btn">Login</button></td>
                    </tr>
                    <tr>
                        <td colspan="1"><a href="#">Forgot Password?</a></td>
                    </tr>
                </tbody>
            </table>
        </form>
        
    </div>
</body>
</html>