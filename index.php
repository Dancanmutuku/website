<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post"> 
        <label>Username:</label><br>
        <input type= "text" name ="Username"><br>
        <label>Password:</label><br>
        <input type= "password" name "Password"><br>
        <input type="submit" value="Log in">
    </form>
</body>
</html>

<?php
   
   echo $_POST["Username"];
   //echo $_POST["Password"];

/*
    echo "I love Valentina Kerubo<br>But she is dramatic<br><br>";

    $name = "Dancan";
    echo "Hello $name, do you love Val?<br>";

    $age = 63;
    echo "Val's age is $age<br>";
//float numbers
    $price = 14.99;
    echo "Your pizza is \${$price}<br>";
    $tax_rate = 5.1;
    echo"The sales tax rate is: {$tax_rate}<br>";

//boolean
    /*$employed = true;
    $online=true;
    $for_sale=true;
    echo"online status: {$online}<br>"

//trial
    $price = 14.99:
    $quantity=3;
    $food = "pizza";
    echo "You have ordered {$quantity} x {$food}s <br>";
    $total= $quantity*$price;
    echo"your total is: \${$total}";

*/
?>
