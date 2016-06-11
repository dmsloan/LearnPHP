<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Booleans</title>
    </head>
    <body>
        <?php
        $result1 = true;
        $result2 = false;
        // put your code here
        ?>
        Result1: <?php echo $result1; ?><br /><br />
        Result2: <?php echo $result2; ?><br />

        <?php
        if (is_bool($result2)) {
            echo "Result2 is a boolean <br /><br />";
        }
        ?>
        Is result 2 boolean? <?php echo is_bool($result2) ?>
        <br />
        <br />
        <?php
        $number = 3.14;
        if (is_float($number)) {
            echo " test 12 it is a float.";
        }
        ?>
    </body>
</html>
