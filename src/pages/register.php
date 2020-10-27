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
        $fnameError = "";
        $fname = $_POST["fname"];
        if (empty($fname)) {
            $fnameError = "Please enter a valid input";
        }
        $lnameError = "";
        $lname = $_POST["lname"];
        if (empty($lname)) {
            $lnameError = "Please enter a valid input";
        }
    ?>
    <div class="container">
        <form action="register.php" method="POST">
            <table>
                <h1>Travellines</h1>
                <h2>Register Here</h2>
                <tbody>
                    <tr>
                        <td>
                            <input type="text" name="fname" placeholder="Firstname"> <br>
                            <span><?php echo $fnameError ?></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                        <input type="text" name="lname" placeholder="Lastname"> <br>
                        <span><?php echo $lnameError ?></span>
                    </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2"><input type="text" name="username" placeholder="username"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="email" name="email" placeholder="Email"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="password" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><input type="password" name="cfrmpassword" placeholder="Confirm Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2"><button class="btn">Sign up</button></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="login.php">Already have an account? Sign in</a></td>
                    </tr>
                </tbody>
            </table>
        </form>
    </div>
    
</body>
</html>