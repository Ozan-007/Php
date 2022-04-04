<?php
    
        function Check($array)
    {
         for ($a = 0; $a < count($array); $a++)
                {
                    if ($array[$a + 2] == 3 && $array[$a+1] == 2 && $array[$a] == 1)
                        return true;
                }
               return false;
     }
    
    
     var_dump(Check(array(1,1,2,3,1)));
     var_dump(Check(array(1,1,2,4,1)));
     var_dump(Check(array(1,1,2,3,1)));
    
        ?>