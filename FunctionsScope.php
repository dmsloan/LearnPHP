<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions: Scope</title>
    </head>
    <body>
        <?php
        $bar = "outside";  // Global Scope
        
        function foo(){
            global $bar;    // this statement pulls in the global variable
            if (isset($bar)){
                echo "Foo: ". $bar . "<br />";
            }
            $bar = "inside";  // Local Scope
        }
        
        echo "1: " . $bar . "<br/>";
        foo();
        echo "2: " . $bar . "<br/>"; // this changes because we used 'global' in the function
        ?>
        
    </body>
</html>
