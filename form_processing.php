<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Processing</title>
    </head>
    <body>
        <pre>
            <?php
            if (isset($_POST['submitPost'])){
                print_r($_POST);
            }
            ?>
        </pre>

        <br />
        <?php
            echo "The following is Post without the pre tags";
            if (isset($_POST['submitPost'])){
                print_r($_POST);
            }
        ?>
        <br/>

        <br />
        The following is "Get"
        <?php
        print_r($_GET);
        ?>
        <pre>
            <?php
            print_r($_GET);
            ?>
        </pre>

        <?php
        $username = $_POST["username"];
        $password = $_POST["password"];
        echo "<br/><br/>";
        echo"Username: " . "{$username}" . "<br/>" . "Password: " . "{$password}";
        ?>
    </body>
</html>
