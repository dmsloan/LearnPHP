<?php
    include ("includedHeader.php"); //does not throw a error unless the code is required.
    require ("includedFunctions.php"); //require indicates file is required or php will throw a fatal error
    require_once ("includedFunctions.php");//similar to require but stores the file in an array, good for functions
?>

    The header has been included.
    <br/><br/>
<?php
echo hello("Everyone");
?>

    </body>
</html>
