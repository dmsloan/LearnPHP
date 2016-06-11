<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Break</title>
    </head>
    <body>
        <h3>
        <?php
        For ($count=0; $count <= 10; $count++){
                if ($count == 5) { echo 'We are going to skip the five<br />';
                    break;
                }
            echo $count . "<br />";
            }
        ?>
        <br/>
        <br/>
        <?php
            //loop inside a loop with continue
            for($i=0; $i<=5; $i++){
                if($i % 2 == 0){ continue; }
                for($k=0; $k<=5; $k++){
                    if ($k==3) {break(2);}
                    echo $i."-".$k."<br />";
                }
            }
        ?>
        </h3>>
    </body>
</html>
