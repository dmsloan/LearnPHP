<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pointers</title>
    </head>
    <body>
        <?php
        $name="Ralph";
        $ages = array(4,8,16,23,42);
        
        // current: current pointer value
        echo "1: " . current($ages) . "<br />";
        
        //next: move the pointer forward
        // similar to using 'continue' inside a loop
        next($ages);
        echo "2: " . current($ages) . "<br />";
        next($ages);
        next($ages);
        echo "3: " . current($ages) . "<br />";
        
        // prev: move th pointer backward
        prev($ages);
        echo "4: " . current($ages) . "<br />";
        
        // reset: move the pointer to the first element
        reset($ages);
        echo "5: " . current($ages) . "<br />";
        
        // end: move the pointer to the last elemet
        end($ages);
        echo "6: " . current($ages) . "<br />";
        
        // move the pointer past the last element
        next($ages);
        echo "7: " . current($ages) . "<br />";
        
        
        ?>
        <br />
        <br />
        
        <?php
        //while loop that moves the array pointer
        // similar to foreach
        reset($ages);
        while ($age = current($ages)){
            echo $age . ", ";
            next($ages);
        }
        ?>
    </body>
</html>
