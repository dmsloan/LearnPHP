<?php

// Create Connection
$databaseName='danielle_youtube';
$connect = \mysqli_connect('localhost', 'root', '', $databaseName);

if(mysqli_connect_errno()==""){
    echo 'Connected to database: '. $databaseName. '<br/>';
    $result=mysqli_query($connect, 'SELECT name FROM customers WHERE name LIKE "Harr%"');

}

if(mysqli_connect_errno($connect)){
    echo 'Failed to connect to database because:<br/>'. mysqli_connect_errno(). " ". mysqli_connect_error() . '<br/>';
}
while($row = mysqli_fetch_array($result)){
    echo 'Help me the $row returns ' . $row . ' and $result returns ';
    echo $row ('name').'<br/> ';
    
    
}

?>