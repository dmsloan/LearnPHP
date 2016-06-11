<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Comparison and Logical Operators</title>
    </head>
    <body>
        <?php
            $a=4;
            $b=3;
            $c=2;
            $d=20;
            
            if (($a > $b) && ($c>$d)){
                echo $a." is larger than ".$b ." AND ";
                echo $c." is larger than ".$d;
            } elseif (($a > $b) || ($c>$d)){
                echo $a." is larger than ".$b ." OR ";
                echo $c." is larger than ".$d;
            } else {
                echo " Something else ";
            }
        ?>
        <br />
        <br />
        <?php
            $e = 100;
            if (!isset($e)){
                $e = 200;
            }
            echo $e;
        ?>
        
        <br />
        <br />
        <?php
        // con't reject 0 or 0.0
        $quantity = "";
        if (empty($quanity) &&!is_numeric($quantity)){
            echo "You must enter a quantity.";
        }
        ?>
            
        <?php // Only welcome new users
/*            $new_user = true;
            if($new_user) {
                echo "<h1>Welcome!</h1>";
                echo "<p>We are glad you decided to join us.</p>";
            }
*/        ?>

    </body>
</html>
