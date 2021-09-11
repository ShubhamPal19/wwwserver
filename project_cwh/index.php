<?php

$submit=false;

if(isset($_POST['name'])){

    
    $server="localhost";
    $username="root";
    $password="";
    
    $con= mysqli_connect($server,$username,$password);
    
    if(!$con){
        die("Connection to this database failed due to ". mysqli_connect_error());
        
    }
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $age=$_POST['age'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $desc=$_POST['desc'];
    
    $sql= "INSERT INTO `trip`.`trip` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;
    
    if($con->query($sql)== true){
        // echo "Successfully inserted";

        $submit=true;
        
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    
    $con->close();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <img src="bg.jpg" class="bg" alt="background">
    
    <div class="container">
        <p class="heading">Welcome  to  IIT Kharagpur US Trip Form</p>
        <p>Enter your details and submit this form to confirm your participation in the trip </p>
        

        <?php
        if($submit==true)
        {
            echo "<p class='tymsg'>Thanks for submitting the form</p>";
        }
        ?>
        <form method="post" action="index.php">

            <input type="text" name="name" id="name" placeholder="Enter Your Name">
            <input type="text" name="age" id="age" placeholder="Enter your Age">
            <input type="text" name="gender" id="gender" placeholder="Enter your gender">
            <input type="text" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
           
            <div class="bttn">
                <button class="btn">Reset</button>
                <button class="btn">Submit</button>
            </div>
        </form>
    </div>
    <script src="index.js">

    </script>

    
</body>
</html>