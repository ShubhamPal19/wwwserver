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
        padding: 20px;

        display: flex;
        max-width: 80%;
        background-color: grey;
        margin : auto;
        justify-content: center;


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


    $names=array("ravi","rahul","ritik","rohan");


    foreach($names as $name)
    {
        echo "THe name is ",$name,"<br>";
    }


    $i=0;
    for($i=0;$i<20;$i++)
    {
        echo "value of i is ", $i,"<br>";
    }
?>





</div>
    
</body>
</html>