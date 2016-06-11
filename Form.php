<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form</title>
    </head>
    <body>
        <form action="form_processing.php" method="post">
            Username: <input type="text" name="username" value="DerekPost" /><br />
            Password: <input type="password" name="password" value="PasswordPost" /><br />
            <br />
            <input type="submit" name="submitPost" value="Submit Post" />
            <br/><br/><br/><br/>
        </form>

        <form action="form_processing.php" method="get">
            Username: <input type="text" name="usernameGet" value="DerekGet" /><br />
            Password: <input type="password" name="passwordGet" value="PasswordGet" /><br />
            <br />
            <input type="submit" name="submitGet" value="Submit Get" />
        </form>
        <?php
        // put your code here
        ?>
    </body>
</html>
