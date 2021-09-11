<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Project</title>
</head>
<body>
    <div class="cont">
       <h1> <t> PHP Project 0 </h1>

    <?php

    $var1=34;
    $var2=23;
    echo "Varible 1 is ",$var1;
    echo "<br>";
    
    
    echo "variable 2 is", $var2,"\n";
    
    echo "<br>";
    
    
    echo "sum is equal to " ,$var1+$var2;
    echo "<br>";
    //operators in PHP
    //arithmetic operators
     
    
    echo "<br>";
    echo "sum is equal to " ,$var1+$var2,"\n";
    echo "<br>";
    echo "sub is equal to " ,$var1-$var2,"\n";
    echo "<br>";
    echo "multi is equal to " ,$var1*$var2,"\n";
    echo "<br>";
    echo "division is equal to " ,$var1/$var2,"\n";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    //assignment operators

    $new= $var1;
    echo "The value of new var is ", $new;
    echo "<br>";
    $new += $var1;
    echo "The value of new var is ", $new;
    echo "<br>";
    $new *= $var1;
    echo "The value of new var is ", $new;
    echo "<br>";
    $new/= $var1;
    echo "The value of new var is ", $new;
    echo "<br>";


    //constants

    define('P',3.14);
    $varr =P;
    echo $varr;
    echo "<br>";
    echo P;
    echo "<br>";

    //data types in php

    // ->string
    // ->int
    // ->float
    // ->boolean
    // ->array
    // ->object
    echo "data types";
    echo "<br>";
    $var= "this is a string";
    echo var_dump($var);
    echo "<br>";
    $var= 239;
    echo var_dump($var);
    echo "<br>";




?>


    </div>
</body>
</html>