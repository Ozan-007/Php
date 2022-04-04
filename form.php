<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>

<body>
    <!-- <form action="form.php" method="get">
        <label>Name: </label>
        <input type="text" name="name">
        <label>Last Name: </label>
        <input type="text" name="lastname">
        <label>E-mail: </label>
        <input type="email" name="email" required="">
        <br> <br>
        <label>Checkbox: </label>
        <input type="radio" name="yes-no" value="yes" checked="true">
        <input type="radio" name="yes-no" value="no">

        <button type="submit">Submit</button>
    </form> -->

    <br>
    
    <?php
    // echo json_encode($_GET)
    
    ?>
    <?php
    
    function Check($array)
{
     for ($a = 0; $a < count($array); $a++)
            {
                if ($array[$a] == 1 && $array[$a+1] == 2 && $array[$a+2] == 3)
                    return true;
            }
           return false;
 }

//  var_dump(Check(array(1,1,2,3,1)));

    ?>

    <!-- Task-2 -->

    <!-- Write a PHP script to get an array containing all the entries of an array which have the keys that are present in another array.Sample input:1st array : ('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', c4 => 'Black')2nd array : ('c2', 'c4')Sample Output:Array([c2] => Green[c4] => Black) -->

    <?php 
    
    // $arr1 =  array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    // $arr2 = array('c2','c4');
    // $arr3 = array();
    // for ($i=0; $i < sizeof($arr2) ; $i++) { 
    //     $val = $arr2[$i];
    //     echo "$val <br>";
    //     for ($a=0; $a < sizeof($arr1) ; $a++) { 
    //         $val2 = array_keys($arr1)[$a];
    //         echo "$val2 <br>";
    //         if ($val == $val2) {
    //             $arr = array("$val" => $arr1[$val]);
    //             $arr3[$val] = $arr1["$val"];
    //             print_r($arr);   
    //         }
    //     }
    // }

    // print_r($arr3);
?>


<!-- My Solution -->

<?php 

    $arr1 =  array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
    $arr2 = array('c2','c4');
    $arr = array();
    for ($i=0; $i < sizeof($arr2) ; $i++) { 
        $val = $arr2[$i];
        for ($a=0; $a < sizeof($arr1) ; $a++) { 
            $val2 = array_keys($arr1)[$a];
            if ($val == $val2) {
                $arr[$val] = $arr1["$val"];
            }
        }
    }

    print_r($arr);
  

    ?>

<!-- Task-2 -->

<?php
// $array1 = array('blue'  => 1, 'red'  => 2, 'green'  => 3, 'purple' => 4);
// $array2 = array('green' => 5, 'blue' => 6, 'yellow' => 7, 'cyan'   => 8);

// var_dump(array_intersect_key($array1, $array2));

?>















</body>

</html>