<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions: Default Argument Values</title>
    </head>
    <body>
        <?php
            function paint($room="office", $color="red"){
                return "The color of the {$room} is {$color}. <br/>";
            }
            echo paint (); // this uses the defaults, office and red
            echo paint ("bedroom"); // uses bedroom as the room and default red for color
            echo paint("kitchen", "yellow"); // works fine, changes both
            //echo paint(,"blue"); // this will not work, always list required arguments first
            
        ?>
    </body>
</html>
