<html lang="en">
 <head>
    <title> Loops: For </title>
 </head>
 <body>
    <?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$count =0;
while ($count<=10){
    if ($count%2==0) {
        echo $count . " Even, ";
    }
    else{
        echo $count . ", ";
    }
    $count +=1; // increment by 1
}
echo "<br/>";
echo "Count: {$count}";

For($count =0; $count <=10; $count++){
    Echo $count . ", ";
}

?>
</body>
</html>