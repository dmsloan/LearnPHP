<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions: Arguments</title>
    </head>
    <body>
        <?php
        function say_hello_to($word){
            echo "Hello {$word}! <br /><br /> ";
        }
        $name = "John Doe";
        say_hello_to($name);
    
        function better_hello($greeting, $target, $punct){
            echo $greeting. " " . $target. $punct . "<br/>";
        }
        better_hello("Yo", $name, "!");
        better_hello("Greetings", $name, Null); // must provide three arguments
        ?>
    </body>
</html>
