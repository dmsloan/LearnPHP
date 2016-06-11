<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>urlencode</title>
    </head>
    <body>
        <?php
        $page = "William Shakespere";
        $quote = "To be or not to be";
        $link1 = "/bio/" . rawurlencode($page) . "quote=" . 
                urlencode($quote);
        echo $link1;
        
        echo "<br/>";
        
        $link2 = "/bio/" . urlencode($page) . "quote=" . 
                rawurlencode($quote);
        echo $link2;
        
        
        ?>
    </body>
</html>
