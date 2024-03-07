<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>

    <table border="1" cellspacing="0" width="500px" align="center">
        <tr height="100px">
            <td style="border-right: none;">
                <img src="../Asset/1.png" alt="">
            </td>
            <td align="right" style="border-left: none;">
                <a href="public_home.php">Home</a> |
                <a href="login.php">Login</a> |
                <a href="reg.php">Registration</a>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <form method="post" action="1.php" enctype="">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>

                        <table>
                            <tr>
                                <td>Name:</td>
                                <td><input type="text" name="name" /><hr></td>
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td><input type="text" name="Email" />[i]<hr></td>
                            </tr>
                            <tr>
                                <td>Username:</td>
                                <td><input type="text" name="Username" /><hr></td>
                            </tr>
                            <tr>
                                <td>Password:</td>
                                <td><input type="password" name="Password" /><hr></td>
                            </tr>
                            <tr>
                                <td>Confirm Password:</td>
                                <td><input type="password" name="Confirm Password" /><hr></td>
                            </tr>
                        </table>

                        <fieldset>
                            <legend><b>GENDER</b></legend>
                            <input type="radio" name="gender" value="" /> Male
                            <input type="radio" name="gender" value="" /> Female
                            <input type="radio" name="gender" value="" /> Other
                        </fieldset>

                        <fieldset>
                            <legend><b>DATE OF BIRTH</b></legend>
                            <input type="date" name="" value="" />
                        </fieldset>

                        <br>
                        <input type="submit" name="" value="Submit" />
                        <input type="button" name="" value="Reset" />
                    </fieldset>
                </form>
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center" height="25px">
                Copyright &copy; <?php echo $currentYear; ?>
            </td>
        </tr>
    </table>
</body>
</html>
