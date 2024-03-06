<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
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
                Logged in as <a href="view_profile.php">Bob</a> |
                <a href="logout.php">Logout</a> 
            </td>
        </tr>

        <th align="left" style="padding: 10px;">
        Account<br><hr>
            <ul>
                <li><a href="dash_board.php">Dashboard</a></li>
                <li><a href="view_profile.php">View profile</a></li>
                <li><a href="edit_profile.php">Edit Profile</a><br></li>
                <li><a href="change_pp.php">Change Profile Picture</a><br></li>
                <li><a href="change_pass.php">Change Password</a><br></li>
                <li><a href="logout.php">Logout</a><br></li> 
            </ul>
        </th>

        <td style="vertical-align: top;">
            <p style="padding-left: 10px;"><b>Welcome Bob</b></p>
        </td>        
        <tr>
            <td colspan="2" align="center" height="25px">
                Copyright &copy; <?php echo $currentYear; ?>
            </td>
        </tr>
    
    </table>

</body>
</html>
