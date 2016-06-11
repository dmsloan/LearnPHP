<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Type Juggling and Type Casing</title>
    </head>
    
    <h1>Type Juggling<br /></h1>
    <body>
        <?php $count="2 cats";?>
        <?php echo $count; ?><br />
        Type: <?php echo gettype($count);?> <br /><br />
                
        <?php $count += 3; ?> <br />
        <?php echo $count; ?><br />
        Type: <?php echo gettype($count);?> <br /><br />
        
        <?php $cats="I have " . $count . " cats."; ?>
        <?php echo $cats; ?> <br />
        Cats: <?php echo gettype($cats); ?><br />
        <br />
        Type Casting:<br />
        <?php settype($count, "integer"); ?>
        count: <?php echo gettype($count);?> <br />
        
        <?php $count2 = (string) $count; ?>
        count: <?php echo gettype($count);?> <br />
        count2: <?php echo gettype($count2);?> <br />
        
        <?php $test1 = 3; ?>
        <?php $test2 = 3; ?>
        <?php settype($test1, "string"); ?>
        <?php (string) $test2; ?>
        Test 1: <?php echo gettype($test1);?> <br />
        Test 2: <?php echo gettype($test2);?> <br />
            
    </body>
</html>
