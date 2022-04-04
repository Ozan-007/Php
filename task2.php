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