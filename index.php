<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignments</title>
    <link rel="shortcut icon" href="../img/icons8-assignment-64.png" type="image/x-icon">
</head>
<body>
<!-- 1.Write a PHP program to compute the sum of the two given integer values. If the two values are the same, then returns triple their sum. -->

<?php 
    
    // $a = 200;
    // $b = 200;

    // if ($a == $b) {
    //     echo($a*3);
    //   }
    // else {
    //     echo($a+$b);
    // }
    
    ?> 

     
     <!-- 2.Write a PHP program to check two given integers, and return true if one of them is 30 or if their sum is 30. -->
     
     
    <?php 
    
    // $a = 0;
    // $b = 20;

    // if ($a+$b == 30) {
    //     echo('true');
    //   }
    // else if ($a == 30){
    //     echo('true');
    // }
    // else if ($b == 30){
    //     echo('true');
    // }
    // else{
    //     echo('false');
    // }
    
        ?> 


<!-- 3.Write a PHP program to check a given integer and return true if it's even. -->

    <?php 
    
    // $a = 10;
    // $b = 11;

    // if ($b % 2 == 0) {
    //     echo("true");
    //   }
    // else{
    //     echo('false');
    // }
    
        ?> 




<!-- 4.Write a PHP program to create a new string where 'if' is added to the front of a given string. If the string already begins with 'if', return the string unchanged. -->


    <?php 
    
    // $a = "Ozan ";
    // $b = "if"; 
    // if (strpos($a,$b)) {
    //     echo($a);   
    //   }
    // else{
    //     echo($a.$b);
    // }
    
        ?> 




<!-- 5.Write a PHP program to remove the character in a given position of a given string. The given position will be in the range 0..string length -1 inclusive. -->

    <?php 
    
    // $a = "Ozan ";
    // $b = "if"; 
    // if (strpos($a,$b)) {
    //     echo($a);   
    //   }
    // else{
    //     echo($a.$b);
    // }
    
        ?> 


<!-- 6.Write a PHP program to exchange the first and last characters in a given string and return the new string. -->
<?php

$string = "PENCIL";


print substr($string, strlen($string)-1).substr($string,1,strlen($string)-2).substr($string,0,1);

?>




<!-- 7.Write a PHP program to check if a given positive number is a multiple of 3 or a multiple of 7. -->
    
    <?php 

    // $number = 25;

    // if($number%3 == 0){
    //     echo "$number true";
    // } 
    // else if ($number%7 == 0){
    //     echo "$number true";
    // }
    // else{
    //     echo "$number false";
    // }


    
        ?> 

<!-- 8.Write a PHP program to check the largest number among three given integers. -->
    <?php 

    // $number1 = 150;
    // $number2 = 25;
    // $number3 = 35;

    // if($number1 > $number2 && $number1 > $number3){
    //     echo "$number1";
    // } 
    // else if ($number2 > $number1 && $number2 > $number3){
    //     echo "$number2";
    // }
    // else{
    //     echo "$number3";
    // }

        ?> 
<!-- 9.Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal. -->

    <?php 

    // $number1 = 25;
    // $number2 = 25;

    // if(abs($number1-100) > abs($number2-100)){
    //     echo "$number2";
    // } 
    // else if ($number1 == $number2){
    //     echo "0";
    // }
    // else{
    //     echo "$number1";
    // }

        ?> 

<!-- 10.Write a PHP program to compute the sum of two given non-negative integers x and y as long as the sum has the same number of digits as x. If the sum has more digits than x then return x without y. -->

    <?php 

    // $x = 74;
    // $y = 25;
    // $result = $x + $y;
    // if(strlen($result)> strlen($x)) {
    //     print $x;
    // }
    // else{
    //     print $result;
    // }

        ?> 




<!-- 11.Write a PHP program to compute the sum of the digits of a number. -->

    <?php 

    // $number = 744;
    // $digits = str_split($number);
    // $total = 0;
    
    
    // for ($i = 0; $i < strlen($number); $i+=1) {
    //     $total += $digits[$i];
    // }
    // echo $total

        ?> 
    


</body>
</html>