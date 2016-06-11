<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions Defining</title>
    </head>
    <body>
        <?php
            
        function say_hello(){
            echo "Say Hello <br /> ";
        }

        say_hello();


        function say_hello_to($word){
            echo "Hello {$word}! <br /><br /> ";
        }
        
        $boys = array("Ralph","Sam");
        while ($boy=current($boys)){
            say_hello_to($boy);
            next($boys);
        }
        ?>
        
    </body>
</html>
