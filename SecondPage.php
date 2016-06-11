<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Second Page</title>
    </head>
    <body>
        <h3>
        <?php $LinkName="First Page"; ?>
        <a href="FirstPage.php?id=<?php echo 2;?>"><?php echo $LinkName; ?></a>
        </h3>
        <br />
        <pre>
        <?php
        //print_r($_GET);
        $test= $_GET['company'];
        echo $test;
        echo '<br /><br />';
        $id = $_GET['id'];
        echo $id;
        ?>
        </pre>
    </body>
</html>
