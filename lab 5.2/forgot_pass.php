<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot password</title>
</head>
<body>
    <?php
        // PHP code for dynamic content
        $currentYear = date("Y");
    ?>

    <table border="1" cellspacing="0" width="500px" align="center">
        <tr height="100px">
            <td style="border-right: none;">
                <img src="1.png" alt="">
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
                    <form method="post" action="1.php"enctype = "">
                        <fieldset>
                            <legend><b>FORGOT PASSWORD</b></legend>
                           
                                   Enter Email: <input type="text" name="Email" value="" /> <br><hr>                    
                                    <input type="submit" name="" value="Submit" /><br>
                        </fieldset>
                    </form>
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
