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

$age=7;
if($age>18)
{
    echo "<br><h3>You are eligible to vote</h3>";
}
else{
    echo "<br><h3>YOu are underage to vote</h3>";

}
?>





</div>
    
</body>
</html>