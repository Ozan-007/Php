<!-- declare(strict_types=1) -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rest Assignments</title>
</head>
<body>

<!-- Assignment-7 -->

<!-- <?php
    // $a = 0;
    // while($a <= 100){
    //         if($a%10 ==  0){
    //             echo "-$a";
    //         }
    //         $a++;
    //     }           
    //     ?> -->

<!-- Assignment-8 -->


<?php
    // $x = 2000;
    // do {
    //     echo"$x <br>";
    //     $x+=4;
    // } while ($x <= 2100);
?> 

<?php
    // $x = 2000;
    // do {
    //     echo"$x <br>";
    //     $x+=4;
    // } while ($x <= 2100);
?> 

<?php
//     $colors = array("red","purple","blue");
//     foreach ($colors as $value) {
//         echo "$value <br>";
//     }

//     //!! Difference here is one of the array we defined has key-value pairs. we took keys and then we assigned every value to $values variable. In the other one we directly took the values from the array.!!

//     $ages = array("James" => 20,"Ozan" => 28,"Can" => 30);
//     foreach ($ages as $names => $values) {
//         echo  "$values<br>";
//     }
 ?>

<!-- assignment 11 -->

<?php
//     function familyName($name){
//         if ($name == "Ewa") {
//             echo "$name kowalska <br>";
//         }
//         else{
//             echo "$name kowalski <br>";
//         }
//     }
// familyName("Jan");
// familyName("Adam");
// familyName("Patryk");
// familyName("Ewa");

?>

<!-- assignment 12 -->

<?php
//     function familyName($name,$year){
//         if ($name == "Ewa") {
//             echo "$name kowalska <br>";
//         }
//         else{
//             echo "$name kowalski born in $year <br>";
//         }
//     }
// familyName("Jan", 1975);
// familyName("Adam", 1996);
// familyName("Patryk",1980);
// familyName("Ewa",1990);

?>
<!-- assignment 13 -->
<?php
    // function multiplicate(int $x,int $y){
        //     $z = $x * $y;
        //     return $z;
        // }
        
        // echo "5 * 8 = ".multiplicate(5,8)."<br>";
        // echo "4 * 6 = ".multiplicate(4,6)."<br>";
        // echo "4 * 2 = ".multiplicate(4,2)."<br>";
        ?>

        <!-- assignment 14 -->

<?php
function changeValues(&$name,&$lastname,&$job,&$age){
    $name = "Ozan";
    $lastname = "Eski";
    $job = "Student";
    $age -= 10;;
}

$name = "Marcus";
$lastname = "Morris";
$job = "Player";
$age = 32;

changeValues($name,$lastname,$job,$age);

echo "$name <br>";
echo "$lastname <br>";
echo "$job <br>";
echo "$age <br>";

?>
</body>
</html>