//Get random values from array.
<?php

   $a=array["Bob", "Petter" , "Dennis" , "Sophia" , "Tania"];



   $indexes=array_rand($a,3);
   foreach($indexes as $index){
    echo $a[$index];
}

?>