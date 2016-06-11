<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Functions: Multiple Returns</title>
    </head>
    <body>
        <?php

        function add_subt($val1, $val2) {
            $add = $val1 + $val2;
            $subt = $val1 - $val2;
            return array($add, $subt);
        }

        $result_array = add_subt(10, 5);

        echo "Add: " . $result_array[0] . "<br />";
        echo "Subt: " . $result_array[1] . "<br />";
        echo "<br />";

        list($add_result, $subt_result) = add_subt(20, 7);

        echo "Add: " . $add_result . "<br />";
        echo "Subt: " . $subt_result . "<br />";
        echo "<br />";


        while ($result = current($result_array)) {
            echo $result . ", ";
            next($result_array);
        }
        ?>
    </body>
</html>
