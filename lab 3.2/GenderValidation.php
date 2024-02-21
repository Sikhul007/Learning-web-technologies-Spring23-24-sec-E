<html>
<head>
    <title>Gender Form</title>
</head>
<body>
    <form method="post">
        <fieldset style="width: 200px">
            <legend>GENDER</legend>

            <input type="radio" name="gender" value="male"> Male
            <input type="radio" name="gender" value="female"> Female
            <input type="radio" name="gender" value="other"> Other

            <hr>
            <input type="submit" name="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>

<?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') 
        $gender = $_REQUEST['gender'];

        if (!empty($selectedGender)) 
		{
            header("Location: DegreeValidation.php");
            exit();
        } 
		else 
		{
            echo "Please select a gender.";
        }
    
?>