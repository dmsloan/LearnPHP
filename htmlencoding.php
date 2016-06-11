<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>html encoding</title>
    </head>
    <body>
        <?php
        $linktext = "<Click> & learn more";
        ?>
        <a href="">
            <?php echo htmlspecialchars($linktext); ?>
        </a>

        <br/>

        <?php
        $text = "♂♀ ♫ ╝ ± ñ ñ £";
        echo htmlentities($text);
        ?>

        <?php
        $urlPage = "php/created/page/url.php";
        $param1 = "This is a string with < >";
        $param2 = "&#?*$[]+ are bad characters";

        $url = "http://Localhost/";
        $url .= rawurlencode($urlPage);
        $url .= "?" . "param1=" . urlencode($param1);
        $url .= "&" . "param2=" . urlencode($param2);
        ?>

        <a href="<?php echo htmlspecialchars($url); ?>">
            <?php echo htmlspecialchars($linktext); ?>
        </a>

    </body>
</html>
