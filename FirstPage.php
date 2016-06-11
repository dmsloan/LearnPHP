<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>First Page</title>
    </head>
    <body>
        <?php $LinkName="Second Page";
        $id = 52;?>
        <?php $company = "Jonhson & Johnson";?>
        <a href="SecondPage.php?id=<?php echo $id;?>&company=<?php echo urlencode($company); ?>"><?php echo $LinkName." urlencode"; ?><br/></a>
        <a href="SecondPage.php?id=<?php echo $id;?>&company=<?php echo rawurlencode($company); ?>"><?php echo $LinkName." rawurlencode"; ?></a>
        <br /><br />Id=<?php echo $id;?>
    </body>
</html>
