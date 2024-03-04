<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>

    

    <table border="1" cellspacing="0" width="100%">
        <tr height="100px"> 
            <td>xcompany</td>
            <td align="right">
                <a href="http://localhost/lab1/firstpage.html">home</a>|
                <a href="http://localhost/lab1/sec_page.html">login</a>|
                <a href="http://localhost/lab1/sec_page.html">registration</a>
            </td>
        </tr>

        <tr>
            <td align="left" colspan="2">
                <form method="post" action="1.php"enctype = "">
                    <fieldset>
                        <legend><b>REGISTRATION</b></legend>
                        
                               NAME:                    <input type="text" name="name" value="" /> <br><hr>
                               Email:                   <input type="text" name="Email" value="" /> <br><hr>
                               Username:                <input type="text" name="Username" value="" /> <br><hr>
                               Password:                <input type="text" name="Password" value="" /> <br><hr>
                               Confirm Password:        <input type="text" name="Confirm Password" value="" /> <br><hr>
                             <fieldset> 
                               <legend><b>GENDER</b></legend>
                                                        <input type="radio" name="gender" value="" /> Male
                                                        <input type="radio" name="gender" value="" /> Female
                                                        <input type="radio" name="gender" value="" /> Other <br><hr>
                            </fieldset> 
                            <fieldset>
                               <legend><b>DATE OF BIRTH</b></legend>
                                                        <input type="date" name="" value="" /> <br><hr>
                           </fieldset>                           
                                                       <br><input type="submit" name="" value="Submit" /><t><input type="button" name="" value="Reset" />
                    </fieldset>
                </form>
            </td>
        </tr>

        <tr >
            <td colspan="2" align="center">
                copyright@2017
            </td>
            
        </tr>
    
    </table>
</body>
</html>