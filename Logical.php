<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Logical</title>
    </head>
    <body>
        <?php
            $a=3;
            $b=5;
            
            if ($a > $b) {
                echo $a." is larger than ".$b;
            } elseif ($a < $b) {
                echo $b." is larger than ".$a;
            } else {
                echo $a." is equal to ".$b;
            }
        ?>
        <br />
        <?php // Only welcome new users
            $new_user = true;
            if($new_user) {
                echo "<h1>Welcome!</h1>";
                echo "<p>We are glad you decided to join us.</p>";
            }
        ?>
    </body>
</html>
