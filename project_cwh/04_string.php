<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width= , initial-scale=1.0">
    <title>Document</title>


    
</head>

<style>
    .cont{
        display: flex;
        max-width: 80%;
        background-color: grey;
        margin : auto;
        justify-content: center;
        padding:30px;

        flex-wrap:wrap;
        flex-direction:column;
        
        
        
    }
    h3,h2{

        
        display: block;
        margin: auto;
        
    }



</style>
<body>

<div class="cont">
    
<h2>
    Find Your dynamically generated page here 
</h2>

<?php

    $str="This is <br>a break";
    echo $str."<br>";
    $len =strlen($str);
    echo "THe length of string is ". $len;
    // --->  .  operator is used to concatenate the strings;



    // some imp function

    // 1. str_cont_word($str);
    // 2. strrev();
    // 3. strpos($str,"is") return index of the starting position of arg string; 
    // 4. str_replace();




    function product($a,$b)
    {
        return 43*233;
    } 

   $v = product(43,233);
   echo "<br> The product of 43 and 233 is ",$v,"<br>";
?>





</div> 
    
</body>
</html>