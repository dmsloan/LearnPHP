<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Constants</title>
    </head>
    <body>
        <?php
            $max_width = 980;
            
            define("MAX_WIDTH", 980);
            echo MAX_WIDTH;
        ?>
        <br />
        <?php // can't change the value of a constant
//        MAX_WIDTH += 1;
        echo MAX_WIDTH;
        ?>
        
    </body>
</html>
