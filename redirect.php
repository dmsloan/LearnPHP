<?php

// This is how you redirect to a new page
function redirect_to($neW_location) {
    header("Location: " . $neW_location);
    exit;
}

$logged_in = $_GET['logged_in'];
if ($logged_in == "1") {
    redirect_to("xampindex.php");
} else {
    redirect_to("http://www.ibe-inc.com");
}

header("HTTP 1.1/ 404 not found");
//header("X-Powered-By: none of your business"); // this removes the php version from the header
?><!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Redirect</title>
    </head>
    <body>
        <pre>
            <?php
            //this wont work    header("HTTP 1.1/ 404 not found");
            print_r(headers_list()); //use print_r to return an array
            ?>
        </pre>
    </body>
</html>
